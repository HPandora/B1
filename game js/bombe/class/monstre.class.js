Game.addClass({
	'name': 'Monstre',
	'eventCreate': function(){
		this.nbr_vie=10;	//this fait référence au monstre concerné par l'évènement  (+parametre)
		this.sprite=new Sprite(Game.getImage('spriteMonster'));		//definit l'image
		this.sprite.makeTiles(24,22,1);		// taille (largeur, hauteur,ecart entre chaque instance de dessin)
		this.sprite.tiles=[1,2,3,2];	// ordre d'affichage (animation)
		this.switchPositionWhenLeave=true;	//objet rentrer en collision = absorber
	},
	'eventStep': function(){
		var souris = Game.getMouse(); //recuperation des coordonnées de la souris
		this.x = souris[0];	//application des coordonnées au monstre (abcisse)
		this.y = souris[1]; //application des coordonnées au monstre (ordonnée)
	},
	'eventCollisionWith': function(other){
		if (other.instanceOf(Viande)) {
			Game.instanceDestroy(other);
			this.nbr_vie += 5;
		};
	}
});

Game.addClass({
	'name': 'Bombe',
	'eventCreate': function(){
		this.sprite=new Sprite(Game.getImage('spriteBombe'));		//definit l'image
		this.sprite.makeTiles(16,25);		// taille (largeur, hauteur,ecart entre chaque instance de dessin)
		this.sprite.tiles=[1,2];	// ordre d'affichage (animation)
	},
	'eventStep': function(){
		var souris = Game.getMouse(); //recuperation des coordonnées de la souris
		/* on bloque la bombe dans un cadre invisible*/
		this.x=Math.max(20,Math.min(236-this.sprite.width,souris[0]-this.sprite.width/2));
		this.y=Math.max(200,Math.min(358-this.sprite.height,souris[1]-this.sprite.height/2));
		//this.x = souris[0];	//application des coordonnées au monstre (abcisse)
		//this.y = souris[1]; //application des coordonnées au monstre (ordonnée)
	}
});

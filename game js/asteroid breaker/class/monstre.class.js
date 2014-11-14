Game.addClass({
	'name': 'ship',
	'eventCreate': function(){
		this.nbr_vie=10;	//this fait référence au monstre concerné par l'évènement  (+parametre)
		this.sprite=new Sprite(Game.getImage('spriteShip'));		//definit l'image
		this.sprite.makeTiles(48,49);		// taille (largeur, hauteur,ecart entre chaque instance de dessin)
		//this.sprite.tiles=[1,2,3,2];	// ordre d'affichage (animation)
		//this.switchPositionWhenLeave=true;	//objet rentrer en collision = absorber
	},
	'eventStep': function(){ 
		var left = Game.KEY_LEFT;
		var right = Game.KEY_RIGHT;
		//application des coordonnées au vaisseau (abcisse)
		if (Game.isKeyPressed(left)) {
			this.x =this.x -6;
		}else if (Game.isKeyPressed(right)) {
			this.x =this.x +6;
		}
		
	}/*,
	'eventCollisionWith': function(other){
		if (other.instanceOf(Viande)) {
			Game.instanceDestroy(other);
			this.nbr_vie += 5;
		};
	}*/
});
Game.addClass({
	'name': 'shipFire',
	'eventCreate': function(){
		
		this.sprite=new Sprite(Game.getImage('spriteShipFire'));		//definit l'image
		this.sprite.makeTiles(32,20,8);		// taille (largeur, hauteur,ecart entre chaque instance de dessin)
		this.sprite.tiles=[1,2,3,2];	// ordre d'affichage (animation)
		//this.switchPositionWhenLeave=true;	//objet rentrer en collision = absorber
	},
	'eventStep': function(){ 
		var left = Game.KEY_LEFT;
		var right = Game.KEY_RIGHT;
		//application des coordonnées au vaisseau (abcisse)
		if (Game.isKeyPressed(left)) {
			this.x =this.x -6;
		}else if (Game.isKeyPressed(right)) {
			this.x =this.x +6;
		}
		
	}/*,
	'eventCollisionWith': function(other){
		if (other.instanceOf(Viande)) {
			Game.instanceDestroy(other);
			this.nbr_vie += 5;
		};
	}*/
});



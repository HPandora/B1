Game.addClass({
	'name': 'Feu',
	'eventCreate': function(){
		this.sprite = new Sprite(Game.getImage('spriteBall'));
		this.sprite.makeTiles(64,52,8);		// taille (largeur, hauteur,ecart entre chaque instance de dessin)
		this.sprite.tiles=[1,2,3,4,5,6];	// ordre d'affichage (animation)
		this.x = Game.
		this.y = Game.
		/*On définit aléatoirement ses vitesses*/
		//this.hspeed = Game.random(-4,4);
		//this.vspeed = Game.random(-4,4);
		/* Enfin, si la boule sort de l'écran, elle revient de l'autre côté */
		//this.switchPositionWhenLeave = true;
	}/*,
	'eventCollisionWith': function(other)
	{

		//Si la boule de feu touche la bombe...
		if(other.instanceOf(Bombe))
		{
			//BOUM !
			Game.instanceDestroy(other);
			
		}
	}*/
});
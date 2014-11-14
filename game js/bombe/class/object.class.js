/*Game.addClass({
	'name': 'Viande',
	'eventCreate': function(){
		this.sprite = new Sprite(Game.getImage('spriteViande'));
		this.sprite.makeTiles(35,18);
		this.sprite.tiles[1];
	}
});*/

Game.addClass({
	'name': 'Feu',
	'eventCreate': function(){
		this.sprite = new Sprite(Game.getImage('spriteFeu'));
		/* Notre image n'est composée que d'une seule tile, inutile d'appeler makeTiles !*/
		this.x = Game.random(0,Game.room.width);
		this.y = Game.random(0,200);
		/*On définit aléatoirement ses vitesses*/
		this.hspeed = Game.random(-4,4);
		this.vspeed = Game.random(-4,4);
		/* Enfin, si la boule sort de l'écran, elle revient de l'autre côté */
		this.switchPositionWhenLeave = true;
	},
	'eventCollisionWith': function(other)
	{

		//Si la boule de feu touche la bombe...
		if(other.instanceOf(Bombe))
		{
			//BOUM !
			Game.instanceDestroy(other);
			//Game.playSound('gameOver');
			GameEnd();
		}
	}
});

Game.addClass({
	'name': 'Controleur',
	'eventCreate': function()
	{
		//A la création du contrôleur, on crée notre vaisseau
		Game.instanceCreate(230,330,ship);
		Game.instanceCreate(238,375,shipFire);
		
	for(var i=0; i<5; i++){
		Game.instanceCreate(20,10,asteroid);
		Game.instanceCreate(120,10,asteroid);
		Game.instanceCreate(220,10,asteroid);
		Game.instanceCreate(320,10,asteroid);
		Game.instanceCreate(420,10,asteroid);
	}

		//Puis les boules de feu ! (ici, on en crée 20)
		/*for(var i=0; i<20; i++)
		{
			Game.instanceCreate(0,0,Feu);
		}*/
		
		/* Cette classe n'a pas besoin d'être affichée :
		on ne s'occupe pas de son Sprite ! */
	}
});
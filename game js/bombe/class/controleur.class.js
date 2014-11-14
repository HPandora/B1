Game.addClass({
	'name': 'Controleur',
	'eventCreate': function()
	{

		//A la création du contrôleur, on crée notre bombe
		Game.instanceCreate(118,265,Bombe);
		
		//Puis les boules de feu ! (ici, on en crée 20)
		for(var i=0; i<20; i++)
		{
			Game.instanceCreate(0,0,Feu);
		}
		
		/* Cette classe n'a pas besoin d'être affichée :
		on ne s'occupe pas de son Sprite ! */
	}
});
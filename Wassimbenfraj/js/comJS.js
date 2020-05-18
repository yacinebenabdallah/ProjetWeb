
function testCom()
{

	var myform=document.getElementById('com-form');



	myform.addEventListener('submit',function(e)
	{
		var nom = document.getElementById('nom').value;
	var prenom = document.getElementById('pre').value;
	var objet = document.getElementById('objet').value;
	var message = document.getElementById('msg').value;
	var erreur ="";


		if (nom.trim() == "")
		{
			
			erreur += "*le nom est obligatoire<br>";
			e.preventDefault();
			
		}
		if (prenom.trim() == "")
		{
			
			erreur += "*le prenom est obligatoire<br>";
			e.preventDefault();
			
		}
		if (objet.trim() == "")
		{
			
			erreur += "*Objet est obligatoire<br>";
			e.preventDefault();
			
		}
		if (message.trim() == "")
		{

			erreur += "*Message est obligatoire<br>";
			e.preventDefault();
		
		}
		
		if (erreur != "")
		{
		
			document.getElementById('erreur').innerHTML=erreur;
			erreur = "" ;
			swal ( "Oops" , "verfiez vos champs !" ,  "error" );
		
		}
		else
		{
			swal("BRAVOO !", "Formulaire Rempli !", "success");
		}
		
	});
}

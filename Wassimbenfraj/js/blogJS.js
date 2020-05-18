function testBlog()
{

	var myform=document.getElementById('blog-form');



	myform.addEventListener('submit',function(e)
	{
			var titre = document.getElementById('titre').value;
			var article = document.getElementById('artic').value;
			var hachtag = document.getElementById('hachtag').value;
			var categorie = document.getElementById('cat').value;
			var image = document.getElementById('img').value;
			var erreur= "";


		if (titre.trim() == "")
		{
			
			erreur += "*le titre est obligatoire !<br>";
			e.preventDefault();

		}
		if (article.trim() == "")
		{
			
			erreur += "*Article est obligatoire !<br>";
			e.preventDefault();

		}
		if (hachtag.trim() == "")
		{
			
			erreur += "*Hachtag est obligatoire<br>";
			e.preventDefault();

		}
		if (image.trim() == "")
		{
			
			erreur += "*Image est obligatoire<br>";
			e.preventDefault();

		}
		if (categorie.trim() == "")
		{
			
			erreur += "*Categorie est obligatoire<br>";
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




function testEdit()
{
	
	var myform=document.getElementById('blogEdit-form');



	myform.addEventListener('submit',function(e)
	{
			var titre = document.getElementById('titre').value;
			var article = document.getElementById('artic').value;
			var hachtag = document.getElementById('hachtag').value;
			var categorie = document.getElementById('cat').value;
			var image = document.getElementById('img').value;
			
			var erreur= "";
			
			if (titre.trim() == "")
		{
				
			erreur += "*le titre est obligatoire !<br>";
			e.preventDefault();
			

		}
			if (article.trim() == "")
		{
				
			erreur += "*Article est obligatoire !<br>";
			e.preventDefault();
			

		}
			if (hachtag.trim() == "")
		{
				
			erreur += "*Hachtag est obligatoire !<br>";
			e.preventDefault();
			

		}
			if (image.trim() == "")
		{
				
			erreur += "*Image est obligatoire !<br>";
			e.preventDefault();
			

		}	if (categorie.trim() == "")
		{
				
			erreur += "*Categorie est obligatoire !<br>";
			e.preventDefault();
			

		}
		if (erreur != "")
		{
			document.getElementById('erreur').innerHTML=erreur;
			swal ( "Oops" , "verfiez vos champs !" ,  "error" );
			erreur="";
		}
		else
		{
			document.getElementById('erreur').innerHTML=erreur;
			 swal("BRAVOO !", "Formulaire Rempli !", "success");	
		}

		
		
	});

}
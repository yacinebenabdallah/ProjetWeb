

<?PHP
include "../entities/blog.php";
include "../core/blogC.php";


	$blog=new blog($_GET['titre'],$_GET['article'],$_GET['image'],$_GET['hachtag'],$_GET['categorie']);
    $blogC1=new blogC();
	$blogC1->modifierBlog($blog,$_GET['id']);
	
	header("Location: http://localhost/Formini/backend/uni-blogs.php");

?>

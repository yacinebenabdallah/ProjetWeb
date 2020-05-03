<?PHP
include "../core/blogC.php";
$blogC1=new blogC();
if (isset($_GET["id"])){
	$blogC1->supprimerBlog($_GET["id"]);
	header("Location: http://localhost/Formini/backend/uni-blogs.php");
}

?>
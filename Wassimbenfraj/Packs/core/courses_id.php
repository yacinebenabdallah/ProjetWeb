<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require __DIR__ . '/../core/courseManager.php' ;
//var_dump(__DIR__) ;
$manager =new CourseManager () ;

$reponse=$manager->afficher() ;




$idlist=array() ;
while($data=$reponse->fetch())
{
    array_push($idlist,$data['id']) ; 
}
?>
     
  <script>
 
 if (typeof listid === 'undefined') {
var listid=[];


var temp= <?php echo json_encode($idlist); ?>;
temp.forEach(fill)
function fill(item,index) {
   listid.push(item) ;
}
}

console.log(listid) ;
</script>  
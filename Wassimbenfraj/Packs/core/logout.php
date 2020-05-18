<?php 
session_start();
echo $_SESSION['id'];
session_destroy();
/* if(isset($_SESSION['id']))
{
  echo'1';
}
else
echo '2'; */
 //session_unset() ;

header('Location: '.$_SERVER['HTTP_REFERER']);

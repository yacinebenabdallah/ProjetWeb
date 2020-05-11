<?php  


class Config 
{
  private static $bd=NULL ;

  public static function getConnexion() 
  {
      if(!isset(self::$bd))
        {
           self::$bd = new PDO('mysql:host=localhost;dbname=formini;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
          return self::$bd ;
  }
	

}
?>
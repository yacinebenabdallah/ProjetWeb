<?PHP
//include "/../config.php";
include_once __DIR__."/../../config.php";
class couponC {


	function ajoutercoupon($coupon){
		$sql="insert into coupon (id,type,value,validite)
 values (:id, :type,:value,:validite)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id=$coupon->getid();
        $type=$coupon->gettype();
		$value=$coupon->getvalue();
		$validite=$coupon->getvalidite();

		$req->bindValue(':id',$id);
		$req->bindValue(':type',$type);
		$req->bindValue(':value',$value);
		$req->bindValue(':validite',$validite);

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function affichercoupons(){
		$sql="SElECT * From coupon";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	
	function modifiercoupon($coupon){
		$sql="UPDATE coupon SET type=:type,value=:value,validite=:validite WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		
		$id=$coupon->getid();
        $type=$coupon->gettype();
		$value=$coupon->getvalue();
		$validite=$coupon->getvalidite();
		

		
		
		$datas = array(':id',$id, ':type',$type, ':value',$value, ':validite',$validite);
		$req->bindValue(':id',$id);
		$req->bindValue(':type',$type);
		$req->bindValue(':value',$value);
		$req->bindValue(':validite',$validite);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recuperercoupon($id){
		$sql="SELECT * from coupon where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	function supprimercoupon($id){
		$sql="DELETE FROM coupon where id= :id";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function verifiercoupon($id){
		$sql="SELECT * from coupon where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql)->rowcount();
		
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	
	
}

?>

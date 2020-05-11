<?php
include_once __DIR__."/../core/commandeC.php";

$commandeC= new commandeC();
$listecommandes=$commandeC->recupereridcommande($_SESSION['id'],$date);

foreach($listecommandes as $roa)
{
    $id=$roa['id'];
}

$user=$_SESSION['id'];

header("Location: http://localhost/Formini/facture/facture.php?id=$id&idu=$user&etat=$date&som=$prix&user=");

?>
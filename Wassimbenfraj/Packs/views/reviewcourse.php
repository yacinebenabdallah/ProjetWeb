<?php 

/* require 'php/courses/core/coursemanager.php'; */
//require '/opt/lampp/htdocs/Formini/php/courses/core/courseManager.php';
require __DIR__ . '/../core/review/reviewManager.php' ;
//var_dump(__DIR__) ;
$manager_review =new ReviewManager () ;

$reponse_review=$manager_review->get($_GET['id']) ;
$reponse_review2=$manager_review->calculate($_GET['id']) ;
$data_review=$reponse_review2->fetch();
if($data_review['total']){
$average=(5*$data_review['5star']+4*$data_review['4star']+3*$data_review['3star']+2*$data_review['2star']+$data_review['1star']) /$data_review['total'];
$average=number_format($average, 1, '.', '');

$per5=$data_review['5star']/$data_review['total'] *100 ;
$per5=number_format($per5, 0, '.', '');

$per4=$data_review['4star']/$data_review['total'] *100 ;
$per4=number_format($per4, 0, '.', '');

$per3=$data_review['3star']/$data_review['total'] *100 ;
$per3=number_format($per3, 0, '.', '');

$per2=$data_review['2star']/$data_review['total'] *100 ;
$per2=number_format($per2, 0, '.', '');

$per1=$data_review['1star']/$data_review['total'] *100 ;
$per1=number_format($per1, 0, '.', '');
}
else{
    $average=number_format(0, 1, '.', '');
    $per5=0 ;
    $per4=0 ;
    $per3=0 ;
    $per2=0 ;
    $per1=0 ;
}
if($average<=0)
{
    $all_star=0 ;
    $all_nostar=5 ;
}
else if($average>0 && $average <2) {
    $all_star=1 ;
    $all_nostar=4 ; 
}
else if($average>=2 && $average <3) {
    $all_star=2 ;
    $all_nostar=3 ; 
}
else if($average>=3 && $average <4) {
    $all_star=3 ;
    $all_nostar=2 ; 
}
else if($average>=4 && $average <5) {
    $all_star=4;
    $all_nostar=1 ; 
}
else if($average>= 5) {
    $average=5 ;
    $all_star=5 ;
    $all_nostar=0 ; 
}

?>

<?php 
include "connected.php";
if(isset($_POST['idup'])){
    $idu=$_POST['idup'];
    $nameu=$_POST['nameup'];
    $descriptionu=$_POST['descriptionup'];
    $priceu=$_POST['priceup'];
    $pictureu=$_POST['pictureup'];
    echo $idu;
       $f= $r->update($idu,$nameu,$descriptionu,$priceu,$pictureu);
       if($f)
       echo "yes";
       else
       echo "no";
}




?>
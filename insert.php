<?php 
include "connected.php";

if(isset($_GET['id2'])){
    $id1=$_GET['id2'];
    $name1=$_GET['name2'];
    $description1=$_GET['description2'];
    $price1=$_GET['price2'];
    $picture1=$_GET['picture2'];
   
        echo $id1;
       $f= $r->insert($id1,$name1,$description1,$price1,$picture1);
       if($f)
       echo "yes";
       else
       echo "no";
}
?>
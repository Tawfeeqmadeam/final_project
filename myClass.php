<?php
class store
{
private $DB;
public function __construct(mysqli $DB)
{
    $this->DB=$DB;
}
public function getAllProducts():array {
    $sql = "SELECT * FROM `product`";
    $result = $this->DB->query($sql);
    $a=array();
    $array1=[];
    while ($row=$result->fetch_object()) {
        $id = $row->id;
        $name = $row->name;
        $a['name']=$name;
        $price = $row->price;
        $a['price']=$price;
        $description = $row->description;
        $a['description']=$description;
        $picture= $row->picture;
        $a['picture']=$picture;
        $array1[$id]=$a;
    }
    return $array1;
}
public function insert(int $productId,string $proName,string $description,float $price,string $picture):bool {
    if(!$productId||!$proName||!$description||$price||$picture||$price<0) {
        $query = "INSERT INTO `product` (`id`, `name`, `description`, `price`, `picture`)";
        $query .= "VALUES('" . $productId . "','" . $proName . "','" . $description . "','" . $price . "','" . $picture . "')";
    }else{
        echo 'error';
        exit;
    }

    return $this->DB->query($query);
}
public function update(int $productId,string $proName,string $description,float $price,string $picture):bool {
    if(!$productId||!$proName||!$description||$price||$picture||$price<0) {
        $query = "UPDATE product SET `name` = '" . $proName . "', `description` = '" . $description . "', `price` = '" . $price . "', `picture` = '" . $picture . "' WHERE `id` = '" . $productId . "'";
    }else{
        exit;
    }
   return $this->DB->query($query);
}

public function delete($id):bool{
    $query = "DELETE FROM product WHERE id=".$id."";
    return $this->DB->query($query);
}
public function getErrors():array {
    return $this->DB->error_list;
}

}



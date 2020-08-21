<?php
include "connected.php";
if(isset($_POST['id'])){
    $id=$_POST['id'];
    echo $id;
    if ($r->delete($id)) {
        echo "Record deleted successfully";
      } else {
        echo "Error deleting record: " . $db->error;
      }
}
?>


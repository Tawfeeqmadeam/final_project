<?php 

$array1=$r->getAllProducts();

$i=1;
$j=0;
$flag=true;
?>
<table class="table" id="myTable">
<tr>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Picture</th>
        <th>Action</th>
    </tr>


                <?php 
                   foreach($array1 as $key => $value){
                       ?>
                       
                    <tr class='item' id=<?php echo $key?>>
                    <td  >
                    <div id=<?php echo "name".$key?>><?php echo$value['name']?></div>
                    </td>
                    <td >
                    <div id=<?php echo "description".$key?>><?php echo$value['description']?></div>
                    </td>
                    <td  >
                    <div id=<?php echo "price".$key?>><?php echo$value['price']?></div>
                    </td>
                    <td  >
                    <div><img id=<?php echo "picture".$key?> src=<?php echo $value['picture']?>></div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#myModal1" id=<?php echo $key."button"?>>Update</button>
                        <button type="button" class="btn btn-danger del" name="delete" id=<?php echo $key."del" ?>>delete</button>
                    </td>
                    
                    
                    </tr>
                   <?php } ?>
                   </table>

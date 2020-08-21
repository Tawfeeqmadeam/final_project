<html>
 <head>
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <meta name="keywords" content="online flowers ,Beautiful Blossoms">
           <meta name="description" content="online store for sell flowers">
           <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">         
            <title>Beautiful Blossoms</title>
           <link rel="stylesheet" href="css/bootstrap.min.css" >
           <link rel="stylesheet" href="css/mycss.css" >
          

</head>
<body class="myChangeForm">
    <?php  require("header.php")?>
<h5 id="FilterTable">Filter table</h5>
<input class="form-control" id="myInput" type="text" placeholder="Search..">
<?php
require('connected.php');


//$product = new store($db);
?><div class="content">

    <?php include "allproduct.php" ?>
  </div>
                    <div>
                        <?php 
                        if($key==null)
                        $key=0;
                            ?>

                   <div id="newPru" value=<?php echo ($key+1)?>></div>
                   <!-- The Modal -->
                   <div class="modal " id="myModal1" >
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="close myclose" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body" >
                            <form id="myform1">
                                        <label >Name</label>
                                        <input type="text" class="form-control" oninput=myFunction1("nameModel1") id=<?php echo "nameModel1" ?> placeholder="Enter Name Product" >
                                        

                                        <label >Description</label>
                                        <input type="text"   class="form-control" id=<?php echo "descriptionModel1"?>    oninput= myFunction1("descriptionModel1") placeholder="Enter description Product" >
                                       
                                        <label >Price</label>
                                        <input type="text" class="form-control" id=<?php echo "priceModel1"?> oninput=myFunction1("priceModel1") placeholder="Enter price Product">
                                    
                                   
                                        <label >Picture</label>
                                        <input type="text" class="form-control"  id=<?php echo "pictureModel1"?> oninput=myFunction1("pictureModel1") placeholder="Enter picture Product">
        

                        
                            </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button  type="button" class="btn btn-primary" data-dismiss="modal" id="modelUpdate1">Update</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                            </div>
                        </div>
                    </div>
 <!-- The Modal -->
            <div class="modal" id="myModal2" >
                        <div class="modal-dialog">
                            <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                            <form id="myform2">
                                        <label >Name</label>
                                        <input type="text" class="form-control" id=<?php echo "nameModel2"?> placeholder="Enter Name Product" oninput=myFunction("nameModel2") >
                                        

                                        <label >Description</label>
                                        <input type="text"   class="form-control" id=<?php echo "descriptionModel2"?> placeholder="Enter description Product" oninput=myFunction("descriptionModel2") >
                                       
                                        <label >Price</label>
                                        <input type="text" class="form-control" id=<?php echo "priceModel2"?> placeholder="Enter price Product" oninput=myFunction("priceModel2")>
                                    
                                   
                                        <label >Picture</label>
                                        <input type="text" class="form-control"  id=<?php echo "pictureModel2"?> placeholder="Enter picture Product" oninput=myFunction("pictureModel2")>

                        
                            </form>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button  type="button" class="btn btn-primary" data-dismiss="modal" id=<?php echo "modelCreate2"?>>Create</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                            </div>
                        </div>
                    </div>
                    


<button type="button" class="btn btn-dark btn-block" id=<?php echo "ref"?>>Refreash Table</button>
<button type="button" class="btn btn-primary btn-block buttonCreate" data-toggle="modal" data-target="#myModal2"  >Create New Product</button>
<div id="divnameModel2"></div>
<div id="divdescriptionModel2"></div>
<div id="divpriceModel2"></div>
<div id="divpictureModel2"></div>
<div id="divnameModel1"></div>
<div id="divdescriptionModel1"></div>
<div id="divpriceModel1"></div>
<div id="divpictureModel1"></div>
<?php require("footer.php");?>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="js/myJS.js"></script>
</body>
</html>
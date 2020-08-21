
  $(".myChangeForm").hover(function(){
    document.getElementById("divnameModel2").style.display="none";
    document.getElementById("divdescriptionModel2").style.display="none";
    document.getElementById("divpriceModel2").style.display="none";
   document.getElementById("divpictureModel2").style.display="none";
   document.getElementById("divnameModel1").style.display="none";
   document.getElementById("divdescriptionModel1").style.display="none";
   document.getElementById("divpriceModel1").style.display="none";
  document.getElementById("divpictureModel1").style.display="none";
  });
  //refresh 
  $("#ref").click(function () {
    $(".content").load(" .content" ,function(){
      $(".del").click(function(){  
        str=this.id;
        console.log(str);
        var number =parseInt(str);
            $.post("delete.php",  {  id:number   }, function(res, status){
            });
    });
    node=document.getElementById("newPru");
    id=parseInt(node.getAttribute("value"))+1;
    node.setAttribute("value",id);
    $(document).ready(function(){
      $(".item").click(function(){  
        var node="";
        var nodeOther="";
        x=this.id;
        idCheckUpdate=x;
        //for name 
        node=document.getElementById("name"+x);
        nodeOther=document.getElementById("nameModel1");
        nodeOther.setAttribute("value",node.textContent);
        nameCheckUpdate=node.textContent;
        //for description
        node=document.getElementById("description"+x);
        nodeOther=document.getElementById("descriptionModel1");
        nodeOther.setAttribute("value",node.textContent);
        descriptionCheckUpdate=node.textContent;
    
        //for price
        node=document.getElementById("price"+x);
        nodeOther=document.getElementById("priceModel1");
        nodeOther.setAttribute("value",node.textContent);
        priceCheckUpdate=node.textContent;
    
        //for pic
        node=document.getElementById("picture"+x).getAttribute("src");
        nodeOther=document.getElementById("pictureModel1");
        nodeOther.setAttribute("value",node);
        pictureCheckUpdate=node;
    
      });
    });
    $(document).ready(function(){
      $("#modelUpdate1").click(function(){  
           id=idCheckUpdate;
           name =document.getElementById("divnameModel1").textContent;
           if(name==""){ name = nameCheckUpdate;console.log("1");}
           description= document.getElementById("divdescriptionModel1").textContent;
           if(description==""){ description = descriptionCheckUpdate;console.log("2");}
           price= document.getElementById("divpriceModel1").textContent;
           if(price==""){ price = priceCheckUpdate;console.log("3");}
           picture= document.getElementById("divpictureModel1").textContent;
           if(picture==""){ picture= pictureCheckUpdate;console.log("4");}
          var number =parseInt(id);
          var number1 =parseFloat(price);
          
            $.post("update.php",  { idup:number ,nameup:name,descriptionup:description,priceup:number1 ,pictureup:picture }, function(res, status){
            });
          
         
      });
      });
    });
   

  
  
  });
    
  idCheckUpdate="";
  nameCheckUpdate="";
  descrptionCheckUpdate="";
  priceCheckUpdate="";
  picrureCheckUpdate="";
  
  $(document).ready(function(){
    $(".item").click(function(){  
      var node="";
      var nodeOther="";
      x=this.id;
      idCheckUpdate=x;
      //for name 
      node=document.getElementById("name"+x);
      nodeOther=document.getElementById("nameModel1");
      nodeOther.setAttribute("value",node.textContent);
      nameCheckUpdate=node.textContent;
      //for description
      node=document.getElementById("description"+x);
      nodeOther=document.getElementById("descriptionModel1");
      nodeOther.setAttribute("value",node.textContent);
      descriptionCheckUpdate=node.textContent;
  
      //for price
      node=document.getElementById("price"+x);
      nodeOther=document.getElementById("priceModel1");
      nodeOther.setAttribute("value",node.textContent);
      priceCheckUpdate=node.textContent;
  
      //for pic
      node=document.getElementById("picture"+x).getAttribute("src");
      nodeOther=document.getElementById("pictureModel1");
      nodeOther.setAttribute("value",node);
      pictureCheckUpdate=node;
  
    });
  });
  
  $(document).ready(function(){
    $(".del").click(function(){  
        str=this.id;
        console.log(str);
        var number =parseInt(str);
            $.post("delete.php",  {  id:number   }, function(res, status){
            });
    });
  });
  $(document).ready(function(){
  $("#modelCreate2").click(function(){  
    flag=true;
       node=document.getElementById("newPru");
       id=node.getAttribute("value");
       name =document.getElementById("divnameModel2").textContent;
       description= document.getElementById("divdescriptionModel2").textContent;
       price= document.getElementById("divpriceModel2").textContent;
       picture= document.getElementById("divpictureModel2").textContent;
      var number =parseInt(id);
      var number1 =parseFloat(price);
      
        $.get("insert.php",  { id2:number,name2:name,description2:description,price2:number1 ,picture2:picture }, function(res, status){
        });
      
     
  });
  });
  
  $(document).ready(function(){
    $("#modelUpdate1").click(function(){  
         id=idCheckUpdate;
         name =document.getElementById("divnameModel1").textContent;
         if(name==""){ name = nameCheckUpdate;console.log("1");}
         description= document.getElementById("divdescriptionModel1").textContent;
         if(description==""){ description = descriptionCheckUpdate;console.log("2");}
         price= document.getElementById("divpriceModel1").textContent;
         if(price==""){ price = priceCheckUpdate;console.log("3");}
         picture= document.getElementById("divpictureModel1").textContent;
         if(picture==""){ picture= pictureCheckUpdate;console.log("4");}
        var number =parseInt(id);
        var number1 =parseFloat(price);
        
          $.post("update.php",  { idup:number ,nameup:name,descriptionup:description,priceup:number1 ,pictureup:picture }, function(res, status){
          });
        
       
    });
    });
  function myFunction(t) {
    var x = document.getElementById(t).value;
    console.log(x);
    document.getElementById("div"+t).textContent=x;
  }
  function myFunction1(t) {
    var x = document.getElementById(t).value;
    console.log(x);
    document.getElementById("div"+t).textContent=x;
  }
  $('.myChangeForm').on('mouseover', function () {
      if(document.getElementById("myModal1").style.display=="none")
    $("#myform1").trigger('reset');
  });
  $('.myChangeForm').on('mouseover', function () {
    if(document.getElementById("myModal2").style.display == "none")
      $("#myform2").trigger('reset');
  });
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
  


  
  


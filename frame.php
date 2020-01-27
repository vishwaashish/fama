<!DOCTYPE html>
<html>
  <head>
    <style>
   
 
 

/* frame*/

frame,frameset{
overflow:hidden;
}
    
  /* Clearfix (clear floats) */
  .row::after {
  content: "";
  clear: both;
  display: table;

}
.column1 {
float: left;
width: 35.33%;
padding: 0px;
height: 50%;

}
.polaroid1 {
  width: 44%;
  height:100%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  right: 10px;;
  margin:10px;
  top:10px; 
  border-radius: 5px;
      }

      .frame1{
        border-radius: 5px;
        width:100%;
        height:657px;
        overflow: hidden;
}

  

  
</style>
  </head>
  <?php
//include auth.php file on all secure pages
include("auth.php");
?>
  <?php include 'nav.php' ?>
  
    
<nav  >
      <div style="">
        <div class="row" align="center">
          <div class="polaroid1 column1" >
          <iframe src="search1.php" class="frame1"  ></iframe> 
          </div>
          <div class="polaroid1 column1" >
          <iframe src="search1.php" class="frame1"></iframe>  
          </div> 
        </div>
      </div>      
    
</nav>

<body>
  
<?php include 'footer.php' ?>   
</body>
</html>
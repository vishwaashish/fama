<!DOCTYPE html>
<html>
<head>
	    
        <title>phone comparison</title>
        <style>
            .back{
                width: 100%;
                height:100%;
                background-color: ;
                margin:35px;
                top:10px;
            }

           

          .text1{
            position: absolute;
            display: inline-block;
            font-weight: bolder;
            margin-top: 90px;
            margin-right:-115px;
            font-size: 20px;
            color: #ff3300;
          }
          section{
              height: 50%;
              width: 100%;
              background-color: yellow;
          }
          img {
 width: 100%;
 height: 95%;
 
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
  padding: 5px;
  height: 50%;
  
}
          

          .polaroid1 {
                width: 47%;
                height:35%;
                background-color: white;
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                right: 10px;;
                margin:10px;
                top:10px; 
            }
            /* .polaroid1 :hover{
            width: 70%;
            transform: scale(1.5);
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    
        }
        */
  @media screen and (max-width: 600px)
{
  .polaroid1 {
    width: 50%;
    background-color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    right: 10px;;
    margin:5px;
    top:10px;
  }
  .column1 {
    float: left;
    width: 100%;
    padding: 5px;
    
  }
}
        </style>
</head>

<body>

<?php include 'nav.php' ?>

<nav align="center">
        <div class="row" align="center">
          <div class="polaroid1 column1" >
              <a href="moblephones/1.php">
              <img src="moblephones/1.PNG" onclick="img1click()" alt="Samsung Galaxy A50" >
              </a>
              
          </div>
          <div class="polaroid1 column1" >
              <a href="moblephones/2.php">
              <img src="moblephones/2.PNG" onclick="img2click()" alt="Samsung Galaxy A8">
              </a>
              
          </div>
            <div class="polaroid1  column1" >
              <a href="moblephones/3.php">
              <img  src="moblephones/3.PNG" onclick="img3click()"alt="Samsung Galaxy M30">
              </a> 
            </div>
            <div class="polaroid1  column1" >
                    <a href="moblephones/4.php">
                    <img  src="moblephones/4.PNG" onclick="img3click()"alt="Samsung Galaxy M30">
                    </a> 
            </div>
            <!--2 time -->
            
            <!--2 time -->
           
            
           
        </div>
        <div class="row" align="center">
          <div class="polaroid1 column1" >
              <a href="moblephones/1.php">
              <img src="moblephones/1.PNG" onclick="img1click()" alt="Samsung Galaxy A50" >
              </a>
              
          </div>
          <div class="polaroid1 column1" >
              <a href="moblephones/2.php">
              <img src="moblephones/2.PNG" onclick="img2click()" alt="Samsung Galaxy A8">
              </a>
              
          </div>
            <div class="polaroid1  column1" >
              <a href="moblephones/3.php">
              <img  src="moblephones/3.PNG" onclick="img3click()"alt="Samsung Galaxy M30">
              </a> 
            </div>
            <div class="polaroid1  column1" >
                    <a href="moblephones/4.php">
                    <img  src="moblephones/4.PNG" onclick="img3click()"alt="Samsung Galaxy M30">
                    </a> 
            </div>
            <!--2 time -->
            
            <!--2 time -->
           
            
           
        </div>
        
        <div class="line"> </div> 
    </nav>
</body>
<?php include 'footer.php' ?>   
</html>


   
 
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <title>phone comparison</title>
</head>

<body>

   <?php include 'nav.php' ?>
       
<!-- slide image--> 
<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="img/1.png" style="width:100%">
      
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="img/2.png" style="width:100%">
     
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="img/3.png" style="width:100%">
     
    </div>
</div>
<br>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<!-- Line--> 
<div class="line"> </div> 
<br>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           

<!-- Single mobile--> 
<nav align="center">
    <div class="row" align="center">
      <div class="polaroid column" >
          <a href="last part\xiaomiredminote8pro.php">
          <img src="upload/Xiaomi Redmi Note 8 Pro.jpg" onclick="img1click()" alt="Samsung Galaxy A50" >
          </a>
          <div class="container">
              <p>Xiaomi Redmi Note 8 Pro</p>
          </div>
      </div>
      <div class="polaroid column" >
          <a href="last part\realmext.php">
          <img src="upload/Realme XT.jpeg" onclick="img2click()" alt="Samsung Galaxy A8">
          </a>
          <div class="container">
                  <p>Realme XT</p>
          </div>
      </div>
        <div class="polaroid  column" >
          <a href="last part\redminote7pro.php">
          <img  src="upload/Redmi note 7 pro.jpeg" onclick="img3click()"alt="Samsung Galaxy M30">
          </a>
          <div class="container">
                  <p>Redmi note 7 pro</p>
          </div>
        </div>
        <div class="polaroid  column" >
                <a href="last part\xiaomimia3.php">
                <img  src="upload/Xiaomi mi a3.jpeg" width="100%" onclick="img3click()"alt="Samsung Galaxy M30">
                </a>
                <div class="container">
                        <p>Xiaomi MI A3</p>
                </div>
        </div>
        <div class="polaroid  column" >
                <a href="last part\samsunggalaxym30.php">
                <img  src="upload/Samsung Galaxy M30.jpg" width="100%" onclick="img3click()"alt="Samsung Galaxy M30">
                </a>
                <div class="container">
                        <p>Samsung Galaxy M30</p>
                </div>
        </div>
        <div class="polaroid  column" >
                <a href="last part\samsunggalaxya50.php">
                <img  src="upload/samsang galaxy a50.jpg" width="100%" onclick="img3click()"alt="Samsung Galaxy M30">
                </a>
                <div class="container">
                        <p>Samsung Galaxy A50</p>
                </div>
        </div>
    </div>
    <!-- Line--> 
    <div class="line"> </div> 
</nav>
<!-- mobile compare--> 
<br>
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
        </div>
        <!-- Line--> 
        <div class="line"> </div> 
    </nav>

<?php include 'testimonial.php' ?>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script> <!-- slide image-->
<?php include 'footer.php' ?>
</body>
</html> 

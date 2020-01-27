<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    * {
      box-sizing: border-box;
    }
    
    #myInput {
      background-image: url(/css/searchicon.png);
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
    border-top-left-radius: 32px;
    border-top-right-radius: 30px;
    }
    
    #myUL {
      list-style-type: none;
      padding: 0;
      margin: 0;
    }
    
    #myUL li a {
          /* border: 1px solid #ddd; */
    margin-top: -1px;
    background-color: #5d4954;
    padding: 12px;
    text-decoration: none;
    font-size: 15px;
    color: white;
    display: block;
    }
    
    #myUL li a:hover:not(.header) {
      background-color: white;
      color:#5d4954;
    }
    </style>
    <!-- searchbox -->
<style>
.dropbtn {
  background-color: #5d4954;
  color: white;
  
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
    position: absolute;
    background-color: #5d4954;
    min-width: 201px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    right: -69px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:#5d495441;}

@media screen and (max-width:600px)
{
  .dropbtn {
  background-color: #5d4954;
  color: white;
  font-size: 16px;
  border: none;}
  
  .dropdown {
  position: relative;
  display: inline-block;
  left:30px;

}
}
</style>
<!-- search end-->
<style>
body {
  font-family: "Lato", sans-serif;
  margin: 0%;
}

.nav_head{
    position: relative;
    display:flex;
    justify-content:space-around;
    align-items: center;
    min-height: 80px ;
    background-color:#5d4954; 
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    border-bottom-left-radius: 25px;
    border-bottom-right-radius: 25px;
    border-bottom: 8px solid #f0dae6; 
}

.logo{
    color: white;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-size: 30px;
    font-weight:bolder;
}

@media screen and (max-width-600px)
{
  .logo{
    font-size: 20px;
  }
}


.nav-link a{
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 15px;
    font-size:15px;
}

.burger{
    font-size:30px;
    cursor:pointer;
    color: white;
}

.burger{
    display: none;
}

@media screen and (max-width:600px)
{
  .nav_head{
  
    min-height: 7vh ;
   
    
}
    .nav-link a
    {
        display: none;
    }

    .burger
    {
        float:right;
        display:block;
        margin-top: 5px;
    }
}

.logoburger{
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-size:40px;
    margin-bottom: 2px solid #000000;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 2;
  left: 2;
  background-color: #5d4954;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 30px;
 
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.5s;

  font-family: Verdana, Geneva, Tahoma, sans-serif;

 
 
  
}

.sidenav a:hover {
  background-color:white;
  color:#5d4954;
  transition-duration:0.5s;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-width: 600px) {
 
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 20px;}

}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
<a class="logoburger" class=logoburger"   href="#Compare">FAMA</a><hr><br>
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="../index.php">Home</a>
    <a href="../comparephone.php">PopularComparisons</a>
    <a href="../frame.php">PhoneCompare</a>
    <a href="../compare.php">Compare</a>
    <a href="../news.php">News</a>
    <a href="../contactform.php">Contact</a>
    <a href="../logout.php">Login/Logout</a>
</div>
<header class="nav_head">
<div class="logo">
     <span>FAMA</span>
     
</div>

<div class="nav-link">
    <a href="../index.php">Home</a>
    <a href="../comparephone.php">PopularComparisons</a>
    <a href="../frame.php">PhoneCompare</a>
    <a href="../compare.php">Compare</a>
    <a href="../news.php">News</a>
    <a href="../contactform.php">Contact</a>
    <a href="../logout.php">Login/Logout</a>
    
<div class="dropdown">
  <button class="dropbtn">
      <div class="w3-padding w3-xlarge w3-text-orange">
      
        <i class="fa fa-search"></i>
      </div>
    </button>
    <div class="dropdown-content">
      
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

    <ul id="myUL">
        <li><a href="xiaomiredminote8pro.php">Xiaomi Redmi Note 8 Pro</a></>
        <li><a href="realmext.php">Realme XT</a></li>
        <li><a href="redminote7pro.php">Redmi note 7 pro</a></li>
        <li><a href="xiaomimia3.php">Xiaomi MI A3</a></li>
        <li><a href="samsunggalaxym30.php">Samsung Galaxy M30</a></li>
        <li><a href="samsunggalaxya50.php">Samsung Galaxy A50</a></li>
        
    </ul>
    </div>
</div>
</div> 
<span class="burger" style="" onclick="openNav()">&#9776</span>
</header>
<br>



    

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<!-- search-->
<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>

</body>
</html> 

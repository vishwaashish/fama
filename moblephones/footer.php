<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>  

.footer_col{
    float: left;
    width: 24.68%;
    height: 45vh;
    border-style: outset;
  }
  @media screen and (max-width: 1024px)
{
  .footer_col{
    height: 40vh; /* Should be removed. Only for demonstration */  
  }
}
  @media screen and (max-width: 769px)
{
  .footer_col{
    height: 40vh; /* Should be removed. Only for demonstration */  
  }
}
  @media screen and (max-width: 600px)
{
  .footer_col{
    float: left;
    width: 100%;
    height: 40vh; /* Should be removed. Only for demonstration */  
    font-size:15px;
  }
}
  .fotter_row::after{
    content: "";
    display: table;
    clear: both;
    bottom: 0%;
    margin: 0%;
  }

.nav-l{
    padding:15px 5px;
}
.nav-link1 a{
    line-height: 1px;
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 15px;
    font-size:15px;
    display: block;
    text-align: center;
    line-height: 1.5px;
    
}
.nav-link1 :hover{
 width: 95%;
 transform: scale(1.5);
}

@media screen and (max-width: 600px)
{
  .nav-link1 a{
    font-size:15px;
  }
}
.border1{
  width: 100px;
  height: 4px;
  background: white;
  margin: 5px auto;
}
.heading{
  text-align: center;
  font-size: 20px;
  font-weight: bolder;
  color:white;
}
.block21{
  padding:30px 10px ;
  align-content: center; 
}

.block21 i {
  padding: 5px;
  font-size: 48px;  
  color: white;
  
  
}
.block21 i :hover{
  text-decoration: underline;
}
.button{
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  border-radius: 20px;
  margin-top:10px;
  padding:20px 25px;
  border: none;
  color:#5d4954;
  background-color: azure;
  text-decoration: none;
  text-decoration-line: none;
  display: inline-block;

}
.button :hover{

font-size: 25px;  
transform: scale(1.5);
}


</style>
</head>
<body>
        <footer>
                <div class="footer_row">
                    <div class="footer_col" style="background-color:#5d4954;">
                    <div class="nav-l"></div>
                    <div class="heading">PAGES</div>
                            <div class="border1"></div>
                            <div class="nav-link1">
                            
                            
                            <a href="../index.php">Home</a>
                            <a href="../comparephone.php">PopularComparisons</a>
                            <a href="../compare.php">Compare</a>
                            <a href="../news.php">News</a>
                            <a href="../contactform.php">Contact</a>
                            
                        </div> 
                        
                    </div>
                    
                    <div class="footer_col" style="background-color:#5d4954;">
                    <div class="nav-l"></div>
                    <div class="heading">FOLLOW ON</div> 
                    <div class="border1"></div>
                    <div  class="block21">
                            
                            <div align="center">
                              <i  class="fa" ><a href="#Facebook">&#xf082;</a></i>
                              <i  class="fa"><a href="#Google">&#xf0d4;</a></i>
                              <i  class="fa"><a href="#Linkind">&#xf08c;</a></i>
                              <br>
                              <i  class="fa"><a href="#Pinterest">&#xf0d3;</a></i>
                              <i  class="fa"><a href="#Twitter">&#xf081;</a></i>
                              <i  class="fa"><a href="#Youtube">&#xf16a;</a></i>
                       
                            </div>
                        </div>
                    </div>
            
                    <div class="footer_col" style="background-color:#5d4954;">
                    <div class="nav-l"></div>
                    <div class="heading">COMPARE</div> 
                    <div class="border1"></div>
                        <div  class="block21">
                            
                            <div align="center">
                            <div align="center" class="button"><a href="../compare.php" style="color:#5d4954">COMPARE</a></div>   
                            </div>
                        </div>
                    </div>
            
                    <div class="footer_col" style="background-color:#5d4954;">
                        <div style=" text-align:center; padding:35px 50px; color: white;font-size:20px;  ">
                            <div>Copyright © 2019 Fahad, Ashish, Aswad, Mansi.<br> All rights reserved.</div>
                        </div>  
                    </div>
                </div>
        </footer>

</body>
</html>
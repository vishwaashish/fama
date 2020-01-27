<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phones</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />
    <style>
        /* Basic Styling */
html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}

/* Columns */
.left-column {
  width: 65%;
  position: relative;
}

.right-column {
  width: 35%;
  margin-top: 60px;
}


/* Left Column */
.left-column img {
  width: 85%;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  transition: all 0.3s ease;
}

.left-column img.active {
  opacity: 1;
}

.cd-features-list li {
  font-size: 1.0rem;
  font-weight: bold;
  padding: 15px 20px;
  border-color: #e6e6e6;
  border-bottom-style:solid;
  border-top-width: 1px;
  border-right-width: 1px;
}
.cd-features-list li.rate {
  /* rating stars */
  padding: 21px 0;
}
.cd-features-list li.rate span {
  display: inline-block;
  height: 22px;
  width: 110px;
  background: url(../img/cd-star.svg);
  color: transparent;
}

/* Right Column */

/* Product Description */
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}

/* Product Configuration */
.product-color span,
.cable-config span {
  font-size: 14px;
  font-weight: 400;
  color: #86939E;
  margin-bottom: 20px;
  display: inline-block;
}

/* Product Color */
.product-color {
  margin-bottom: 30px;
}

.color-choose div {
  display: inline-block;
}

.color-choose input[type="radio"] {
  display: none;
}

.color-choose input[type="radio"] + label span {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin: -1px 4px 0 0;
  vertical-align: middle;
  cursor: pointer;
  border-radius: 50%;
}

.color-choose input[type="radio"] + label span {
  border: 2px solid ;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
}

.color-choose input[type="radio"]#red + label span {
  background-color: white;
}
.color-choose input[type="radio"]#blue + label span {
  background-color: #314780;
}
.color-choose input[type="radio"]#black + label span {
  background-color: #323232;
}

.color-choose input[type="radio"]:checked + label span {
  background-image: url(images/check-icn.svg);
  background-repeat: no-repeat;
  background-position: center;
}

/* Cable Configuration */
.cable-choose {
  margin-bottom: 20px;
}

.cable-choose button {
  border: 2px solid #E1E8EE;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color: #5E6977;
  background-color: #fff;
  cursor: pointer;
  transition: all .5s;
}

.cable-choose button:hover,
.cable-choose button:active,
.cable-choose button:focus {
  border: 2px solid #86939E;
  outline: none;
}

.cable-config {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}

.cable-config a {
  color: #358ED7;
  text-decoration: none;
  font-size: 12px;
  position: relative;
  margin: 10px 0;
  display: inline-block;
}
.cable-config a:before {
  content: "?";
  height: 15px;
  width: 15px;
  border-radius: 50%;
  border: 2px solid rgba(53, 142, 215, 0.5);
  display: inline-block;
  text-align: center;
  line-height: 16px;
  opacity: 0.5;
  margin-right: 5px;
}

/* Product Price */
.product-price {
  display: flex;
  align-items: center;
}

.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}

.cart-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-btn:hover {
  background-color: #64af3d;
}

/* Responsive */
@media ((max-width: 2042px) and (min-width:600px) ){
  .container {
    flex-direction: column;
    margin-top: 60px;
  }

  .left-column,
  .right-column {
    width: 100%;
  }

  .left-column img {
    width: 50%;
    right: 0;
    top: -65px;
    left: initial;
  }
}

@media  ((max-width: 600px) and (min-width:200px) ){
  h1{
    font-weight: 300;
font-size: 39px;
color:#43484D;
letter-spacing: -2px;
text-align: center;
}
.product-color {
    margin-bottom: 30px;
    justify-content: center;
    display: grid;
}
  .right-column {
    width: 35%;
    margin-top: 65%;
}
.left-column img {
    width: 100%;
    right: 0;
    top: -103px;
    left: initial;
}
.container {
    flex-direction: column;
    margin-top: 60px;
  }

  .left-column,
  .right-column {
    width: 100%;
  }
  .product-color span, .cable-config span {
    font-size: 14px;
    font-weight: 400;
    color: 
    #86939E;
    margin-bottom: 20px;
    justify-content: center;
    display: grid;
}
  
.cable-config {
    border-bottom: 1px solid 
    #E1E8EE;
    margin-bottom: 20px;
    justify-content: center;
    display: grid;
}
}

    </style>

  </head>

  <body>
  <?php include 'nav.php' ?>
    <main class="container">

      <!-- Left Column / Headphones Image -->
      <div class="left-column">
        <img data-image="black" class="active" src="images/x7bl.png" alt="">
        <img data-image="blue" src="images/x7nb.png" alt="">
        <img data-image="white"  src="images/x7w.png" alt="">
      </div>


      <!-- Right Column -->
      <div class="right-column">
   
    
          <h1>Redmi Note 7 Pro</h1>
                    <!-- Product Configuration -->
        <div class="product-configuration">

          <!-- Product Color -->
          <div class="product-color">
            <span>Color</span>

            <div class="color-choose">
              <div>
                <input data-image="white" type="radio" id="red" name="color" value="red" checked>
                <label for="red"><span></span></label>
              </div>
              <div>
                <input data-image="blue" type="radio" id="blue" name="color" value="blue">
                <label for="blue"><span></span></label>
              </div>
              <div>
                <input data-image="black" type="radio" id="black" name="color" value="black">
                <label for="black"><span></span></label>
              </div>
            </div>

          </div>

         	<ul class="cd-features-list" type="none">
					<li>Price :₹11,999</li>
					<li>RAM : 4GB</li>
					<li>Screen Type : FHD+</li>
					<li>Battery : 4000 mAh </li>
					<li>Processor :  Qualcomm Snapdragon 675</li>
					<li>In built storage : 64 GB ROM | Expandable Upto 256 GB</li>
					<li>Operating system : Android Pie 9.0</li>
					<li>USB Type : C</li>
					<li>Processor speed : 2 GHz</li>
				</ul>
        </div>

       

          <!-- Cable Configuration -->
          <div class="cable-config">
            <span>Variants</span>

            <div class="cable-choose">
              <button>4GB ₹11,999</button>
              <button>6GB ₹14,999 </button>
            </div>

            <a href="../contactform.php">For any queries contact us</a>
          </div>
        </div>

        
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script>
      $(document).ready(function() {
      $('.color-choose input').on('click', function() {
      var headphonesColor = $(this).attr('data-image');
      $('.active').removeClass('active');
      $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
      $(this).addClass('active');
    
        });
      });

    </script>
    <?php include 'footer.php' ?>
  </body>
</html>

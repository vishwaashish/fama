<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<style>
	
	*{
  margin: 0;
  padding: 0;

}
body{
  font-family: "montserrat",sans-serif;
}
.testimonials{
  padding: 20px 0px;
  background: #f1f1f1;
  color: #434343;
  text-align: center;
}
.inner{
  max-width: 1200px;
  margin: auto;
  overflow: hidden;
  
}

.border{
  width: 160px;
  height: 5px;
  background: #6ab04c;
  margin: 5px auto;
}

.row{
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.col{
  flex: 25.33%;
  max-width: 24%;
  box-sizing: border-box;
  padding: 15px;

}
.testimonial{
  background: #fff;
  padding: 30px;
  border-top-right-radius:  50px;
  border-bottom-left-radius: 50px;
}
.testimonial img{
  width: 100px;
  height: 100px;
  border-radius: 50%;
}
.name{
  font-size: 20px;
  font-weight:bolder;
  text-transform: uppercase;
  margin: 20px 0;
}
.stars{
  color: #6ab04c;
  margin-bottom: 20px;
}


@media screen and (max-width:960px) {
.col{
  flex: 100%;
  max-width: 80%;
}
}

@media screen and (max-width:600px) {
.col{
  flex: 100%;
  max-width: 100%;
}
.testimonial
{
  padding:15px 0px;
}
}

	</style>
  <body>

    <div class="testimonials">
      <div class="inner">
        <h1>Reviews</h1>
        <div class="border"></div>

        <div class="row">
          <div class="col">
            <div class="testimonial">
              <img src="testimonial/p2.jpeg" alt="">
              <div class="name">Fahad Patel</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
               This is an amazing webiste with a user frindly UI.Appreciate the hardwork     </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="testimonial/p3.jpeg" alt="">
              <div class="name">Aswad Shaikh</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
              Always Love to visit this website.This website is my guru for reviewing the phones  </p>
            </div>
          </div>
          
          <div class="col">
            <div class="testimonial">
              <img src="testimonial/p4.jpeg" alt="">
              <div class="name">Mansi Nagrale</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <p>
              very easy to use UI , such a great website,user handy for for new users
              </p>
            </div>
          </div>

          <div class="col">
            <div class="testimonial">
              <img src="testimonial/p1.jpg" alt="">
              <div class="name">Ashish kumar</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>

              <p>
              This is an amazing webiste with a user frindly UI.Appreciate the hardwork  </p>
            </div>

          
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
<?php
include 'db.php';


$username = "";
$email = "";
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $trn_date = date("Y-m-d H:i:s");
    $sql_u = "SELECT * FROM users WHERE username='$username'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($con, $sql_u);
    $res_e = mysqli_query($con, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
      $name_error = "Sorry... username already taken"; 	
    }else if(mysqli_num_rows($res_e) > 0){
      $email_error = "Sorry... email already taken"; 	
    }else{
         $query = "INSERT INTO users (username, fullname, password, email, trn_date) 
                  VALUES ('$username', '$fullname', '".md5($password)."', '$email', '$trn_date')";
         $results = mysqli_query($con, $query);
         $sucess_error = "Success"; 	
            
        
    }
} ?>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  
</head>
<body style="background-image: url(img/loginimg1.jpg);  background-size:cover;">
<div class="login">
<h1>Register</h1>
  <form method="post" action="registration.php">
  
    <div  class="form_error" >
    <input type="text" name="fullname" placeholder="Fullname" value="<?php echo $username; ?>" required>
    </div>
  	<div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
	  <?php if (isset($name_error)): ?>
	  	<span  align="center"><?php echo $name_error; ?></span>
	  <?php endif ?>
  	</div>
  	<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
      <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required> 
      <?php if (isset($email_error)): ?>
      	<span  align="center"><?php echo $email_error; ?></span>
      <?php endif ?>
  	</div>
  	<div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> align="center" style="color:green; font-weight:bolder;" >
      <input type="password"  placeholder="Password" name="password" required>
      
  	</div>
    <div class="form_error">
    <?php if (isset($sucess_error)): ?>
      	<span  align="center" style="color:green; font-size:20px"><?php echo $sucess_error; ?></span>
      <?php endif ?>
    </div>
  	
    
  		<button   align="center" class="button1" type="submit" name="register" >Register</button>
      
 
   
    
  </form>
 
    <form method="get" action="index.php">
    <button class="button1" action="index.php" type="submit">Home</button>
    <p class="not_reg" align="center">Already registered!  <a href='login.php'>Login Here</a></p>
    </form>
</div>
</body>
</html>
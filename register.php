<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="style.css" />
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body style="background-image: url(img/loginimg1.jpg);  background-size:cover;">
<section >
<?php
require('db.php');
include 'nav.php';
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='login12'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="login">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<label for="username">
        <i class="fas fa-user"></i>
</label>       
<input type="text" name="username" placeholder="Username" required />
<label for="email">
	<i class="fa fa-envelope"></i>
</label>

<input type="email" name="email" placeholder="Email" required /><br>
<label for="password">
	<i class="fas fa-lock"></i>
</label>
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />

<div align="center" class="button1"><a  onclick="window.location.href = 'index.php';">Home</button></div>
<p class="not_reg" align="center">Not registered yet? <a href='registration.php'>Register Here</a></p>
</form>
</div>
    <?php } ?>
    </section>
</body>
</html>
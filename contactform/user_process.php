<?php
/**
 * Created by PhpStorm.
 * User: ZiaulHaque
 * Date: 11-10-2015
 * Time: 18:25
 */
include("dbconnect.php");
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
/*
 * Inserting data to table
 * */

$query=mysqli_query($db_connect,"INSERT INTO contact (name, email, subject, message) VALUES ('$name','$email','$subject','$message')") or die(mysqli_error($db_connect));


mysqli_close($db_connect);
header("location:in.php?note=success");
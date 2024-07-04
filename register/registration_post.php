<?php 

session_start();
include('../database/db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// name area
if($name){
  $_SESSION['old_name'] = $name;
} else {
  $_SESSION['error_msg'] = "your name is missing*";
  header("location: registration.php");
}

// email area
if($email){
  if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    $_SESSION['old_email'] = $email;
  }else{
    $_SESSION['error_msg'] = "Invalid email format*";
    $_SESSION['email'] = "Invalid email format*";
    header("location: registration.php");
  }
}else{
  $_SESSION['error_msg'] = "email is missing*";
  header("location: registration.php");
}

// password area------->
if($password){
  if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password)){
    $_SESSION['old_password'] = $password;
  }else{
    $_SESSION['error_msg'] = "password is not match requirements*";
    header("location: registration.php");
  }
}else{
  $_SESSION['error_msg'] = "enter your password*";
  header("location: registration.php");
}

// confirm password == password will be match
if($confirm_password){
  if($confirm_password == $password ){
    $_SESSION['old_cn_password'] = $confirm_password;
  }else{
    $_SESSION['error_msg'] = "confirm password & password not match*";
  }
}else{
  $_SESSION['error_msg'] = "enter your confirm password*";
}

// insert into database
if($name && $email && $password){
  
  $select_query = "SELECT COUNT(*) AS email_check FROM users WHERE email='$email'";
  $duplicate_entry = mysqli_query($db_connect,$select_query);
  // password encrypt
  $encrypt = md5($password);

  if(mysqli_fetch_assoc($duplicate_entry)['email_check'] == 0 ){

    $insert_query = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$encrypt')";
    mysqli_query($db_connect,$insert_query);
    // send data login page
    $_SESSION['send_old_email'] = $email;
    $_SESSION['send_old_password'] = $password;
    header("location: ../index.php");

  }else{
    $_SESSION['error_msg'] = "this email is already exsits*";
    header("location: registration.php");
  }
}else{
  $_SESSION['error_msg'] = "something is wrong*";
  header("location: registration.php");
}


?>
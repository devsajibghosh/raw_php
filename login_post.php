<?php 

// session and database connect
session_start();
include('./database/db.php');

$email = $_POST['email'];
$password = md5($_POST['password']);

if($email && $password){
  // slect mail and pass from database
  $select_query = "SELECT COUNT(*) AS result FROM users WHERE email='$email' AND password='$password'";
  // connect to database 
  $connect= mysqli_query($db_connect,$select_query);

  if(mysqli_fetch_assoc($connect)['result'] == 1 ){
    // slect user from database 
    $user_select = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    // connect user
    $user_connect = mysqli_query($db_connect,$user_select);
    $user = mysqli_fetch_assoc($user_connect);
    // send to dashboard admin id name email image
    $_SESSION['admin_id'] = $user['id']; 
    $_SESSION['admin_name'] = $user['name']; 
    $_SESSION['admin_email'] = $user['email']; 
    $_SESSION['admin_image'] = $user['image']; 
    // go to the dashboard
    header('location:./dashboard/home.php');

  }else{
    $_SESSION['login_error'] = "user information not match please registerd*";
    header("location: index.php");
  }
}else{
  $_SESSION['login_error'] = "Enter your email and password*";
  header("location: index.php");
}








?>
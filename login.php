<?php
//Start session
session_start();

error_reporting(0);
//Connect to the database
include("connection.php");
//Check user inputs


    //Define error messages
$missingUsername = '<p><stong>Please enter your username!</strong></p>';
$missingPassword = '<p><stong>Please enter your password!</strong></p>'; 
    //Get username and password
    //Store errors in errors variable
if(empty($_POST["adminusername"])){
    $errors .= $missingUsername;   
}else{
    $username = filter_var($_POST["adminusername"], FILTER_SANITIZE_STRING);
}
if(empty($_POST["adminpassword"])){
    $errors .= $missingPassword;   
}else{
    $password = filter_var($_POST["adminpassword"], FILTER_SANITIZE_STRING);
}
    //If there are any errors
if($errors){
    //print error message
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;   
}else{
    //else: No errors
    //Prepare variables for the query
    $username = mysqli_real_escape_string($link, $username);
$password = mysqli_real_escape_string($link, $password);
        //Run query: Check combinaton of email & password exists
$sql = "SELECT * FROM adminlogin WHERE username='$username' AND password='$password'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo '<div class="alert alert-danger">Error running the query!</div>';
    exit;
}
        //If username & password don't match print error
$count = mysqli_num_rows($result);
if($count !== 1){
    echo '<div class="alert alert-danger">Wrong Username or Password</div>';
}
else {
    //log the user in: Set session variables
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['admin_no']=$row['admin_no'];
    $_SESSION['name']=$row['name'];
    $_SESSION['username']=$row['username'];
    $_SESSION['password']=$row['password'];

    echo 'success';
}
}

?>
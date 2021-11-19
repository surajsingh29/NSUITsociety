<?php
    session_start();
    include('connection.php');

    error_reporting(0);

    $missingName = '<p><strong>Please enter you Full Name!</strong></p>';
    $missingPhone = '<p><strong>Please enter your Phone Number!</strong></p>';
    $invalidPhone = '<p><strong>Please enter a valid Phone Number!</strong></p>';
    $missingsemester = '<p><strong>Please enter your semester!</strong></p>';
    $invalidsemester = '<p><strong>Please enter a valid semester!</strong></p>';
    $missingCourse = '<p><strong>Please enter a course name!</strong></p>';
    if(empty($_POST["contactname"])){
        $errors .= $missingName;
    }else{
        $name = filter_var($_POST["contactname"], FILTER_SANITIZE_STRING);
    }

    if(empty($_POST["contactphone"])){
        $errors .= $missingPhone;
    }elseif(strlen($_POST["contactphone"])<10 || strlen($_POST["contactphone"])>10){
        $errors .= $invalidPhone;
    }
    else{
        $phone = filter_var($_POST["contactphone"], FILTER_SANITIZE_STRING);
    }

    if(empty($_POST["contactsemester"])){
        $errors .= $missingsemester;
    }else{
        $semester = filter_var($_POST["contactsemester"], FILTER_SANITIZE_STRING);
    }

    if(empty($_POST["contactcourse"])){
        $errors .= $missingCourse;
    }else{
        $course = filter_var($_POST["contactcourse"], FILTER_SANITIZE_STRING);
    }

    if($errors){
        $resultMessage = '<div class="alert alert-danger">'. $errors .'</div>';
        echo $resultMessage;
        exit; 
    }

    $name = mysqli_real_escape_string($link, $name);
    $semester = mysqli_real_escape_string($link, $semester);
    $phone = mysqli_real_escape_string($link, $phone);
    $course = mysqli_real_escape_string($link, $course);
    //If phone exists in the users table print error
    $sql = "SELECT * FROM contact WHERE phone = '$phone'";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo '<div class="alert alert-danger">Error running the query!</div>';
    //    echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
        exit;
    }
    $results = mysqli_num_rows($result);
    if($results){
        echo '<div class="alert alert-danger">That phone number already used.</div>';  exit;
    }

    $sql = "INSERT INTO contact (`name`, `course`, `semester`, `phone`) VALUES ('$name', '$course', '$semester', '$phone')";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>'; 
        exit;
    }else{
        echo '<div class="alert alert-success"> Inserted Successfully!</div>';
        exit;
    }

?>
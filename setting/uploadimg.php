<?php
    session_start();
    include('../connection.php');

    error_reporting(0);

    $missingName = '<p><strong>Please enter your Full Name!</strong></p>';
    $missingDesignation = '<p><strong>Please enter Designation!</strong></p>';
    $missingQualification = '<p><strong>Please enter Qualification!</strong></p>';
    $missingDescription = '<p><strong>Please enter a Description!</strong></p>';
    if(empty($_POST["t_name"])){
        $errors .= $missingName;
    }else{
        $name = filter_var($_POST["t_name"], FILTER_SANITIZE_STRING);
    }

    if(empty($_POST["designation"])){
        $errors .= $missingDesignation;
    }
    else{
        $designation = filter_var($_POST["designation"], FILTER_SANITIZE_STRING);
    }

    if(empty($_POST["qualification"])){
        $errors .= $missingQualification;
    }else{
        $qualification = filter_var($_POST["qualification"], FILTER_SANITIZE_STRING);
    }

    if(empty($_POST["description"])){
        $errors .= $missingDescription;
    }else{
        $description = filter_var($_POST["description"], FILTER_SANITIZE_STRING);
    }

    $fileName = $_FILES['file']['name'];

    if($errors){
        $resultMessage = '<div class="alert alert-danger">'. $errors .'</div>';
        echo $resultMessage;
        exit; 
    }
    $name = mysqli_real_escape_string($link, $name);
    $designation = mysqli_real_escape_string($link, $designation);
    $qualification = mysqli_real_escape_string($link, $qualification);
    $description = mysqli_real_escape_string($link, $description);
 
        $fileName = $_FILES['file']['name'];

             $sql1 = "INSERT INTO faculty (`name`, `designation`, `qualification`, `description`, `image`) VALUES ('$name', '$designation', '$qualification', '$description', '".$fileName."')";
            $result1 = mysqli_query($link, $sql1);
            if(!$result1){
                echo '<div class="alert alert-danger">There was an error inserting the users details in the database!</div>'; 
                exit;
            }else{
                echo '<div class="alert alert-success"> Inserted Successfully!</div>';
                exit;
            }
?>
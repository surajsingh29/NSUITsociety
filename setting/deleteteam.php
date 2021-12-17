<?php
session_start();
include('../connection.php');

$team_id = $_GET['id'];
$pub_id = $_GET['id2'];
$tch_id = $_GET['id3'];
$evt_id = $_GET['id4'];
$web_id = $_GET['id5'];
$cnt_id = $_GET['id6'];


$sql1 = "DELETE FROM society_members WHERE id = '$team_id'";
$result1 = mysqli_query($link, $sql1);
if(!$result1){
    echo 'error';   
}else{
    mysqli_close($link); // Close connection
    header("location:teamset.php"); // redirects to all records page
    exit;	
}

$sql2 = "DELETE FROM pubrelteam WHERE id2 = '$pub_id'";
$result2 = mysqli_query($link, $sql2);
if(!$result2){
    echo 'error';   
}else{
    mysqli_close($link); // Close connection
    header("location:teamset.php"); // redirects to all records page
    exit;	
}

$sql3 = "DELETE FROM technicalteam WHERE id3 = '$evt_id'";
$result3 = mysqli_query($link, $sql3);
if(!$result3){
    echo 'error';   
}else{
    mysqli_close($link); // Close connection
    header("location:teamset.php"); // redirects to all records page
    exit;	
}

$sql4 = "DELETE FROM eventteam WHERE id4 = '$tch_id'";
$result4 = mysqli_query($link, $sql4);
if(!$result4){
    echo 'error';   
}else{
    mysqli_close($link); // Close connection
    header("location:teamset.php"); // redirects to all records page
    exit;	
}

$sql5 = "DELETE FROM webappteam WHERE id5 = '$web_id'";
$result5 = mysqli_query($link, $sql5);
if(!$result5){
    echo 'error';   
}else{
    mysqli_close($link); // Close connection
    header("location:teamset.php"); // redirects to all records page
    exit;	
}

$sql6 = "DELETE FROM contentteam WHERE id6 = '$cnt_id'";
$result6 = mysqli_query($link, $sql6);
if(!$result6){
    echo 'error';   
}else{
    mysqli_close($link); // Close connection
    header("location:teamset.php"); // redirects to all records page
    exit;	
}

?>
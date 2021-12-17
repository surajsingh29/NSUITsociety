<?php
session_start();
include('../connection.php');

//get the id of the note through Ajax
$fac_id = $_GET['id'];
// run a query to delete the note
$sql = "DELETE FROM faculty WHERE id = '$fac_id'";
$result = mysqli_query($link, $sql);
if(!$result){
    echo 'error';   
}else{
    mysqli_close($link); // Close connection
    header("location:facultyset.php"); // redirects to all records page
    exit;	
}
?>
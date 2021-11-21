<?php

session_start();

error_reporting();

include('connection.php');

//$name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM society_members";
$sql1 = "SELECT * FROM pubrelteam";
$sql2 = "SELECT * FROM technicalteam";
$sql3 = "SELECT * FROM eventteam";
$sql4 = "SELECT * FROM webappteam";
$sql5 = "SELECT * FROM contentteam";

$result = mysqli_query($link,$sql);
$result1 = mysqli_query($link,$sql1);
$result2 = mysqli_query($link,$sql2);
$result3 = mysqli_query($link,$sql3);
$result4 = mysqli_query($link,$sql4);
$result5 = mysqli_query($link,$sql5);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.jpeg">
    <!--Bootstrap Styling-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--Main Css-->
    <link href="styling.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <title>Team Members</title>
    <style type="text/css">
        h3{
            padding-top: 10px;
        }
    </style>
</head>
<body style="background-image: none;">

    <?php include('include/header.php');?>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Team Members</li>
                <li class="breadcrumb-item"><a href="fac_prof.php">Faculty Members</a></li>
            </ol>
        </nav>

        <div class="members">
            <h4 class="col-xs-6 col-sm-3"><a href="#team_members" onclick="teamMem()">Members</a></h4>
            <h4 class="col-xs-6 col-sm-3"><a href="#evtmem" onclick="evt()">Event Management Team</a></h4>
            <h4 class="col-xs-6 col-sm-3"><a href="#pubrelmem" onclick="prt()">Public Relation Team</a></h4>
            <h4 class="col-xs-6 col-sm-3"><a href="#techcelmem" onclick="tct()">Technical Cell Team</a></h4>
            <h4 class="col-xs-6 col-sm-3"><a href="#webappmem" onclick="wat()">Web App Team</a></h4>
            <h4 class="col-xs-6 col-sm-3"><a href="#contwriter" onclick="cwt()">Content Writers</a></h4>
        </div>

        <div id="team_members" class="team_section">
            <?php
                if(!$result){
                    echo '<div class="alert alert-danger"> Error running the query! </div>';
                    exit;
                }else{
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        echo '<div class="main_members"><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" width="120" height="120"/> <div> <h4>'.$row['name'].'<i>('.$row['designation'].')</i></h4><p>'.$row['class'].'</p></div></div>';
                    }
                }
            ?>
        </div>

        <div id="pubrelmem" class="team_section">
            <h3 class="team-heading">Public Relation Team</h3>
            <?php
                if(!$result1){
                    echo '<div class="alert alert-danger"> Error running the query! </div>';
                    exit;
                }else{
                    while($row = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                        echo '<div class="main_members"><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" width="120" height="120"/> <div> <h4>'.$row['name'].'<i>('.$row['designation'].')</i></h4><p>'.$row['class'].'</p></div></div>';
                    }
                }
            ?>
        </div>

        <div id="techcelmem" class="team_section">
            <h3 class="team-heading">Technical Cell Team</h3>
            <?php
                if(!$result2){
                    echo '<div class="alert alert-danger"> Error running the query! </div>';
                    exit;
                }else{
                    while($row = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                        echo '<div class="main_members"><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" width="120" height="120"/> <div> <h4>'.$row['name'].'<i>('.$row['designation'].')</i></h4><p>'.$row['class'].'</p></div></div>';
                    }
                }
            ?>
        </div>

        <div id="evtmem" class="team_section">
            <h3 class="team-heading">Event Managment Team</h3>
            <?php
                if(!$result3){
                    echo '<div class="alert alert-danger"> Error running the query! </div>';
                    exit;
                }else{
                    while($row = mysqli_fetch_array($result3,MYSQLI_ASSOC)){
                        echo '<div class="main_members"><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" width="120" height="120"/> <div> <h4>'.$row['name'].'<i>('.$row['designation'].')</i></h4><p>'.$row['class'].'</p></div></div>';
                    }
                }
            ?>
        </div>

        <div id="webappmem" class="team_section">
            <h3 class="team-heading">Web App Development Team</h3>
            <?php
                if(!$result4){
                    echo '<div class="alert alert-danger"> Error running the query! </div>';
                    exit;
                }else{
                    while($row = mysqli_fetch_array($result4,MYSQLI_ASSOC)){
                        echo '<div class="main_members"><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" width="120" height="120"/> <div> <h4>'.$row['name'].'<i>('.$row['designation'].')</i></h4><p>'.$row['class'].'</p></div></div>';
                    }
                }
            ?>
        </div>

        <div id="contwriter" class="team_section">
            <h3 class="team-heading">Content Writer Team</h3>
            <?php
                if(!$result5){
                    echo '<div class="alert alert-danger"> Error running the query! </div>';
                    exit;
                }else{
                    while($row = mysqli_fetch_array($result5,MYSQLI_ASSOC)){
                        echo '<div class="main_members"><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" width="120" height="120"/> <div> <h4>'.$row['name'].'<i>('.$row['designation'].')</i></h4><p>'.$row['class'].'</p></div></div>';
                    }
                }
            ?>
        </div>

        <?php include('include/footer.php');?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
</body>
</html>
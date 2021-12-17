<?php

session_start();
include('../connection.php');

$sqlw = "SELECT * FROM society_members";
$sql1 = "SELECT * FROM pubrelteam";
$sql2 = "SELECT * FROM technicalteam";
$sql3 = "SELECT * FROM eventteam";
$sql4 = "SELECT * FROM webappteam";
$sql5 = "SELECT * FROM contentteam";

$resultw = mysqli_query($link,$sqlw);
$result1 = mysqli_query($link,$sql1);
$result2 = mysqli_query($link,$sql2);
$result3 = mysqli_query($link,$sql3);
$result4 = mysqli_query($link,$sql4);
$result5 = mysqli_query($link,$sql5);

//$create_sql = "INSERT INTO events(`name`,`description`,`shortdesc`) values('$name','$description','$shortdesc')";

$username = $_SESSION['username'];

$sql = "SELECT * FROM adminlogin WHERE username = '$username'";
$result = mysqli_query($link,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>NSU IT Society</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../logo.jpeg">
	<!--Bootstrap Styling-->
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<!--Main Css-->
    <link href="../styling.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style type="text/css">
        .container{
            width: 100%;
            height: auto;
            margin-top: 50px;
            display: inline-flex;
        }

        footer{
            margin-top: -5px;
        }

        .admin-panel{
            width: 20%;
            margin-left: -20px;
            padding: 20px 10px 20px 20px;
            height: auto;
            background-color: black;
            color: white;
        }

        .admin-panel-contents{
            width: 80%;
            margin: 0 10%;
        }

        .admin-panel-contents a{
            font-size: 18px;
            padding-bottom: 20px;
            font-family: ARVO;
            text-decoration: none;
            color: lightsteelblue;
        }

        .admin-panel-contents a:hover{
            color: rosybrown;
        }

        .panel-contents{
            width: 80%;
        }

        .admin-info{
            width: 80%;
            margin: 0 10%;
        }

        .delete a{
            text-decoration: none;
            color: white;
        }

    </style>
</head>
<body style="background-image: none;">

    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="../logo.jpeg">NSU IT SOCIETY</a>
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                  
                  </button>
            </div>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                  <ul class="nav navbar-nav navbar-right">
                  <li><a href="../dashboardsetting.php">Welcome <b><?php echo $_SESSION['name']?></b></a></li>
                    <li><a href="../admin.php?logout=1" data-toggle="modal">LOGOUT</a></li>
                  </ul>
              </div>
        </div>
    </nav>
    
    <div class="container">
    	<div class="admin-panel">
    		<div class="admin-panel-contents">
                <a href="eventset.php">Events</a><br>
    			<a href="facultyset.php">Faculty</a><br>
                <a href="#team-members">Team Members</a><br>
    			<a href="#contact">Contact Requests</a>
    		</div>
    	</div>
    	<div class="panel-contents">
            <div class="col-xs-6 admin-info">
            <h2>Team Details:</h2>

                <div class="members">
                    <h4 class="col-xs-6 col-sm-3"><a href="#team_members" onclick="teamMem()">Members</a></h4>
                    <h4 class="col-xs-6 col-sm-3"><a href="#evtmem" onclick="evt()">Event Management Team</a></h4>
                    <h4 class="col-xs-6 col-sm-3"><a href="#pubrelmem" onclick="prt()">Public Relation Team</a></h4>
                    <h4 class="col-xs-6 col-sm-3"><a href="#techcelmem" onclick="tct()">Technical Cell Team</a></h4>
                    <h4 class="col-xs-6 col-sm-3"><a href="#webappmem" onclick="wat()">Web App Team</a></h4>
                    <h4 class="col-xs-6 col-sm-3"><a href="#contwriter" onclick="cwt()">Content Writers</a></h4>
                </div>
                <div class="table-responsive" id="team_members">
                    <table class="table table-hover table-bordered">
                    <?php
                        if(!$result){
                            echo '<div class="alert alert-danger"> Error running the query! </div>';
                            exit;
                        }else{
                            echo '<tr><td>Image</td><td>Name</td><td>Designation</td><td>Class</td><td>REMOVE</td></tr>';
                            while($row = mysqli_fetch_array($resultw,MYSQLI_ASSOC)){
                                echo '<tr><td><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" 
                                width="50px" height="50px"/></td><td>'.$row['name'].'</td><td>'.$row['designation'].'
                                </td><td>'.$row['class'].'</td><td><button class="btn-lg btn-danger delete" style="width:100%">
                                <a href="deleteteam.php?id='.$row['id'].'">Delete</a></button></td></tr>';
                            }
                        }
                    ?>
                    </table>
                </div>
                <div class="table-responsive" id="pubrelmem">
                    <table class="table table-hover table-condensed table-bordered" >
                    
                        <?php
                            if(!$result1){
                                echo '<div class="alert alert-danger"> Error running the query! </div>';
                                exit;
                            }else{
                                echo '<tr><td>Image</td><td>Name</td><td>Designation</td><td>Class</td></tr>';
                                while($row = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                                    echo '<tr><td><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" 
                                width="50px" height="50px"/></td><td>'.$row['name'].'</td><td>'.$row['designation'].'
                                </td><td>'.$row['class'].'</td><td><button class="btn-lg btn-danger delete" style="width:100%">
                                <a href="deleteteam.php?id2='.$row['id2'].'">Delete</a></button></td></tr>';
                                }
                            }
                        ?>
                    </table>
                </div>
                <div class="table-reponsive" id="techcelmem">
                    <table class="table table-hover table-condensed table-bordered" >
                            <?php
                                if(!$result2){
                                    echo '<div class="alert alert-danger"> Error running the query! </div>';
                                exit;
                            }else{
                                echo '<tr><td>Image</td><td>Name</td><td>Designation</td><td>Class</td></tr>';
                                while($row = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                                    echo '<tr><td><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" 
                                    width="50px" height="50px"/></td><td>'.$row['name'].'</td><td>'.$row['designation'].'
                                    </td><td>'.$row['class'].'</td><td><button class="btn-lg btn-danger delete" style="width:100%">
                                    <a href="deleteteam.php?id3='.$row['id3'].'">Delete</a></button></td></tr>';
                                }
                            }
                        ?>
                    </table>
                </div>
                <div class="table-responsive" id="evtmem">
                    <table class="table table-hover table-condensed table-bordered">
                            <?php
                                if(!$result3){
                                    echo '<div class="alert alert-danger"> Error running the query! </div>';
                                    exit;
                                }else{
                                    echo '<tr><td>Image</td><td>Name</td><td>Designation</td><td>Class</td></tr>';
                                    while($row = mysqli_fetch_array($result3,MYSQLI_ASSOC)){
                                        echo '<tr><td><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" 
                                width="50px" height="50px"/></td><td>'.$row['name'].'</td><td>'.$row['designation'].'
                                </td><td>'.$row['class'].'</td><td><button class="btn-lg btn-danger delete" style="width:100%">
                                <a href="deleteteam.php?id4='.$row['id4'].'">Delete</a></button></td></tr>';
                                    }
                                }
                            ?>
                        </table>
                    </div>
                <div class="table-responsive" id="webappmem">
                        <table class="table table-hover table-condensed table-bordered">
                            <?php
                                if(!$result4){
                                    echo '<div class="alert alert-danger"> Error running the query! </div>';
                                    exit;
                                }else{
                                    echo '<tr><td>Image</td><td>Name</td><td>Designation</td><td>Class</td></tr>';
                                    while($row = mysqli_fetch_array($result4,MYSQLI_ASSOC)){
                                        echo '<tr><td><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" 
                                            width="50px" height="50px"/></td><td>'.$row['name'].'</td><td>'.$row['designation'].'
                                            </td><td>'.$row['class'].'</td><td><button class="btn-lg btn-danger delete" style="width:100%">
                                            <a href="deleteteam.php?id5='.$row['id5'].'">Delete</a></button></td></tr>';
                                    }
                                }
                            ?>
                        </table>
                    </div>
                <div class="table-responsive" id="contwriter">
                        <table class="table table-hover table-condensed table-bordered">
                            <?php
                                if(!$result5){
                                    echo '<div class="alert alert-danger"> Error running the query! </div>';
                                    exit;
                                }else{
                                    echo '<tr><td>Image</td><td>Name</td><td>Designation</td><td>Class</td></tr>';
                                    while($row = mysqli_fetch_array($result5,MYSQLI_ASSOC)){
                                        echo '<tr><td><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" 
                                width="50px" height="50px"/></td><td>'.$row['name'].'</td><td>'.$row['designation'].'
                                </td><td>'.$row['class'].'</td><td><button class="btn-lg btn-danger delete" style="width:100%">
                                <a href="deleteteam.php?id6='.$row['id6'].'">Delete</a></button></td></tr>';
                                    }
                                }
                            ?>
                        </table>   
                </div>             
    		</div>
    	</div>
    </div>
        <?php include('../include/footer.php');?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../javascript.js"></script>
</body>
</html>
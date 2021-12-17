<?php

session_start();
include('../connection.php');

$sqleve = "select * from events";
$resulteve = mysqli_query($link, $sqleve);

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
            margin-left: -20px;
            width: 100%;
            height: 576px;
            margin-top: 50px;
            display: inline-flex;
        }

        footer{
            margin-top: -5px;
        }

        .admin-panel{
            width: 20%;
            padding: 20px 10px 20px 20px;
            height: 100%;
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
            width: 70%;
            margin: 0 15%;
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
                <a href="setting/eventset.php">Events</a><br>
    			<a href="facultyset.php">Faculty</a><br>
                <a href="#team-members">Team Members</a><br>
    			<a href="#contact">Contact Requests</a>
    		</div>
    	</div>
    	<div class="panel-contents">
            <div class="col-md-offset-3 admin-info">
                  <h2>Events Details:</h2>
                  <div class="table-responsive">
                      <table class="table table-hover table-condensed table-bordered">
                      	<?php
                			if(!$result){
                    			echo '<div class="alert alert-danger"> Error running the query! </div>';
                    			exit;
                			}else{
                				echo '<tr><td>Image</td><td>Name</td><td>Description</td><td>Short Description</td></tr>';
                    			while($row = mysqli_fetch_array($resulteve,MYSQLI_ASSOC)){
                        		echo '<tr><td><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="50px" height="50px"/></td><td>'.$row['name'].'</td><td>'.$row['shortdesc'].'</td><td>'.$row['description'].'</td></tr>';
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
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
</body>
</html>
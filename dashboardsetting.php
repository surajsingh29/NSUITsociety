<?php
session_start();
include('connection.php');
//error_reporting(0);
if(!isset($_SESSION['username']))
{
    header("location: index.php");
}

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
	<link rel="icon" href="logo.jpeg">
	<!--Bootstrap Styling-->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!--Main Css-->
    <link href="styling.css" rel="stylesheet">
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
            width: 40%;
            margin: 0 30%;
        }
    </style>
</head>
<body style="background-image: none;">

    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><img src="logo.jpeg">NSU IT SOCIETY</a>
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                  
                  </button>
            </div>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="dashboardsetting.php">Welcome <b><?php echo $_SESSION['name']?></b></a></li>
                    <li><a href="admin.php?logout=1" data-toggle="modal">LOGOUT</a></li>
                  </ul>
              </div>
        </div>
    </nav>
    
    <div class="container">
    	<div class="admin-panel">
    		<div class="admin-panel-contents">
                <a href="setting/eventset.php">Events</a><br>
    			<a href="setting/facultyset.php">Faculty</a><br>
                <a href="#team-members">Team Members</a><br>
    			<a href="#contact">Contact Requests</a>
    		</div>
    	</div>
    	<div class="panel-contents">
            <div class="col-md-offset-3 admin-info">

                  <h2>Admin Details:</h2>
                  <div class="table-responsive">
                      <table class="table table-hover table-condensed table-bordered">
                          <tr data-target="#updatename" data-toggle="modal">
                              <td >Name</td>
                              <td ><?php echo $_SESSION['name']?></td>
                          </tr>
                          <tr data-target="#updateusername" data-toggle="modal">
                              <td >Username</td>
                              <td ><?php echo $username ?></td>
                          </tr>
                          <tr data-target="#updatepassword" data-toggle="modal">
                              <td >Password</td>
                              <td >hidden</td>
                          </tr>
                      </table>
                  
                  </div>
              
              </div>
    	</div>
    </div>
        <?php include('include/footer.php');?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
</body>
</html>
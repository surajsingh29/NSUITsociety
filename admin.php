<?php
session_start();
include('connection.php');

if(isset($_SESSION['username']) && $_GET['logout'] == 1){
        session_destroy();    
}
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
            text-align: center;
            width: 70%;
            background-color: #1b4169;
            z-index: 999;
            padding: 30px;
            margin: 60px 15%;
        }
    </style>
</head>
<body style="background-image: none;">

    <?php include('include/header.php');?>	
    
    <div class="container">
    	<!--<div class="admin-panel">
    		<div class="admin-panel-contents">
    			<a href="#web-settings">Website Settings</a>
    			<a href="#faculty">Faculty</a>
    			<a href="#team-members">Team Members</a>
    		</div>
    	</div>
    	<div class="panel-contents">
    		<div class="web-settings" id="web-settings">
    			
    		</div>
    		<div class="faculty" id="faculty">
    			
    		</div>
    		<div class="team-members" id="team-members">
    			
    		</div>
    	</div>-->
        <form method="POST"  id="adminloginform">
            <div id="loginmessage"></div>
            <div class="adminforminputs">
                <label for="adminname" class="sr-only">Admin Username</label>
                <input type="text" name="adminusername" id="adminusername" placeholder="Enter Username" />
                <label for="adminpassword" class="sr-only">Admin Password</label>
                <input type="password" name="adminpassword" id="adminpassword" placeholder=" Enter Password" />
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
</body>
</html>
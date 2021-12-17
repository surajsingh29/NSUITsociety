<?php

session_start();
include('../connection.php');

$sqlfac = "select * from faculty";
$resultfac = mysqli_query($link, $sqlfac);

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
        .modal{
            width: 30%;
            margin: 40px 35% 0 35%;
        }
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
            width: 80%;
            margin: 0 10%;
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
                <a href="teamset.php">Team Members</a><br>
    			<a href="#contact">Contact Requests</a>
    		</div>
    	</div>
    	<div class="panel-contents">
            <div class="col-xs-6 admin-info">
                  <h2>Faculty Details:</h2>
                  <div class="table-responsive" style="display: inline-flex;">
                      <table class="table table-hover table-condensed table-bordered">
                      	<?php
                			if(!$result){
                    			echo '<div class="alert alert-danger"> Error running the query! </div>';
                    			exit;
                			}else{
                				echo '<tr><td>Image</td><td>Name</td><td>Designation</td><td>Qualification</td><td>Description</td><td>REMOVE</td></tr>';
                    			while($row = mysqli_fetch_array($resultfac,MYSQLI_ASSOC)){
                        		echo '<tr id="edit_id"><td><img src="data:image/jpeg;base64,'.base64_encode($row['image']).'" width="50px" height="50px"/></td><td>'.$row['name'].'</td><td>'.$row['designation'].'</td><td>'.$row['qualification'].'</td><td>'.$row['description'].'</td><td><button class="btn-lg btn-danger delete" style="width:100%"><a href="deleterow.php?id='.$row['id'].'">Delete</a></button></td></tr>';
                    			}
                			}
            			?>
                      </table>  
                      <div class="edit-panel" id="edit-panel">
                          <!--Ajax call to php file-->
                      </div>
                  </div>    
                    <button class="btn btn-info btn-lg pull-left"><a href="#facultymodal" data-toggle="modal">Insert</a></button>       
                </div>
    		</div>
    	</div>
    </div>
        <?php include('../include/footer.php');?>


        <form method="POST" action="" id="insertfacultyform" enctype="multipart/form-data"> 
            <div class="modal" id="facultymodal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialogue">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" onclick="dataReset()" data-dismiss="modal">&times;</button>
                            Insert Details:
                        </div>
                        <div class="modal-body">

                        <!--Contact form submission message from PHP file-->

                            <div id="uploadmessage"></div>

                                <div class="form-group">
                                    <label for="t_name" class="sr-only">Name: </label>
                                    <input class="form-control" type="text" name="t_name" id="t_name" placeholder="Name" maxlength="50">
                                </div>
                                <div class="form-group">
                                    <label for="designation" class="sr-only">Designation: </label>
                                    <input class="form-control" type="text" name="designation" id="designation" placeholder="Designation" maxlength="30">
                                </div>
                                <div class="form-group">
                                    <label for="qualification" class="sr-only">Qualification: </label>
                                    <input class="form-control" type="text" name="qualification" id="qualification" placeholder="Qualification" maxlength="300">
                                </div>
                                <div class="form-group">
                                    <label for="description" class="sr-only">Description: </label>
                                    <input class="form-control" type="text" name="description" id="description" placeholder="Description" maxlength="300">
                                </div>  
                                <div class="form-group">
                                <input type="file" name="file" id="file">
                                </div>                
                            </div>
                            <div class="modal-footer">
                                <input class="btn green" name="but_upload" type="submit" value="Submit">
                                <button type="button" onclick="dataReset()" class="btn btn-default" data-dismiss="modal">
                                Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="setting.js"></script>
</body>
</html>
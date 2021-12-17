<?php

include('connection.php');

$sql = "select * from events order by event_no desc limit 3";
$result = mysqli_query($link, $sql);

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
    <title>Events</title>
</head>
<body style="background-image: none;">

<?php include('include/header.php');?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Events</li>
            </ol>
        </nav>


        <center><h1 style="padding-top: 20px;">Profile of Faculty Members</h1></center>

        <div id="team_members" class="team_section">
            <?php
                if(!$result){
                    echo '<div class="alert alert-danger"> Error running the query! </div>';
                    exit;
                }else{
                    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                        echo '<div class="main_members"><img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" width="120" height="120"/> <div> <h4>'.$row['name'].'<i>('.$row['description'].')</i></h4><p><br>'.$row['shortdesc'].'</p></div></div>';
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
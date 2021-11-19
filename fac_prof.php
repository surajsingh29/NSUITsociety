<?php
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
    <title>Faculty Members</title>
</head>
<body style="background-image: none;">

<?php include('include/header.php');?>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Faculty Members</li>
                <li class="breadcrumb-item"><a href="team.php">Team Members</a></li>
            </ol>
        </nav>


        <center><h1 style="padding-top: 20px;">Profile of Faculty Members</h1></center>

        <div id="team_members" class="team_section">
            <div class="main_members"><img src="img/ranjansir.jpg" width="120" height="120"/><div><h4><i>Dr. Ranjan Kumar Mishra <i>(Dean IT)</i></h4><p> Ph.D.(CS)<br>2 years of Industrial Experience & 10 years of Teaching</p></div></div>
            <div class="main_members"><img src="img/kishorsir.jpg" width="120" height="120"/><div><h4>Lal Kishore Kumar <i>(Associate Professor)</i></h4><p>MCA, Microsoft Certified Professional<br>14+ years of teaching experience.</p></div></div>
            <div class="main_members"><img src="img/bijaysir.jpg" width="120" height="120"/><div><h4>Bijay Singh <i>(Associate Professor)</i></h4><p>MCA, M.Tech, CISCO Certified, NET qualified<br>13+ years of experience.</p></div></div>
            <div class="main_members"><img src="img/prashantsir.jpg" width="120" height="120"/><div><h4>Prashant Pradhan <i>(Associate Professor)</i></h4><p>B.E/B.Tech<br>Software Engineer (Back End), SharePoint for 2 years and Teaching Experience for 3 Years.</p></div></div>
        </div>

        <?php include('include/footer.php');?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
</body>
</html>

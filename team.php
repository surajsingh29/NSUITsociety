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
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4><i>Gaurav Kumar <i>(President)</i></h4><p> loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Sneha Kumari <i>(Vice President)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Malini Tandi <i>(General Secretary)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Sidhant Basa <i>(General Secretary)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Simran Kaur <i>(General Secretary)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Satyam Kumar <i>(Treasurer)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Reshmi Kumari <i>(Co-Treasurer)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
        </div>

        <div id="evtmem" class="team_section">
            <h3 class="team-heading">Event Managment Team</h3>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Abhishek Kumar <i>(Team Leader)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Manas Pandey <i>(Senior Batch Leader)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Reshma Kumari <i>(Senior Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Sushant Kumar <i>(Senior Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Shubham Dey <i>(Senior Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Reshmi Kumari <i>(Senior Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Rohan Kumar <i>(Senior Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Biswajit Kumar Shaw <i>(Senior Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Shahnawaz Ahmed <i>(Junior Batch Leader)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Niharika Kumari <i>(Junior Batch Leader)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Shradha <i>(Junior Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Arzamaan Maaz <i>(Junior Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Aryan Chandra <i>(Junior Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Roshni Gupta <i>(Junior Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Md. Javed <i>(Junior Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Anamika Kumari <i>(Junior Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
        </div>

        <div id="pubrelmem" class="team_section">
            <h3 class="team-heading">Public Relation Team</h3>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Mehanjul Hassan <i>(Team Leader)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Rohan Kumar <i>(Senior Batch Leader)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Mohit Kumar Sahu <i>(Senior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Purushottam Mahapatra <i>(Senior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Sushant Kumar <i>(Senior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Tushar Satyam <i>(Senior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Damini Kumari <i>(Senior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Jyoti Rani Shaw <i>(Senior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Shubham Paul <i>(Senior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Arzamaan Maaz <i>(Junior Batch Leader)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Amaan Ahmed <i>(Junior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Aryan Chandra <i>(Junior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Sidhant Basa <i>(Junior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Sujata Gorai <i>(Junior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Umesh Mahato <i>(Junior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Nitish Rana <i>(Junior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Prince Yadav <i>(Junior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Pushkar Kumar Sahu <i>(Junior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Ritesh Sankritya <i>(Junior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Priya Kumari <i>(Junior Batch Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
        </div>

        <div id="techcelmem" class="team_section">
            <h3 class="team-heading">Technical Cell Team</h3>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Adarsh Kumar <i>(Team Leader)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Rampukar Kumar <i>(Team Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Abhishek Layek <i>(Team Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Umesh Mahato <i>(Team Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Simran Kaur <i>(Team Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Lovely Patel <i>(Senior Advisor)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Akshya Kumar Jha <i>(Senior Advisor)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Riya Rani Singh <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Sanjay Kumar <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Puja Kumari <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
        </div>

        <div id="webappmem" class="team_section">
            <h3 class="team-heading">Web App Development Team</h3>
            <div class="main_members"><img src="suraj.png" width="120" height="120"/><div><h4>Suraj Singh <i>(Team Leader)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Lovely Patel <i>(Co-Team Leader)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Gaurav Kumar <i>(Co-Team Leader)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Sweta Kumari <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Mehnajul Hassan <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Ritu Kumari <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Madhumita Kujur <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Priyanka Kumari Rajak <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Priti Kumari <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Faisal Khan <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Manas Pandey <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Abhishek Kumar <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Abhishek Layek <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Shubham Gupta <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Somnath Koley <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
        </div>

        <div id="contwriter" class="team_section">
            <h3 class="team-heading">Content Writer Team</h3>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Priti Kumari <i>(Team Leader)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Aman Kumar <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Gaurav Kumar <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Aman Keshri <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Akansha Kumari <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
            <div class="main_members"><img src="founder.png" width="120" height="120"/><div><h4>Isha Rani Das <i>(Member)</i></h4><p>loren epsum this is just an example of team settings.</p></div></div>
        </div>

        <?php include('include/footer.php');?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
</body>
</html>
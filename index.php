<?php
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
        .profiles{
            display: inline-flex;
            flex-wrap: wrap;
        }

        .profiles a{
            text-decoration: none;
            border: 2px solid #1b4169;
            padding: 5px 12px;
            color: #1b4169;
            transition: 0.3s ease;
        }

        .profiles a:hover{
            background-color: #1b4169;
            color: white;
        }
    </style>
</head>
<body>

    <?php include('include/header.php');?>
	<!--Main Logo display-->
	<div class="main-logo">
		<img src="mainlogo.png" alt="logo_of_society"/>
	</div>

	<!--About Section-->
	<div class="about" id="about">
            <div class="about-society">
                <h2>About NSU IT Society</h2>
                <p>The Society is the official Information Technology students society of Netaji Subhas
                    University.
                </p>
            </div>

            <div class="vision">
                <h3>Vision</h3>
                <p>To be a leading student organization providing a well-coordinated support hub for IT students to engage
                    , explore and evolove as resposible IT professionals with creative and innovative minds.
                </p>
            </div>

            <div class="mission">
                <h3>Mission</h3>
                <p>To deliver a high quality student centered support hub that encourages IT students to improve academically; participate in college and external activities; 
                    foster a responsible sharing of knowledge; offer opportunities in exploring and nurturing values; improve cognitive and technical skills; 
                    and stimulate social reponsibility awareness which will assist them to learn, grow and fully prepared to face the challenges in life outside the campus and 
                    global workforce.
                </p>
            </div>

            <div class="objectives">
                <h3>Objectives</h3>
                <ol>
                    <li>Provide an effective support to improve students’ academic performance.</li>
                    <li>Improve students’ engagement in college and external activities which include but not limited to industry visits, seminars, workshops and training.</li>
                    <li>Strengthen students’ relationship with one another fostering a responsible sharing of knowledge through the use of different tools of communications and personal interactions.</li>
                    <li>Provide opportunities to explore and nurture students’ talents in cognitive and IT skills, entrepreneurial and interpersonal skills and develop ethical behavior.</li>
                    <li>Stimulate students’ awareness on their social responsibility.</li>
                </ol><br/><br/>

            <div class="profiles">
                <a href="fac_prof.php" style="margin-right: 10px;">Our faculty members</a>
                <a href="team.php">Team Members</a>
            </div>
        </div>
        
        <?php include('include/footer.php');?>

    

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
</body>
</html>
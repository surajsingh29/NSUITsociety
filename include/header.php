<?php
?>

<style type="text/css">
  .modal{
            width: 30%;
            margin: 40px 35% 0 35%;
        }
</style>

<nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="logo.jpeg">NSU IT SOCIETY</a>
				<button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                  
                  </button>
			</div>
			<div class="navbar-collapse collapse" id="navbarCollapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php#about">About</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="#contactmodal" data-toggle="modal">Contact us</a></li>
                  </ul>
              </div>
		</div>
	</nav>


  <form method="post" id="contactform">
            <div class="modal" id="contactmodal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialogue">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">&times;</button>
                            Contact Us:
                        </div>
                        <div class="modal-body">

<!--Contact form submission message from PHP file-->

                            <div id="contactusmessage"></div>
                                <div class="form-group">
                                    <label for="contactname" class="sr-only">Name: </label>
                                    <input class="form-control" type="text" name="contactname" id="contactname" placeholder="Name" maxlength="50">
                                </div>
                                <div class="form-group">
                                    <label for="contactcourse" class="sr-only">Course: </label>
                                    <input class="form-control" type="text" name="contactcourse" id="contactcourse" placeholder="Course" maxlength="30">
                                </div>
                                <div class="form-group">
                                    <label for="contactsemester" class="sr-only">Semester: </label>
                                    <input class="form-control" type="text" name="contactsemester" id="contactsemester" placeholder="Semester" maxlength="30">
                                </div>
                                <div class="form-group">
                                    <label for="contactphone" class="sr-only">Phone: </label>
                                    <input class="form-control" type="text" name="contactphone" id="contactphone" placeholder="Phone" maxlength="30">
                                </div>                  
                            </div>
                            <div class="modal-footer">
                                <input class="btn green" name="login" type="submit" value="Submit">
                                <button type="button" class="btn btn-default" data-dismiss="modal">
                                Cancel
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

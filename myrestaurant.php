<?php
include('session_m.php');

if(!isset($login_session)){
header('Location: managerlogin.php'); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>

  <head>
    <title> Gelato </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/myrestaurant.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>


    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"> <img src="Gelato.png" width="150" align="left" style="margin-top=0;padding-top=0;filter: drop-shadow(0px 0px 20px black);"> </a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
       
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome <?php echo $login_session; ?> </a></li>
            <li class="active"> <a href="managerlogin.php">MANAGER</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
        </div>

      </div>
    </nav>



    <br><br><br><br><br><br>

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		<a href="myrestaurant.php" class="list-group-item active">My Restaurant</a>
    		<a href="view_food_items.php" class="list-group-item ">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    	
    	</div>
    </div>
    
    

    
    <div class="col-xs-9">
      <div class="form-area" style="padding: 0px 100px 100px 100px;">
        <form action="myrestaurant1.php" method="POST">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> MY RESTAURANT</h3>

          <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Your Restaurant's Name" required="" >
          </div>

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your Restaurant's Email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" size="50">
          </div>     

          <div class="form-group">
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Your Restaurant's Contact Number" required="" pattern="[789][0-9]{9}">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="address" name="address" placeholder="Your Restaurant's Address" required="">
          </div>

          <div class="form-group">
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right"> ADD RESTAURANT </button>    
      </div>
        </form>

        
        </div>
      
    </div>
</div>

  </body>
</html>
<?php
session_start();
?>

<html>

  <head>
    <title> Gelato </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

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
          <a class="navbar-brand" href="index.php">   <a class="navbar-brand" href="index.php"> <img src="Gelato.png" width="150" align="left" style="margin-top=0;padding-top=0;filter: drop-shadow(0px 0px 20px black);"> </a>
 </a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
           
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"> Order Now </a></li>
            <li><a href="cart.php"> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>



<?php
}
?>
       </div>

      </div>
    </nav>

     <style type="text/css">
   
        header {
    background-color: #D9AFD9;
background-image: linear-gradient(0deg, #D9AFD9 0%, #97D9E1 100%);

  padding-top: 0;
            margin-top: 0;
  background-size: cover;
  background-position: center;
  position: relative;
}
    
      </style>
      
      <br><br><br><br><br><br>
      <header class="page-header header container-fluid" style="background: linear-gradient(to right, #0f2027, #203a43, #2c5364);"> 


           
           <div class="description">
               <br>
               <br>
               <br>
               <h1 align="center"><font color="white"> Order Milkshakes, Ice-Creams and more..!! </font></h1>
               
               <p align="center" size = "20">  </p>
               
             <br>
    
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
               
               
    

               
 
  <br>
  <br><br>

              
 




</div>

</header>

   
    <br>
    <div class="orderblock">
    <h2>Login as: </h2> <br>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > User </a>  <a class="btn btn-success btn-lg" href="managerlogin.php" role="button" >  Manager </a></center> 
   
    </div>

        <br><br>
     <h1 align="center"> Today's offers </h1>
      
     <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col"> Item Name</th>
      <th scope="col"> MRP </th>
      <th scope="col"> Discounted Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td> Vanilla milkshake </td>
      <td> <del> ₹250 </del></td>
      <td> ₹200 </td>
    </tr>
   
  </tbody>
</table>
     

  

    
  
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Spark Foundation Bank</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Caveat&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Caveat|Cookie&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Delius&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" crossorigin="anonymous">
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>

<body style="background-color : pink">
<!-- including navbar -->
<?php
  include 'navbar.php';
?>

<!-- main content -->
<div class="container">
<div class="two">Welcome to</div>
<h1><font size="65">
<span style="color: black">T</span>
<span style="color: black">H</span>
<span style="color: black">E</span>
<span style="color: red">S</span>
<span style="color: red">P</span>
<span style="color: red">A</span>
<span style="color: red">R</span>
<span style="color: red">K</span>
<span style="color: red">S</span>
<span style="color: black">B</span>
<span style="color: black">A</span>
<span style="color: black">N</span>
<span style="color: black">K</span>
</font>
</h1>

<div class="three" >This Basic Banking System helps to transfer money between users .<br> 
    It's a simple process , first of all you have to create user and then after you can make transaction<br>
    you just need to click on users name and it will automatically jump to next page<br> 
    where you need to select the user to whom you want to transfer money and the amount you want to transfer.<br>
   </div>

    <div class="four"> 
        Now just click the submit button and YEEEE!!!! YOUR  TRANSACTION  IS  SUCCESSFUL:)
    </div> 
    <br><br><br>


<!-- cards -->
<div class="card-group">
    <div class="card">
    <img style="height:230px" class="card-img-top" src="images/user.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">CREATE USER</h5>
        <p class="card-text">If user wants to create his/her aaccount in TSF bank then they are free to do it. thay can create by clicking below button.</p>
        <a href="create.php" class="btn btn-primary">click here</a>
      </div>
    </div>
    <div class="card">
    <img style="height:230px" class="card-img-top" src="images/transaction.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">TRANSFER MONEY</h5>
        <p class="card-text"> After creating account there are so many transaction done via user so for doing transaction on other user account they can do it from below.</p>
        <a href="transfermoney.php" class="btn btn-primary">click here</a>
      </div>
    </div>
    <div class="card">
    <img style="height:230px" class="card-img-top" src="images/history.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">TRANSACTION HISTORY</h5>
        <p class="card-text">if someone wants to check the transaction such as how many transaction done via particular user then we are able to see it from below.</p>
        <a href="transactionhistory.php" class="btn btn-primary">click here</a>
      </div>
    </div>
</div>
</div>
<!-- end of main part -->


<!-- footer -->
<footer class="text-center mt-5 py-2 bg-dark text-light">
            <p>&copy 2021. Made by <b>pranjal barot</b> <br> 
            <a href="mailto:pranjalbrahmbhatt585@gmail.com" onmouseover="this.style.color='red'" onmouseout="this.style.color='aqua'">pranjal.com</a>
            </p>
          <div class="symbol">
                 <a  href="" onmouseover="this.style.color='red'" onmouseout="this.style.color='aqua'"><i class="fab fa-twitter fa-2x"></i></a>
                 <a href="https://github.com/pranjalbarot/" onmouseover="this.style.color='red'" onmouseout="this.style.color='aqua'" ><i class="fab fa-github fa-2x"></i></a>
                  <a href="https://www.linkedin.com/in/pranjal-brahmbhatt-7243211b9/" onmouseover="this.style.color='red'" onmouseout="this.style.color='aqua'"><i class="fab fa-linkedin fa-2x"></i></a>
                  <a href="https://www.instagram.com/_pranju._/" onmouseover="this.style.color='red'" onmouseout="this.style.color='aqua'"><i class="fab fa-instagram fa-2x"></i></a>
         </div>    
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_start();
if($_SESSION && $_SESSION['validity']==1){
?>
<html>

<head>

<title>Profile</title>

<link rel="stylesheet" type="text/css" href="css/estilo_form.css">

<link rel="stylesheet" type="text/css" href="css/estilo_css.css">

<script src="js/login.js"></script>
</head>

</head>

<body>



<div class="header">

  <h1>Wellcome to your profile</h1>

  <p>Here you can customize your status and settings</p>

</div>

<div class="topnav">

  <a href="index.php"> <h3> Home </h3></a>

  <a href="gallery.php"> <h3> Gallery </h3></a>

  <a href="pfp.php"> <h3> Profile </h3></a>

  <div class="button">
    <input type="button" value="Search">  
  </div>
  <div class="search">
    <input type="text" placeholder="Type to search">  
  </div>

</div>
<div class="row">

  <div class="leftcolumn">
<div style="width: 100%; height: 100%;">

<div id="customize" style="display:block;width: 100%;">

    <div class="card" style="width: 100%;">
      <center> <h1> Customize your account </h1> </center>
      <center><h2>Current status:</h2></center>

      <h4><p id="statustxt"> No status currently</h4> </p><br>
      <input type="text" placeholder="New status" id="newstatus">
      <button type="button" onclick="changestatus()">Confirm</button> 

<form name="pfp_form" action="" method="post" enctype="multipart/form-data">
      <label>Profile picture: <br></label>
      <input type="file" name="pfp">
      <input type="submit" placeholder="Confirm">
</form>
      <br>
      Your profile picture: <br>
      <br>
      <a href="logout.php"> Click here to log out</a>
      </center>
    </div>
</div>
</div>
  </div>

  <div class="rightcolumn">

  <?php
if($_SESSION && $_SESSION['validity']==1){
?>
    <div class="card" id="logged" style="width: 100%; height: auto;">
    
   <center> <h2> You're logged in! </h2> <br> Wellcome admin </center>

   <center> <a href="logout.php">Click here to logout</a></center>
      
    </div>   
<?php
}else{
?>
   
    <div class="card" id="test">

      <h2>Log in the site</h2>

      <div class="formulary">

        <form name="form"  method="post" action="confirm.php">

        <label>Type your username:</label><br>

        <input type="text" name="login" placeholder="Username" id="username"></input><br>

        <label>Type your password:</label><br>

        <input type="password" name="password"  placeholder="Password" id="pass"></input><br>
        <input type="checkbox"> Remember me

        <input type="submit" value="Confirm">

        </form>
      
      </div>

    <p>

        Do you want to create a account? 

        <a href="createacc.php">Click here to create a new account</a>

      </p>
    </div>
<?php
}
?>
    <div class="card">

      <h3>Trending Posts</h3>

      <div class="fakeimg"><p>Post made by UserName. <br><img src="img/b.jpg" alt=""><br>  
      Posted at 20/08/22</p></div><br>

      <div class="fakeimg"><p>Post made by UserName. <br><img src="img/luan.jpg" alt=""><br>Posted at 20/08/22</p></div><br>

      <div class="fakeimg"><p>Post made by UserName. <br><img src="img/test.jpg" alt=""><br>Posted at 20/08/22</p></div><br>

    </div>

<?php
if($_SESSION && $_SESSION['validity']==1){
?>

    <div class="card" style="display:block;width: 100%;" id="status" >

      <h3>Your current status:</h3>

      <p id="statustxt2">You don't have any status currently</p>

    </div>
<?php
}else{
?>
      
    <div class="card" id="nostatus">

      <h3>Here you can see your status</h3>

      <p>You must be logged in to use your status</p>

    </div>
<?php
}
?>

  </div>

</div>



<div class="footer">

  <h2>Developed by Giovanni P. Oliveira.</h2><br>
  all rights reserved to Giovanni P. Oliveira.

</div>



</body>

</html>


<?php
}else{
?>
<html>

<head>

<title>Profile</title>

<link rel="stylesheet" type="text/css" href="css/estilo_form.css">

<link rel="stylesheet" type="text/css" href="css/estilo_css.css">

<script src="js/login.js"></script>
</head>

</head>

<body>



<div class="header">

  <h1>Wellcome to your profile</h1>

  <p>Here you can customize your status and settings</p>

</div>

<div class="topnav">

  <a href="index.php"> <h3> Home </h3></a>

  <a href="gallery.php"> <h3> Gallery </h3></a>

  <a href="pfp.php"> <h3> Profile </h3></a>

  <div class="button">
    <input type="button" value="Search">  
  </div>
  <div class="search">
    <input type="text" placeholder="Type to search">  
  </div>

</div>
<div class="row">

  <div class="leftcolumn">
<div style="width: 100%; height: 100%;">
  <div class="card" id="nologin">

    <center> <H1> You must be logged in to use this page!</H1></center>

    <Center> <img src="img/login.jpg" style="width: 60%;"></Center>

  </div>

</div>
  </div>

  <div class="rightcolumn">

  <?php
if($_SESSION && $_SESSION['validity']==1){
?>
    <div class="card" id="logged" style="width: 100%; height: auto;">
    
   <center> <h2> You're logged in! </h2> <br> Wellcome admin </center>

   <center> <a href="logout.php">Click here to logout</a></center>
      
    </div>   
<?php
}else{
?>
   
    <div class="card" id="test">

      <h2>Log in the site</h2>

      <div class="formulary">

        <form name="form"  method="post" action="confirm.php">

        <label>Type your username:</label><br>

        <input type="text" name="login" placeholder="Username" id="username"></input><br>

        <label>Type your password:</label><br>

        <input type="password" name="password"  placeholder="Password" id="pass"></input><br>
        <input type="checkbox"> Remember me

        <input type="submit" value="Confirm">

        </form>
      
      </div>

    <p>

        Do you want to create a account? 

        <a href="createacc.php">Click here to create a new account</a>

      </p>
    </div>
<?php
}
?>
    <div class="card">

      <h3>Trending Posts</h3>

      <div class="fakeimg"><p>Post made by UserName. <br><img src="img/b.jpg" alt=""><br>  
      Posted at 20/08/22</p></div><br>

      <div class="fakeimg"><p>Post made by UserName. <br><img src="img/luan.jpg" alt=""><br>Posted at 20/08/22</p></div><br>

      <div class="fakeimg"><p>Post made by UserName. <br><img src="img/test.jpg" alt=""><br>Posted at 20/08/22</p></div><br>

    </div>

<?php
if($_SESSION && $_SESSION['validity']==1){
?>

    <div class="card" style="display:block;width: 100%;" id="status" >

      <h3>Your current status:</h3>

      <p>You don't have any status currently</p>

    </div>
<?php
}else{
?>
      
    <div class="card" id="nostatus">

      <h3>Here you can see your status</h3>

      <p>You must be logged in to use your status</p>

    </div>
<?php
}
?>


  </div>

</div>



<div class="footer">

  <h2>Developed by Giovanni P. Oliveira.</h2><br>
  all rights reserved to Giovanni P. Oliveira.

</div>



</body>

</html>
<?php
}
?>
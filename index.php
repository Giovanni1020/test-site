<html>

<head>

<title>Homepage</title>

<link rel="stylesheet" type="text/css" href="css/estilo_form.css">

<link rel="stylesheet" type="text/css" href="css/estilo_css.css">

<script src="js/login.js"></script>
</head>

</head>

<body>



<div class="header">

  <h1>Wellcome to my site</h1>

  <p>Hopefully you'll enjoy it</p>

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

    <center> <h1> Recent articles </h1> </center>

    <div class="card">

      <h2>Luan santana, one of the most incredible artists of the modern age</h2>

      <h5>In this article we'll discuss why and how luan santana became one of the best singers of all times</h5>

      <div class="fakeimg" style="height:200px; ;">
        <center>
        <img src="img/luan.jpg" style="width: 20%;">
        </center>
      </div>

      <p>Luan santana, a brazilian singer of the modern times, has proven to be a incredible singer of our times... <a href=""> Read more</a></p>

      <p>Article published at 15/08/22</p>

    </div>

    <div class="card">

      <h2>Geese, one of the most interesting animals to ever live</h2>

      <h5>In this article we'll see the interesting and incredible life of wild geese.</h5>

      <div class="fakeimg" style="height:200px; ;">
        <center>
        <img src="img/c.jpg" style="width:20%; display: inline-block">
        </center>
      </div>

      <p>Geese are known for their cute appearence, flying in groups, and eating fish, this species of birds are also... ... <a href=""> Read more</a></p>

      <p>Article published at 13/08/22</p>
    </div>
    <center><h1> Trending articles</h1></center>
    <div class="card">

      <h2>Hollow Knight: Silksong, the long awaited sequel finally announced</h2>

      <h5>One of the best games of all times, hollow knight, finally had its sequel oficially announced</h5>

      <div class="fakeimg" style="height:200px; ;">
        <center>
        <img src="img/test.jpg" style="width:20%;display: inline-block;">
       
        </center>
      </div>

      <p>Hollow knight, one of the best games ever made, had its sequel announced at 2019, but recently, at 2022, we had a oficial announcement of a possible release date for the long awaited game... <a href=""> Read more</a></p>

      <p>Article published at 20/08/22</p>
    </div>

  </div>

  <div class="rightcolumn">
<?php
session_start();

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

        <a href="">Click here to create a new account</a>

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

    <div class="card" style="display:block; width: 100%;" id="status" >

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


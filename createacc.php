<html>

<head>

  <title>Create a account</title>

  <link rel="stylesheet" type="text/css" href="css/estilo_form.css">

  <link rel="stylesheet" type="text/css" href="css/estilo_css.css">

  <script src="js/login.js"></script>
</head>

</head>

<body>



  <div class="header">

    <h1>Here you can make a new account</h1>

    <p>Wellcome to your new account!</p>

  </div>

  <div class="topnav">

    <a href="index.php">
      <h3> Home </h3>
    </a>

    <a href="gallery.php">
      <h3> Gallery </h3>
    </a>

    <a href="pfp.php">
      <h3> Profile </h3>
    </a>
    <a href="chat.php">
      <h3> Chat </h3>
    </a>
    <a href="users.php">
      <h3> Users </h3>
    </a>

    <a href="friends.php">
      <h3> Friends </h3>
    </a>

    <div class="button">
      <input type="button" value="Search">
    </div>
    <div class="search">
      <input type="text" placeholder="Type to search">
    </div>

  </div>
  <div class="row">

    <div class="leftcolumn">
      <?php
      session_start();
      if ($_SESSION && $_SESSION["validity"] == 1) { ?>
        <div class="card">
          <center>
            <h2>You're already logged in! <br>
              You can't create a new account when you already have one.</h2>
          </center>
        </div>
      <?php } else { ?>
        <div class="card">
          <form name="newacc" method="post" action="newacc.php" enctype="multipart/form-data">
            <label>Type your name: </label><br>
            <center>
              <input type="text" placeholder="Name" name="realname" required><br>
            </center>
            <label>Type your UserName: </label><br>
            <center>
              <input type="text" placeholder="UserName" name="username" required><br>
            </center>
            <label>Type your new password: </label><br>
            <center>
              <input type="text" placeholder="Password" name="newpass" required><br>
            </center>
            <label>Type your phone number: </label><br>
            <input type="number" placeholder="Cellphone number" name="phone" required> <br> <br>
            <label>Type your E-Mail: </label><br>
            <input type="email" placeholder="E-Mail" name="email" required><br><br>
            <label> Inser a profile picture: </label><br>
            <input type="file" placeholder="Profile picture" name="pfp" required> <br><br>
            <center>
              <img src="img/terms.jpg" style="width:100%"><br> <br>
              <input type="checkbox" required> I agree to the Terms & Conditions. <br><br>
              <input type="submit">
            </center>
          </form>
        </div>
      <?php }
      ?>
    </div>
    <div class="rightcolumn">
      <?php if ($_SESSION && $_SESSION["validity"] == 1) { ?>
        <div class="card" id="logged" style="width: 100%; height: auto;">

          <?php
          echo "<center><h2> You're logged in! </h2> <br> Wellcome " . $_SESSION['login'] . "</center>";
          ?>

          <center> <a href="logout.php">Click here to logout</a></center>

        </div>
      <?php } else { ?>

        <div class="card" id="test">

          <h2>Log in the site</h2>

          <div class="formulary">

            <form name="form" method="post" action="confirm.php">

              <label>Type your username:</label><br>

              <input type="text" name="login" placeholder="Username" id="username"></input><br>

              <label>Type your password:</label><br>

              <input type="password" name="password" placeholder="Password" id="pass"></input><br>
              <input type="checkbox"> Remember me

              <input type="submit" value="Confirm">

            </form>

          </div>

          <p>

            Do you want to create a account?

            <a href="createacc.php">Click here to create a new account</a>

          </p>
        </div>
      <?php } ?>
      <div class="card">

        <h3>Trending Posts</h3>

        <div class="fakeimg">
          <p>Post made by UserName. <br><img src="img/b.jpg" alt=""><br>
            Posted at 20/08/22</p>
        </div><br>

        <div class="fakeimg">
          <p>Post made by UserName. <br><img src="img/luan.jpg" alt=""><br>Posted at 20/08/22</p>
        </div><br>

        <div class="fakeimg">
          <p>Post made by UserName. <br><img src="img/test.jpg" alt=""><br>Posted at 20/08/22</p>
        </div><br>

      </div>

      <?php if ($_SESSION && $_SESSION["validity"] == 1) { ?>

        <div class="card" style="display:block; width: 100%;" id="status">

          <h3>Your current status:</h3>

          <?php
          $ip = "localhost";
          $user = "root";
          $password = "";
          $data_base = "test-site";
          $connection = new mysqli($ip, $user, $password, $data_base);
          $user = $_SESSION['login'];
          $action = "SELECT * FROM profile WHERE user='$user'";
          $result = $connection->query($action);
          $line = mysqli_fetch_assoc($result);
          $status = $line['status'];
          echo $status;
          ?>

        </div>
      <?php } else { ?>

        <div class="card" id="nostatus">

          <h3>Here you can see your status</h3>

          <p>You must be logged in to use your status</p>

        </div>
      <?php } ?>

    </div>

  </div>



  <div class="footer">

    <h2>Developed by Giovanni P. Oliveira.</h2><br>
    all rights reserved to Giovanni P. Oliveira.

  </div>



</body>


</html>
<?php
session_start();
if ($_SESSION && $_SESSION['validity'] == 1) {
?>
  <html>

  <head>

    <title>Gallery</title>

    <link rel="stylesheet" type="text/css" href="css/estilo_form.css">

    <link rel="stylesheet" type="text/css" href="css/estilo_css.css">

    <link rel="stylesheet" type="text/css" href="css/gallery.css">

    <script src="js/login.js"></script>

  </head>

  <body>



    <div class="header">

      <h1>Wellcome to the gallery</h1>

      <p>Here you can save and see your images</p>

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

        <div class="card" style="height:350">

          <center>
            <h2> Upload your images: </h2>
            <?php
            $user_id = $_SESSION['id'];
            echo "<form name='galleryupload' method='post' enctype='multipart/form-data' action='galleryupload.php?user_id=$user_id'>";
            ?>
            <label> Insert the image you want to upload here: </label><br><br>
            <input type="file" placeholder="Image" name="imgupload" required>
            <p>
              <label> Insert a description for your image: </label> <br>
              <input type="text" placeholder="Description" name="imgdesc" required><br>
              <input type="submit">
              </form>
          </center>
          <br><br>


        </div>

        <div class="card" style="height:550">

          <h2>Your images</h2>


          <?php
          $ip = "localhost";
          $user = "root";
          $password = "";
          $data_base = "test-site";
          $connection = new mysqli($ip, $user, $password, $data_base);
          $usr_check = $_SESSION['login'];
          $action = "select * from gallery where user='$usr_check'";
          $result = $connection->query($action);
          for ($i = 0; $i < 8; $i++) {
            $line = mysqli_fetch_assoc($result);
            if (isset($line)) {
              $img_id = $line['id'];
              $img = $line['img'];
              $desc = $line['description'];
              $usr = $line['user'];
              echo "<div class='responsive'> <div class='gallery'>";
              echo "<img src='img/$img' style='width:100%; height:100%;'>";
              echo "<div class='desc'> $desc</div>";
              echo "<center><a href='delete_img.php?img_id=$img_id'> <button type> delete</button> </a></center>";
              echo "</div> </div>";
              if ($i == 3) {
                echo "<div class='clearfix'></div> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> ";
              }
            } else {
              echo "<div class='responsive'> <div class='gallery'>";
              echo "<center><h2>No image yet</h2></center>";
              echo "</div> </div>";
              if ($i == 3) {
                echo "<div class='clearfix'></div> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> ";
              }
            }
          }
          ?>






          <div class="clearfix"></div>

        </div>
        <div class="card" style="height:450">









          <div class="clearfix"></div>
        </div>
      </div>
    <?php
  } else {
    ?>
      <html>

      <head>
        <title>Gallery</title>

        <link rel="stylesheet" type="text/css" href="css/estilo_form.css">

        <link rel="stylesheet" type="text/css" href="css/estilo_css.css">

        <link rel="stylesheet" type="text/css" href="css/gallery.css">

        <script src="js/login.js"></script>

      </head>

      <body>



        <div class="header">

          <h1>Wellcome to the gallery</h1>

          <p>Here you can save and see your images</p>

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
            <div style="width: 100%; height: 100%;">
              <div class="card" id="nologin">

                <center>
                  <H1> You must be logged in to use this page!</H1>
                </center>

                <Center> <img src="img/login.jpg" style="width: 60%;"></Center>

              </div>

            </div>
          </div>
        <?php
      }
        ?>
        <div class="rightcolumn">
          <?php
          if ($_SESSION && $_SESSION['validity'] == 1) {
          ?>
            <div class="card" id="logged" style="width: 100%; height: auto;">

              <?php
              echo "<center><h2> You're logged in! </h2> <br> Wellcome " . $_SESSION['login'] . "</center>";
              ?>

              <center> <a href="logout.php">Click here to logout</a></center>

            </div>
          <?php
          } else {
          ?>

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
          <?php
          }
          ?>
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

          <?php
          if ($_SESSION && $_SESSION['validity'] == 1) {
          ?>

            <div class="card" style="display:block;width: 100%;" id="status">

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
          <?php
          } else {
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
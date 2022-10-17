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
            <form name="galleryupload" method="post" action="galleryupload.php" enctype="multipart/form-data">
              <label> Insert the image you want to upload here: </label><br><br>
              <input type="file" placeholder="Image" name="imgupload" required>
              <p>
                <label> Insert a description for your image: </label> <br>
                <input type="text" placeholder="Description" name="imgdesc" required><br>
                <input type="checkbox" name="reset">
                <label>Reset your images? </label><br>
                <input type="submit">
            </form>
          </center>
          <br><br>


        </div>

        <div class="card" style="height:450">

          <h2>Your images</h2>

          <div class="responsive">

            <div class="gallery">


              <?php
              $gallery = "gallery.txt";
              $fp = file_get_contents($gallery);
              $vet = explode("*", $fp);
              if (isset($vet[0])) {
                $images = explode("/", $vet[0]);
                if (isset($images[1])) {
                  echo "<center><img src='img/$images[1]' width='600' height='400'></center>";
                  echo "<div class='desc'>$images[0]</div>";
                } else {
                  echo "<center><h2> No image saved</h2></center>";
                }
              } else {
                echo "<center><h2> No image saved</h2></center>";
              }
              ?>




            </div>

          </div>





          <div class="responsive">

            <div class="gallery">



              <?php
              $gallery = "gallery.txt";
              $fp = file_get_contents($gallery);
              $vet = explode("*", $fp);
              if (isset($vet[1])) {
                $images = explode("/", $vet[1]);
                if (isset($images[1])) {
                  echo "<center><img src='img/$images[1]' width='600' height='400'></center>";
                  echo "<div class='desc'>$images[0]</div>";
                } else {
                  echo "<center><h2> No image saved</h2></center>";
                }
              } else {
                echo "<center><h2> No image saved</h2></center>";
              }
              ?>


            </div>

          </div>



          <div class="responsive">

            <div class="gallery">



              <?php
              $gallery = "gallery.txt";
              $fp = file_get_contents($gallery);
              $vet = explode("*", $fp);
              if (isset($vet[2])) {
                $images = explode("/", $vet[2]);
                if (isset($images[1])) {
                  echo "<center><img src='img/$images[1]' width='600' height='400'></center>";
                  echo "<div class='desc'>$images[0]</div>";
                } else {
                  echo "<center><h2> No image saved</h2></center>";
                }
              } else {
                echo "<center><h2> No image saved</h2></center>";
              }
              ?>

            </div>

          </div>



          <div class="responsive">

            <div class="gallery">



              <?php
              $gallery = "gallery.txt";
              $fp = file_get_contents($gallery);
              $vet = explode("*", $fp);
              if (isset($vet[3])) {
                $images = explode("/", $vet[3]);
                if (isset($images[1])) {
                  echo "<center><img src='img/$images[1]' width='600' height='400'></center>";
                  echo "<div class='desc'>$images[0]</div>";
                } else {
                  echo "<center><h2> No image saved</h2></center>";
                }
              } else {
                echo "<center><h2> No image saved</h2></center>";
              }
              ?>

            </div>

          </div>



          <div class="clearfix"></div>

        </div>
        <div class="card" style="height:450">


          <div class="responsive">

            <div class="gallery">

              <?php
              $gallery = "gallery.txt";
              $fp = file_get_contents($gallery);
              $vet = explode("*", $fp);
              if (isset($vet[4])) {
                $images = explode("/", $vet[4]);
                if (isset($images[1])) {
                  echo "<center><img src='img/$images[1]' width='600' height='400'></center>";
                  echo "<div class='desc'>$images[0]</div>";
                } else {
                  echo "<center><h2> No image saved</h2></center>";
                }
              } else {
                echo "<center><h2> No image saved</h2></center>";
              }
              ?>
            </div>

          </div>





          <div class="responsive">

            <div class="gallery">


              <?php
              $gallery = "gallery.txt";
              $fp = file_get_contents($gallery);
              $vet = explode("*", $fp);
              if (isset($vet[5])) {
                $images = explode("/", $vet[5]);
                if (isset($images[1])) {
                  echo "<center><img src='img/$images[1]' width='600' height='400'></center>";
                  echo "<div class='desc'>$images[0]</div>";
                } else {
                  echo "<center><h2> No image saved</h2></center>";
                }
              } else {
                echo "<center><h2> No image saved</h2></center>";
              }
              ?>

            </div>

          </div>



          <div class="responsive">

            <div class="gallery">


              <?php
              $gallery = "gallery.txt";
              $fp = file_get_contents($gallery);
              $vet = explode("*", $fp);
              if (isset($vet[6])) {
                $images = explode("/", $vet[6]);
                if (isset($images[1])) {
                  echo "<center><img src='img/$images[1]' width='600' height='400'></center>";
                  echo "<div class='desc'>$images[0]</div>";
                } else {
                  echo "<center><h2> No image saved</h2></center>";
                }
              } else {
                echo "<center><h2> No image saved</h2></center>";
              }
              ?>

            </div>

          </div>



          <div class="responsive">

            <div class="gallery">


              <?php
              $gallery = "gallery.txt";
              $fp = file_get_contents($gallery);
              $vet = explode("*", $fp);
              if (isset($vet[7])) {
                $images = explode("/", $vet[7]);
                if (isset($images[1])) {
                  echo "<center><img src='img/$images[1]' width='600' height='400'></center>";
                  echo "<div class='desc'>$images[0]</div>";
                } else {
                  echo "<center><h2> No image saved</h2></center>";
                }
              } else {
                echo "<center><h2> No image saved</h2></center>";
              }
              ?>

            </div>

          </div>


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

              <p>You don't have any status currently</p>

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
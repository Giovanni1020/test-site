<?php
session_start();
$user_profile = $_GET['friend'];
if ($_SESSION && $_SESSION['validity'] == 1) {
?>
    <html>

    <head>
        <?php
        echo "<title>$user_profile's profile</title>"
        ?>
        <link rel="stylesheet" type="text/css" href="css/estilo_form.css">

        <link rel="stylesheet" type="text/css" href="css/estilo_css.css">




        <link rel="stylesheet" type="text/css" href="css/gallery.css">
        <script src="js/login.js"></script>
    </head>

    </head>

    <body>



        <div class="header">
            <?php
            echo "<h1>Wellcome to $user_profile's profile</h1>";

            echo "<p>Here you can see his status and posts</p>";
            ?>
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


                <div id="customize" style="display:block;width: 100%;">

                    <div class="card">
                        <?php
                        $ip = "localhost";
                        $user = "root";
                        $password = "";
                        $data_base = "test-site";
                        $connection = new mysqli($ip, $user, $password, $data_base);
                        $this_user = $_SESSION['login'];
                        $action = "SELECT * FROM profile WHERE user='$user_profile'";
                        $result = $connection->query($action);
                        $action2 = "SELECT * from users where username='$user_profile'";
                        $result2 = $connection->query($action2);
                        $line = mysqli_fetch_assoc($result2);
                        $pfp = $line['pfp'];
                        echo "<center> ";
                        echo " <img src='img/$pfp'  style='display: block; width: 250; height: 250;border-radius: 45%;border:solid 5px black;'> <br> <br>";
                        echo "Name: " . $line['realname'] . "<br>";
                        echo "Username: " . $line['username'] . "<br>";
                        echo "Phone: " . $line['phone'] . "<br>";
                        echo "Email: " . $line['email'] . "<br><br>";
                        echo "</center>";
                        echo "<br> <br><br>";
                        ?>
                    </div>

                </div>

                <div class='card'>
                    <?php
                    echo $user_profile . "'s current description: <br><br>";
                    $ip = "localhost";
                    $user = "root";
                    $password = "";
                    $data_base = "test-site";
                    $connection = new mysqli($ip, $user, $password, $data_base);
                    $action = "SELECT * FROM profile WHERE user='$user_profile'";
                    $result = $connection->query($action);
                    $line = mysqli_fetch_assoc($result);
                    $desc = $line['description'];
                    echo $desc;
                    ?>


                </div>
                <div class="card">
                    <?php
                    echo $user_profile . "'s current status: <br><br>";
                    $ip = "localhost";
                    $user = "root";
                    $password = "";
                    $data_base = "test-site";
                    $connection = new mysqli($ip, $user, $password, $data_base);
                    $action = "SELECT * FROM profile WHERE user='$user_profile'";
                    $result = $connection->query($action);
                    $line = mysqli_fetch_assoc($result);
                    $status = $line['status'];
                    echo $status;
                    ?>
                </div>
                <div class="card" style="height:850">
                    <?php
                    echo $user_profile . "'s posts: <br><br>";
                    $ip = "localhost";
                    $user = "root";
                    $password = "";
                    $data_base = "test-site";
                    $connection = new mysqli($ip, $user, $password, $data_base);
                    $action = "select * from gallery where user='$user_profile'";
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
                            echo "</div> </div>";
                            if ($i == 3) {
                                echo "<div class='clearfix'></div>   <br> <br> <br> <br> <br> <br> <br> ";
                            }
                        } else {
                            echo "<div class='responsive'> <div class='gallery'>";
                            echo "<center><h2>No post yet</h2></center>";
                            echo "</div> </div>";
                            if ($i == 3) {
                                echo "<div class='clearfix'></div>  ";
                            }
                        }
                    }
                    ?>
                </div>

            </div>

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

                    <div class="card">

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
} else {
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
<?php
}
?>
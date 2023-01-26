<?php
session_start();
if ($_SESSION && $_SESSION['validity'] == 1) {
?>
    <html>

    <head>
        <title>Friends</title>
        <link rel="stylesheet" type="text/css" href="css/estilo_form.css">
        <link rel="stylesheet" type="text/css" href="css/estilo_css.css">
        <link rel="stylesheet" type="text/css" href="css/gallery.css">
        <script src="js/login.js"></script>
    </head>

    <body>
        <div class="header">
            <h1>Wellcome to the friend menu</h1>
            <p>Here you can see and interact with your friends</p>
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
                <div class="card">
                    <center>
                        <h2> Here you can see all your friends! </h2>
                    </center> <br> <br>
                    <?php
                    $ip = "localhost";
                    $user = "root";
                    $password = "";
                    $data_base = "test-site";
                    $connection = new mysqli($ip, $user, $password, $data_base);
                    $this_user = $_SESSION['login'];
                    $action = "SELECT * from friends where user='$this_user' and status='on'";
                    $result = $connection->query($action);
                    $rows = mysqli_num_rows($result);
                    if ($rows == 0) {
                        echo "<center> <h3>You have no friends! <br> Try to add some friends</h3> </center>";
                    } else {
                        for ($i = 0; $i < $rows; $i++) {
                            $line = mysqli_fetch_assoc($result);
                            $friend = $line['user_friend'];
                            $action2 = "SELECT * from users where username='$friend'";
                            $result2 = $connection->query($action2);
                            $line = mysqli_fetch_assoc($result2);
                            $pfp = $line['pfp'];
                            echo "<a href='friend_pfp.php?friend=$friend'> <img src='img/$pfp'  style='display: block; width: 150; height: 150;border-radius: 45%;border:solid 5px black;'></a><br> <br>";
                            echo "Name: " . $line['realname'] . "<br>";
                            echo "Username: " . $line['username'] . "<br>";
                            echo "Phone: " . $line['phone'] . "<br>";
                            echo "Email: " . $line['email'] . "<br><br>";
                            echo "<a href='unfriend.php?friend=$friend'>Unfriend</a>  ---  <a href='ps_chat.php?friend=$friend'> Chat</a>";
                            echo "<br> <br><br>";
                        }
                    }
                    ?>
                    <br><br>
                </div>
                <div class="card" style="height:300">
                    <Center>
                        <h2>Add friends: </h2>
                    </Center>
                    <br> <br>
                    <form action='befriend.php' method='post' name='befriend'>
                        <label> Type the UserName of who you want to add as a friend:</label><br>
                        <input type='text' placeholder="Friend UserName" name="test_post" required>
                        <input type='submit'>
                    </form>
                </div>
                <div class="card">
                    <center>
                        <h2> Pending requests:</h2>
                    </center>
                    <br><br>
                    <?php
                    $ip = "localhost";
                    $user = "root";
                    $password = "";
                    $data_base = "test-site";
                    $connection = new mysqli($ip, $user, $password, $data_base);
                    $this_user = $_SESSION['login'];
                    $action = "SELECT * from friends where user='$this_user' and status='standby' and user_asking!='$this_user'";
                    $result = $connection->query($action);
                    $rows = mysqli_num_rows($result);
                    if ($rows == 0) {
                        echo "<center> <h3>You have no pending requests! <br> </h3> </center>";
                    } else {
                        for ($i = 0; $i < $rows; $i++) {
                            $line = mysqli_fetch_assoc($result);
                            $friend = $line['user_friend'];
                            $action2 = "SELECT * from users where username='$friend'";
                            $result2 = $connection->query($action2);
                            $line = mysqli_fetch_assoc($result2);
                            $pfp = $line['pfp'];
                            echo "<a href='friend_pfp.php?friend=$friend'> <img src='img/$pfp'  style='display: block; width: 150; height: 150;border-radius: 45%;border:solid 5px black;'></a><br> <br>";
                            echo "Name: " . $line['realname'] . "<br>";
                            echo "Username: " . $line['username'] . "<br>";
                            echo "Phone: " . $line['phone'] . "<br>";
                            echo "Email: " . $line['email'] . "<br><br>";
                            echo "<a href='accept_friend.php?friend=$friend'>Accept request</a>  ---  <a href='refuse.php?friend=$friend'>Refuse request</a>";
                            echo "<br> <br><br>";
                        }
                    }
                    ?>
                </div>
            </div>
        <?php
    } else {
        ?>
            <html>

            <head>
                <title>Friends</title>
                <link rel="stylesheet" type="text/css" href="css/estilo_form.css">
                <link rel="stylesheet" type="text/css" href="css/estilo_css.css">
                <link rel="stylesheet" type="text/css" href="css/gallery.css">
                <script src="js/login.js"></script>
            </head>

            <body>
                <div class="header">

                    <h1>Wellcome to the friend menu</h1>

                    <p>Here you can see and interact with your friends</p>

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
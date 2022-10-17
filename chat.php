<?php
session_start();
if ($_SESSION && $_SESSION['validity'] == 1) {
?>
    <html>

    <head>

        <title>Chat</title>

        <link rel="stylesheet" type="text/css" href="css/estilo_form.css">

        <link rel="stylesheet" type="text/css" href="css/estilo_css.css">

        <link rel="stylesheet" type="text/css" href="css/gallery.css">

        <script src="js/login.js"></script>

    </head>

    <body>



        <div class="header">

            <h1>Wellcome to the chat</h1>

            <p>Here you can talk to other users</p>

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
                <div class="card">
                    <center>
                        <h2> Comment here: </h2>
                    </center><br>
                    <?php
                    echo "Type your comments here: ";
                    echo "<form name='form' method='post' action=''>
                    
                        <input type='text' name='txt' style='width:70%;'>
                        
                         <input type='submit' value='Comment' style='width:29%;'> 
                        </form>";
                    $archive = "chat.txt";
                    if (isset($_POST['txt'])) {
                        $txt = $_SESSION['login'] . "/" . $_POST['txt'] . "*";
                        $fp = fopen($archive, "a+");
                        fwrite($fp, $txt);
                        fclose($fp);
                    }
                    $archive = "chat.txt";
                    $fp = fopen($archive, "r");
                    $messages = fgets($fp);
                    $value = explode("*", $messages);
                    $value = array_reverse($value);
                    for ($i = 1; $i < sizeof($value); $i++) {
                        $value2 = explode("/", $value[$i]);
                        echo "<b>" . $value2[0] . " says:</b><br>";
                        echo "" . $value2[1] . "    - Posted at " . date("d/m/Y") . " ";
                        echo "<br><br>";
                    }
                    ?>
                </div>
            </div>
        <?php
    } else {
        ?>
            <html>

            <head>
                <title>Chat</title>

                <link rel="stylesheet" type="text/css" href="css/estilo_form.css">

                <link rel="stylesheet" type="text/css" href="css/estilo_css.css">

                <link rel="stylesheet" type="text/css" href="css/gallery.css">

                <script src="js/login.js"></script>

            </head>

            <body>



                <div class="header">

                    <h1>Wellcome to the chat</h1>

                    <p>Here you can talk to other users</p>

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
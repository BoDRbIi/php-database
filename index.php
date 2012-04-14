<!DOCTYPE HTML>
<html>

    <head>
        <title>Main page | Database-project</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="./css/base.css" type="text/css">
    </head>

    <body>

        <div id="main-header">
            <a href="index.php">
                <img src="images/header.png">
            </a>
        </div>

        <hr />

        <div id="main-content">

            <div class="menu">
                <ul>
                    <li><a href="index.php">Main page</a></li>
                    <li><a href="forum.php">Forum</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="gallery.php">Photo gallery</a></li>
                    <li><a href="social.php">Social-net</a></li>
                    <li><a href="author.html">Authors</a></li>
                </ul>
            </div>

            <div id="content">
                Database. Third task. web-site with support forum, gallery, social network
            </div>

            <div id="left-menu">
                <form action="auth.php" method="get">
                    Login: <input type="text" name="login" required="1" /><br />
                    Pass: <input type="password" name="password" required="1" /> <br />
                    <input type="submit" value="Auth"/> or <a href="registration.php">register</a>
                </form>
            </div>


        </div>

    </body>
</html>
<?php

?>
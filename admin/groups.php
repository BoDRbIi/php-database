<!DOCTYPE HTML>
<html>
    <head>
        <title>Main page | Database-project</title>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8">
            <link rel="stylesheet" href="../css/base.css" type="text/css">
    </head>

    <body>

    <div id="main-header">
        <a href="index.php">
            <img src="../images/header.png">
        </a>
    </div>

    <hr />

    <div id="main-content">

        <div class="menu">
            <ul>
                <li><a href="../index.php">Main page</a></li>
                <li><a href="users.php">List of users</a></li>
            </ul>
        </div>

        <div id="content">

            <?php

                require_once("user-module.php");

                $obj = new Group();
                $table = $obj->getAllGroups();
                echo "<pre>";
                print_r($list2);
                echo "</pre>";
            ?>

        </div>

    </div>

    </body>
</html>
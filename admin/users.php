<?php
    include_once '../config.php';
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Main page | Database-project</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="../css/base.css" type="text/css">
</head>

<body>
<!-- div header - include  -->
<div id="main-header">
    <a href="index.php">
        <img src="../images/header.png">
    </a>
</div>
<hr />
<div id="main-content">
    <!-- menu of site -->
    <div class="menu">
        <ul>
            <li><a href="../index.php">Main page</a></li>
            <li><a href="users.php">List of users</a></li>
        </ul>
    </div>

    <!-- other content -->
    <div id="content">
       <?php

        ?>

    </div>
    <!--
    <div id="left-menu">
        <form action="auth.php" method="get">
            Login: <input type="text" name="login" required="1" /><br />
            Pass: <input type="password" name="password" required="1" /> <br />
            <input type="submit" value="Auth"/> or <a href="registration.php">register</a>
        </form>
    </div>
    -->
</div>
</body>
</html>
<?php

?>
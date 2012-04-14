<!DOCTYPE HTML>
<html>
<head>
    <title>Registration | Database-project</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="./css/base.css" type="text/css">
</head>

<body>
<!-- div header - include  -->
<div id="main-header">
    <a href="index.php">
        <img src="images/header.png">
    </a>
</div>

<hr />

<div id="main-content">
    <!-- menu of site -->
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

    <!-- other content -->
    <div id="content">

        <form action="" method="post">
            <table>
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" required="1" /></td>
                </tr>
                <tr>
                    <td>Surname:</td>
                    <td><input type="text" name="surname" required="1" /></td>
                </tr>
                <tr>
                    <td>Login:</td>
                    <td><input type="text" name="login" required="1" /></td>
                </tr>
                <tr>
                    <td>e-mail:</td>
                    <td><input type="email" name="e-mail" required="1" /></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" required="1" /></td>
                </tr>
            </table>
            <input type="submit" value="Registration" />
        </form>

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

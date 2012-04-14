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
            $sql = mysql_query('SELECT * FROM users');
            if(!$sql)
                exit('Error');
            else
            {
                echo "<table border=\"1\" style=\"text-align:center\">";
                $xid=1;
                while(list($id, $login, $name, $surname, $pass ,$mail, $idgroup) = mysql_fetch_row($sql))
                {
                    echo "<tr>
    				    <td>$id</td>
	    				<td>$login</td>
		    			<td>$name</td>
			    		<td>$surname</td>
			    		<td>$mail</td>
			    		<td>$idgroup</td>
				    	</tr>";
                    $xid++;
                }
                echo "</table>";
            }
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
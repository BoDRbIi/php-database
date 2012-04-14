<?php
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = 'p@ssw0rd';

    $conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

    $dbname = 'php-db';
    mysql_select_db($dbname);
?>
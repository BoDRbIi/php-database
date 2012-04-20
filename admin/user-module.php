<?php



class Database
{
    protected $tableName;
    protected $dbHost = 'localhost';
    protected $dbUser = 'root';
    protected $dbPassword = 'p@ssw0rd';
    protected $dbName = 'task-3-db';
    protected $connection;

    protected  function __construct()
    {
        $this->connection = mysql_connect($this->dbHost, $this->dbUser, $this->dbPassword) or die ('Error connecting to mysql');
        mysql_select_db($this->dbName) or die ('Can\'t select db');
    }

    protected function injectionFilter($value)
    {
        return mysql_real_escape_string(htmlspecialchars(strip_tags(trim($value))));
    }

}


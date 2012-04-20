<?php

/**
 * Класс для работы с группами из БД (удаление, добавление, вывод всех групп)
 * Реализованы:
 * -вывод всех групп
 * -получить группу по id
 * -добавить новую группу
 * -удалить группу по id
 * -редактирование группы
 *
 * repository: https://github.com/gostkov/php-database/
 */

class Database
{
    protected $tableName;
    protected $dbHost = 'localhost';
    protected $dbUser = 'root';
    protected $dbPassword = 'p@ssw0rd';
    protected $dbName = 'task-3-db';

    protected  function __construct()
    {
        mysql_connect($this->dbHost, $this->dbUser, $this->dbPassword) or die ('Error connecting to mysql');
        mysql_select_db($this->dbName) or die ('Can\'t select db');
    }

    protected function injectionFilter($value)
    {
        return mysql_real_escape_string(htmlspecialchars(strip_tags(trim($value))));
    }

}

class Group extends Database
{

    public function __construct()
    {
        parent::__construct();
        $this->tableName = 'Groups';
    }

    public function addGroup($name, $description)
    {
        $name = $this -> injectionFilter($name);
        $description = $this -> injectionFilter($description);

        $query = mysql_query("INSERT INTO $this->tableName (id,name,description) VALUES ('', '$name', '$description' ) ");

        if ($query)
            return true;

        else
            return false;
    }

    public function deleteGroup($name)
    {
        $name = $this->injectionFilter($name);
        $query = mysql_query("DELETE FROM $this->tableName WHERE id=$name LIMIT 1");

        if ($query)
            return true;
        else
            return false;

    }


    public function editGroup($oldName, $newName, $description)
    {
        $oldName = $this -> injectionFilter($oldName);
        $newName = $this -> injectionFilter($newName);
        $description = $this -> injectionFilter($description);

        $query = mysql_query("UPDATE $this->tableName SET name='$newName', description='$description' WHERE name='$oldName'");
        if ($query)
            return true;
        else
            return false;
    }


    //возвращает массив если все ОК, или ошибку
    public function getGroupByName($name)
    {
        $name = $this->injectionFilter($name);
        $query = mysql_query("SELECT * FROM $this->tableName WHERE name=$name LIMIT 1");

        if ($query)
        {
            $arrayAll = mysql_fetch_array($query);
            //print_r($arrayAll);
            return $arrayAll;
        }

        else
            exit(mysql_error());

     }

    //возвращает массив если все ОК, или ошибку
    public function getAllGroups()
    {

        $query = mysql_query("SELECT * FROM $this->tableName");
        if ($query)
        {
            $arrayAll = mysql_fetch_array($query);
            print_r($arrayAll);
            return $arrayAll;
        }

        else
            exit(mysql_error());

    }

}

//$obj = new Group();
//$obj ->getAllGroups();

?>

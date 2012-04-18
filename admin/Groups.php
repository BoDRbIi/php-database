<?php

/**
 * Класс для работы с группами из БД (удаление, добавление, вывод всех групп)
 * Реализованы:
 * -вывод всех групп
 * -получить группу по id
 * -добавить новую группу
 * -удалить группу по id
 * -редактирование группы
 */

class Groups
{
    private $nameOfTable = 'groups';


    public function __construct()
    {
        $conn = mysql_connect('localhost', 'root', 'p@ssw0rd') or die ('Error connecting to mysql');
        mysql_select_db('task3') or die ('Can\'t select db');
    }

    private function injectionFilter($value)
    {
        return mysql_real_escape_string(htmlspecialchars(strip_tags(trim($value))));
    }


    public function getAllGroups()
    {
        $sql = "SELECT * FROM $this->nameOfTable";
        if (mysql_query($sql))
        {
            //выводим на экранчик, в принципе это для только для теста
            $arrayAll = mysql_fetch_array($sql);
            print_r($arrayAll);
            return mysql_fetch_array($sql);
        }

        else
        {
            exit(mysql_error());
        }
    }

    public function getGroupById($number)
    {
        $number = $this->injectionFilter($number);
        settype($number, 'integer');

        $sql = "SELECT * FROM $this->nameOfTable WHERE id=$number LIMIT 1";

        if (mysql_query($sql))
        {
            $arrayAll = mysql_fetch_array($sql);
            print_r($arrayAll);
            return $arrayAll;
        }

        else
        {
            exit(mysql_error());
        }

     }

    public function addNewGroup($name, $des)
    {
        $name = $this -> injectionFilter($name);
        $des = $this -> injectionFilter($des);

        if (!mysql_query("INSERT INTO $this->nameOfTable (id,name,description)
                VALUES ('', '$name', '$des' ) "))
        {
            exit(mysql_error());
        }

    }

    public function deleteGroupById($number)
    {
        $number = $this->injectionFilter($number);
        settype($number, 'integer');

        if (!mysql_query("DELETE FROM $this->nameOfTable WHERE id=$number LIMIT 1"))
        {
            exit(mysql_error());
        }

    }

    public function editGroup($number, $name, $des)
    {
        $number = $this->injectionFilter($number);
        settype($number, 'integer');
        $name = $this -> injectionFilter($name);
        $des = $this -> injectionFilter($des);

        $sql = "UPDATE $this->nameOfTable SET name='$name', description='$des' WHERE id='$number'";

        if(!mysql_query($sql))
        {
            exit(mysql_error());
        }

    }

}

//$obj = new Groups();
//$obj ->getAllGroups();
//$obj -> getGroupById(2);
//$obj -> addNewGroup('test2', 'test2');
//$obj -> deleteGroupById(5);
//$obj -> editGroup(4, 'ololo', 'i ololo');
?>

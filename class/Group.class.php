<?php
//includeee
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

            while ($row = mysql_fetch_array($query))
            {
                $i = $row['id'];
                $table[$i] = "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['description']}</td>
                    </tr> ";
            }
            return $table;
        }

        else
            exit(mysql_error());

    }

    public function __destruct()
    {
        mysql_close($this->connection);
    }
}

//$obj = new Group();
//$obj ->getAllGroups();

?>

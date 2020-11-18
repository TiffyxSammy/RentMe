<?php

class config
{
    public static function connect()
    {
        $dsn = 'mysql:host=localhost; dbname=Rent_Me';
        $un = 'root';
        $pd = '';

        try {
            $db = new PDO($dsn, $un, $pd);

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo $error_message;
            exit();
        }
        return $db;
    }
}

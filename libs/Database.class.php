<?php

class Database
{
    public static $conn = null;

    public static function getConnection()
    {
        if (Database::$conn == null)
        {
            $server = "localhost";
            $username = "root";
            $password = "";
            $dbname = "yoga";
            // $server = "localhost";
            // $username = "trymywebsites_raes";
            // $password = "Raes@2025";
            // $dbname = "trymywebsites_raesdb";

            $connection = new mysqli($server, $username, $password, $dbname);

            if ($connection->connect_error)
            {
                die("Connection Failed: " . $connection->connect_error);
            }
            else
            {
                Database::$conn = $connection;
                return Database::$conn;
            }
        }
        return Database::$conn; // Return the connection here.
    }
}

?>
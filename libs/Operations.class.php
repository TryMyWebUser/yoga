<?php

class Operations
{
    public static function getHeader()
    {
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `header`";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }

    public static function getList()
    {
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `list`";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }

    public static function getVideo()
    {
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `videos`";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }

    public static function getEditList()
    {
        $getID = $_GET['edit_id'];
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `list` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
    }

    public static function getListMenu()
    {
        $data = $_GET['data'];
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `list` WHERE `category` = '$data'";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
    }
}

?>
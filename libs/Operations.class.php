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

    public static function getUsers()
    {
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `user`";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }

    public static function getTeams()
    {
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `team`";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }

    public static function getAVMS()
    {
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `avm`";
        $result = $conn->query($sql);
        return iterator_to_array($result);
    }
    public static function getAVM_F($cate)
    {
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `avm` WHERE `category` = '$cate'";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
    }

    public static function getU($user)
    {
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `user` WHERE `username` = '$user'";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
    }
    public static function getUser()
    {
        $getID = $_GET['edit_id'];
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `user` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
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

    public static function getAVM()
    {
        $getID = $_GET['edit_id'];
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `avm` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
    }

    public static function getTeam()
    {
        $getID = $_GET['edit_id'];
        $conn = Database::getConnection();
        $sql = "SELECT * FROM `team` WHERE `id` = '$getID'";
        $result = $conn->query($sql);
        return $result->fetch_assoc();
    }
}

?>
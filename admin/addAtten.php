<?php

include '../libs/load.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $start_date = $_POST['start_date'];
    $start_time = $_POST['start_time'];
    $end_date = $_POST['end_date'];
    $end_time = $_POST['end_time'];

    $sql = "INSERT INTO `atten` (`title`, `event_date`, `start_time`, `end_date`, `end_time`) 
            VALUES ('$title', '$start_date', '$start_time', '$end_date', '$end_time')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error"]);
    }
}
?>
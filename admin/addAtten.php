<?php

include '../libs/load.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'] ?? '';
    $start_time = $_POST['start_time'] ?? '';
    $end_time = $_POST['end_time'] ?? '';
    $date = $_POST['date'] ?? '';

    $conn = Database::getConnection();
    $title = $conn->real_escape_string($title);
    $start_time = $conn->real_escape_string($start_time);
    $end_time = $conn->real_escape_string($end_time);
    $date = $conn->real_escape_string($date);

    $sql = "INSERT INTO `atten` (`title`, `event_date`, `start_time`, `end_date`, `end_time`) VALUES ('$title', '$date', '$start_time', '$date', '$end_time')";
    if ($conn->query($sql)) {
        echo json_encode(["status" => "success", "message" => "Event added successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Database error: " . $conn->error]);
    }
}
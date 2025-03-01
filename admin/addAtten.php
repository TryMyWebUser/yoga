<?php
include '../libs/load.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'] ?? '';
    $start_time = $_POST['start_time'] ?? '';
    $end_time = $_POST['end_time'] ?? '';

    // Get year & month from URL parameters
    $year = isset($_GET['y']) ? (int)$_GET['y'] : date('Y');
    $month = isset($_GET['m']) ? (int)$_GET['m'] : date('m');
    $day = isset($_POST['day']) ? (int)$_POST['day'] : 1;

    // Format event date as YYYY-MM-DD
    $event_date = "$year-$month-" . str_pad($day, 2, '0', STR_PAD_LEFT);

    // MySQLi Connection
    $conn = Database::getConnection();

    // Escape values to prevent SQL injection
    $title = $conn->real_escape_string($title);
    $start_time = $conn->real_escape_string($start_time);
    $end_time = $conn->real_escape_string($end_time);

    // Insert query
    $sql = "INSERT INTO `atten` (`title`, `event_date`, `start_time`, `end_date`, `end_time`) 
            VALUES ('$title', '$event_date', '$start_time', '$event_date', '$end_time')";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["status" => "success", "message" => "Event added successfully!"]);
    } else {
        echo json_encode(["status" => "error", "message" => "Database error: " . $conn->error]);
    }

}

?>
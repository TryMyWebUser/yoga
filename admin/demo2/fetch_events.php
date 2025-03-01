<?php

include 'db.php';

$month = isset($_GET['m']) ? (int)$_GET['m'] : date('m');
$year = isset($_GET['y']) ? (int)$_GET['y'] : date('Y');

$sql = "SELECT * FROM events 
        WHERE (MONTH(event_date) = $month AND YEAR(event_date) = $year) 
        OR (MONTH(end_date) = $month AND YEAR(end_date) = $year)";
$result = $conn->query($sql);
$events = [];

while ($row = $result->fetch_assoc()) {
    $events[$row['event_date']] = [
        "id" => $row['id'],
        "title" => $row['title'],
        "start_time" => $row['start_time'],
        "end_date" => $row['end_date'],
        "end_time" => $row['end_time']
    ];
}

echo json_encode($events);
?>
<?php

include '../libs/load.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    $conn = Database::getConnection();
    if ($id > 0) {
        $sql = "DELETE FROM `atten` WHERE id = $id";
        if ($conn->query($sql)) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Database error: " . $conn->error]);
        }
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid event ID"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}
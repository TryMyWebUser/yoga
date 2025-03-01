<?php

include "../libs/load.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0; // Ensure ID is a valid integer
    $conn = Database::getConnection();
    if ($id > 0) {
        $sql = "DELETE FROM `atten` WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Database error: " . $stmt->error]);
        }

        $stmt->close();
    } else {
        echo json_encode(["status" => "error", "message" => "Invalid event ID"]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request"]);
}
?>
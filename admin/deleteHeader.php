<?php

include "../libs/load.php";

// Secure delete operation
if (isset($_GET['delete_id'])) {
    $conn = Database::getConnection();
    
    $delete_id = intval($_GET['delete_id']); // Convert to integer to prevent SQL injection
    $sql = "DELETE FROM `header` WHERE `id` = '$delete_id'";
    $result = $conn->query($sql);
    if ($result) {
        header("Location: addList.php");
    } else {
        header("Location: addList.php?error=Failed to delete image");
    }
} 

?>
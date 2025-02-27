<?php

include "../libs/load.php";

// Secure delete operation
if (isset($_GET['delete_id'])) {
    $conn = Database::getConnection();
    
    $delete_id = intval($_GET['delete_id']);
    $sql = "DELETE FROM `user` WHERE `id` = '$delete_id'";
    $result = $conn->query($sql);
    if ($result) {
        header("Location: welcome.php");
    } else {
        header("Location: welcome.php?error=Failed to delete user");
    }
} 

?>
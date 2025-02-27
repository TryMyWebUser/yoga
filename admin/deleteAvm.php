<?php

include "../libs/load.php";

// Secure delete operation
if (isset($_GET['delete_id'])) {
    $conn = Database::getConnection();
    
    $delete_id = intval($_GET['delete_id']);
    $sql = "DELETE FROM `avm` WHERE `id` = '$delete_id'";
    $result = $conn->query($sql);
    if ($result) {
        header("Location: viewAvm.php");
    } else {
        header("Location: viewAvm.php?error=Failed to delete Avm");
    }
} 

?>
<?php

include "../libs/load.php";

// Secure delete operation
if (isset($_GET['delete_id'])) {
    $conn = Database::getConnect();
    
    $delete_id = intval($_GET['delete_id']); // Convert to integer to prevent SQL injection
    $qry = $conn->query("SELECT * FROM `team` where `id` = '$delete_id' ")->fetch_array();
    $sql = "DELETE FROM `team` WHERE `id` = '$delete_id'";
    $result = $conn->query($sql);
    if ($result) {
        if(!empty($qry['img'])){
            if(is_file($qry['img'])) {
                unlink($qry['img']);
                header("Location: viewTeam.php");
            }
        }
    } else {
        header("Location: viewTeam.php?error=Failed to delete image");
    }
} 

?>
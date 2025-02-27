<?php

include "../libs/load.php";

// Secure delete operation
if (isset($_GET['delete_id'])) {
    $conn = Database::getConnection();
    
    $delete_id = intval($_GET['delete_id']); // Convert to integer to prevent SQL injection
    $qry = $conn->query("SELECT * FROM `videos` where `id` = '$delete_id' ")->fetch_array();
    $sql = "DELETE FROM `videos` WHERE `id` = '$delete_id'";
    $result = $conn->query($sql);
    if ($result) {
        if(!empty($qry['vid'])){
            if(is_file($qry['vid'])) {
                unlink($qry['vid']);
                header("Location: viewVideos.php");
            }
        }
    } else {
        header("Location: viewVideos.php?error=Failed to delete image");
    }
} 

?>
<?php

class User
{
    public $conn = null;

    // Function for login
    public static function authUser($user, $pass)
    {
        Session::start();
        $conn = Database::getConnection();
        $query = "SELECT * FROM `auth` WHERE `username` = '$user' OR `email` = '$user'";
        $result = $conn->query($query);
        if ($result && $result->num_rows === 1)
        {
            $row = $result->fetch_assoc();
            if ($pass === $row['password'])
            {
                Session::regenerate();
                Session::set("Loggedin", $user);
                header("Location: welcome.php");
                exit;
            }
            else
            {
                return "Invalid password!";
            }
        } elseif ($result && $result->num_rows > 1) {
            // Handle multiple rows case (unexpected behavior)
            return "Multiple accounts found. Please contact support.";
        } else {
            return "User not found!";
        }
    }

    public static function setHeader($header)
    {
        $conn = Database::getConnection();
        $qry = "INSERT INTO `header` (`title`, `created_at`) VALUES ('$header', NOW())";
        if ($conn->query($qry)) {
            return "Header seted!";
        } else {
            return "Error occurred while saving data: " . $conn->error;
        }
    }

    public static function setList($img, $cate, $title, $dec)
    {
        $conn = Database::getConnection();
        $targetDir = "../uploads/list/"; // Define your upload directory
        
        if (!is_dir($targetDir)) {
            // Create directory with proper permissions
            mkdir($targetDir, 0777, true);
        }

        $allowImageTypes = ['jpg', 'png', 'jpeg', 'gif'];

        // Required file uploads
        $requiredFiles = [
            'img' => $_FILES["img"]
        ];

        foreach ($requiredFiles as $key => $file) {
            $fileName = basename($file["name"]);
            $filePath = $targetDir . $fileName;
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            
            if (!in_array($fileType, $allowImageTypes) || !move_uploaded_file($file["tmp_name"], $filePath)) {
                return "Error uploading required file: $key.";
            }
            $$key = $filePath; // Dynamically assign variable with directory
        }

        $qry = "INSERT INTO `list` (`img`, `category`, `title`, `dec`, `created_at`) VALUES ('$img', '$cate', '$title', '$dec', NOW())";
        if ($conn->query($qry)) {
            header("Location: viewList.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $conn->error;
        }
    }

    public static function setVideos($vid, $uvid)
    {
        $conn = Database::getConnection();
        $targetDir = "../uploads/videos/"; // Define your upload directory

        if (!is_dir($targetDir)) {
            // Create directory with proper permissions if it doesn't exist
            mkdir($targetDir, 0777, true);
        }

        // Allowed video file types
        $allowVideoTypes = ['mp4', 'avi', 'mov', 'wmv'];

        // Check if video file is provided
        $fileUploaded = false;
        if (isset($_FILES["vid"]) && $_FILES["vid"]["error"] === UPLOAD_ERR_OK) {
            $file = $_FILES["vid"];
            $fileName = basename($file["name"]);
            $filePath = $targetDir . $fileName;
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
            
            // Check file type and upload the file
            if (in_array(strtolower($fileType), $allowVideoTypes)) {
                if (move_uploaded_file($file["tmp_name"], $filePath)) {
                    $vid = $filePath; // Store video path if file is uploaded
                    $fileUploaded = true;
                } else {
                    return "Error uploading video file.";
                }
            } else {
                return "Invalid video file type. Allowed types are: " . implode(", ", $allowVideoTypes);
            }
        }

        // If no video file is uploaded, use the provided YouTube iframe link (if available)
        if (!$fileUploaded && empty($vid) && !empty($uvid)) {
            $vid = $uvid; // Store the YouTube iframe link
        } elseif (!$fileUploaded && empty($uvid)) {
            return "You must provide either a video file or a YouTube iframe link.";
        }

        // Insert into the database
        $sql = "INSERT INTO `videos` (`vid`, `uvid`, `created_at`) 
                VALUES ('$vid', '$uvid', now())";

        if ($conn->query($sql)) {
            header("Location: viewVideos.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $conn->error;
        }
    }

    public static function updateList($img, $cate, $title, $dec)
    {
        $getID = $_GET['edit_id'];
        $conn = Database::getConnection();
        $targetDir = "../uploads/list/";

        // Ensure the directory exists
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $imgPath = ''; // Default empty image path
        if (!empty($img) && $img['error'] === 0) {
            $allowImageTypes = ['jpg', 'png', 'jpeg', 'gif'];
            $fileName = basename($img["name"]);
            $filePath = $targetDir . $fileName;
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            // Validate and move file
            if (in_array($fileType, $allowImageTypes) && move_uploaded_file($img["tmp_name"], $filePath)) {
                $imgPath = $filePath;
            } else {
                return "Error uploading file.";
            }
        }

        // Build the SQL query dynamically
        $qry = "UPDATE `list` SET `category` = '$cate', `title` = '$title', `dec` = '$dec', `created_at` = NOW()";
        if (!empty($imgPath)) {
            $qry .= ", `img` = '$imgPath'";
        }
        $qry .= " WHERE `id` = '$getID'";

        // Execute the query
        if ($conn->query($qry)) {
            header("Location: viewList.php");
            exit;
        } else {
            return "Error occurred while saving data: " . $conn->error;
        }
    }

}

?>
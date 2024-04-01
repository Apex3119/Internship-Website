<?php
include '../../../connection.php';

// Check if ID is provided
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM email_template WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "ID is required.";
}
?>

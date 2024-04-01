<?php
include '../../../connection.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input
    $id = $_POST["id"];
    $email_alias = $_POST["email_alias"];
    $email_subject = $_POST["email_subject"];
    $email_template = $_POST["email_template"];

    // Perform server-side validation
    $errors = array();
    if (empty($email_alias)) {
        $errors["email_alias"] = "Email Alias is required.";
    }
    if (empty($email_subject)) {
        $errors["email_subject"] = "Email Subject is required.";
    }
    if (empty($email_template)) {
        $errors["email_template"] = "Email Template is required.";
    }

    // If no validation errors, proceed to update database
    if (empty($errors)) {
        $sql = "UPDATE email_template SET email_alias=?, email_subject=?, email_template=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssi", $email_alias, $email_subject, $email_template, $id);
        
        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error";
        }
    } else {
        // If validation errors, return errors array
        echo json_encode($errors);
    }
}
?>

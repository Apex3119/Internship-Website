<?php
include '../../../connection.php';

// Check if ID parameter is provided
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare SQL statement to fetch single email template
    $sql = "SELECT * FROM email_template WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    // Execute SQL statement
    if($stmt->execute()) {
        $result = $stmt->get_result();

        // Check if any rows are returned
        if($result->num_rows > 0) {
            // Fetch the email template as an associative array
            $email_template = $result->fetch_assoc();

            // Return the email template data as JSON
            echo json_encode($email_template);
        } else {
            // If no rows are returned, return an error message
            echo json_encode(array("message" => "No email template found with the provided ID."));
        }
    } else {
        // If execution fails, return an error message
        echo json_encode(array("message" => "Error fetching email template from the database."));
    }
} else {
    // If ID parameter is not provided, return an error message
    echo json_encode(array("message" => "ID parameter is missing."));
}
?>

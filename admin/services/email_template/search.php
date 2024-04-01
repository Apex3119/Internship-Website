<?php
include '../../../connection.php';

// Check if search query is provided
if (isset($_GET["query"])) {
    $query = $_GET["query"];

    // Prepare SQL statement to search email alias and email subject
    $sql = "SELECT * FROM email_template WHERE email_alias LIKE ? OR email_subject LIKE ?";
    $stmt = $conn->prepare($sql);
    $searchQuery = "%{$query}%"; // Add wildcard to search for partial matches
    $stmt->bind_param("ss", $searchQuery, $searchQuery);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $templates = array();
        while ($row = $result->fetch_assoc()) {
            $templates[] = $row;
        }
        echo json_encode($templates);
    } else {
        echo "No results found.";
    }
} else {
    echo "Search query is required.";
}
?>

<?php
include '../../../connection.php';

$sql = "SELECT * FROM email_template";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $templates = array();
    while ($row = $result->fetch_assoc()) {
        $templates[] = $row;
    }
    echo json_encode($templates);
} else {
    echo "0 results";
}
?>

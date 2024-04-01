<?php
// ini_set('display_errors', 1);

// ini_set('display_startup_errors', 1);

// error_reporting(E_ALL);

include("../connection.php");
// Define variables and set to empty values
$email = $password = $fname = $lname = "";
$errors = [];


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate email
    if (empty($_POST["email"])) {
        $errors['email'] = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        // Check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format";
        }
        else{
            
            $query = "SELECT * FROM `users` WHERE email='".$_POST['email']."'";
            // Execute the query
            $result = mysqli_query($conn, $query);
            // Check if the query executed successfully
            if ($result) {
                // Get the number of rows returned by the query
                $row_count = mysqli_num_rows($result);

                if($row_count>0){
                    $errors['email'] = "Email already exists, please choose another email to sign-up.";
                }
               
            } 
            // Execute the query
        }
    }

    // Validate password
    if (empty($_POST["password"])) {
        $errors['password'] = "Password is required";
    } else {
        $password = test_input($_POST["password"]);
        // Password validation can be added as per requirements
    }

    // Validate first name
    if (empty($_POST["fname"])) {
        $errors['fname'] = "First name is required";
    } else {
        $fname = test_input($_POST["fname"]);
        // First name validation can be added as per requirements
    }

    // Validate last name
    if (empty($_POST["lname"])) {
        $errors['lname'] = "Last name is required";
    } else {
        $lname = test_input($_POST["lname"]);
        // Last name validation can be added as per requirements
    }

   
    // If there are no validation errors, proceed with inserting data into the database
    if (empty($errors)) {
        $created_on = date("Y-m-d H:i:s");
        $sql = "INSERT INTO users (email, vpassword, fname, lname, created_on) VALUES ('$email', '$password', '$fname', '$lname', '$created_on')";
        // Execute the query

        if ($conn->query($sql) === TRUE) {
            $last_id = $conn->insert_id;
            $sql2 = "INSERT INTO `user_roles`(`user_id`, `role_id`) VALUES ('$last_id','3')";
            // Execute the query
            $conn->query($sql2);
            $response['success'] = true;
            $response['message'] = "New record created successfully";
        } else {
            $response['success'] = false;
            $response['message'] = "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        // If there are validation errors, return them to the client
        $response['success'] = false;
        $response['errors'] = $errors;
    }
    


    // Convert response to JSON format and send it to the client
    echo json_encode($response);
}

// Function to sanitize input data
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

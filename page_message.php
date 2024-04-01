<?php
// Check if both "msg" and "page" parameters exist in the URL
if(isset($_GET['msg']) && isset($_GET['page'])) {
    $msg = $_GET['msg'];
    $page = $_GET['page'];
    
    // Initialize variables
    $alert_class = "";
    $message = "";
    
    // Switch-case to select message based on "page" value
    switch($page) {
        case "signup":
            // Switch-case to select message based on "msg" value for the "home" page
            switch($msg) {
                case "success":
                    $alert_class = "alert-success";
                    $message = "Welcome! You are successfully registered with us. Please check your Inbox to verify your email.";
                    break;
                case "error":
                    $alert_class = "alert-danger";
                    $message = "Error! An error occurred on the login page.";
                    break;
                default:
                    // If "msg" has a value other than "success" or "error", do nothing
                    exit(); // or handle it accordingly
            }
            break;
        // case "about":
        //     // Switch-case to select message based on "msg" value for the "about" page
        //     switch($msg) {
        //         case "success":
        //             $alert_class = "alert-success";
        //             $message = "Welcome! Operation was successful on the about page.";
        //             break;
        //         case "error":
        //             $alert_class = "alert-danger";
        //             $message = "Error! An error occurred on the about page.";
        //             break;
        //         default:
        //             // If "msg" has a value other than "success" or "error", do nothing
        //             exit(); // or handle it accordingly
        //     }
        //     break;
        // Add more cases for additional pages as needed
        default:
            // If "page" has a value other than defined pages, do nothing
            exit(); // or handle it accordingly
    }
?>
<div class="alert <?php echo $alert_class; ?>" role="alert">
    <?php echo $message; ?>
</div>
<?php } ?>

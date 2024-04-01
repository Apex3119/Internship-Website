<?php include("connection.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DMRC Internship</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include("header.php"); ?>
    <style>
.invalid-feedback {
    text-align: left;
}
</style>
   
</head>

<body>
<?php include("topnav.php"); ?>

    <!-- Header Start -->
    <div class="container-fluid mt-5 text-center">
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="animated slideInDown">Sign Up</h1>
                    <nav aria-label="breadcrumb">
                        <p class="fs-5 mb-4 pb-2">Connect with top-tier internships tailored to your skills and ambitions on our platform today!</p>
                        <!-- <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="./index.html">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">404</li> 
                        </ol> -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Join us start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12 wow fadeInUp text-center" data-wow-delay="0.5s">
            <form id="registration-form" method="post">

                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="email" placeholder="email" name = "email">
                                <label for="email">E-mali</label>
                                <div class="invalid-feedback" id="email-error"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" placeholder="password" name ="password">
                                <label for="password">Password</label>
                                <span class="invalid-feedback" id="password-error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="fname" placeholder="fanme" name="fname ">
                                <label for="fname">First Name</label>
                                <span class="invalid-feedback" id="fname-error"></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="lname" placeholder="lname" name="lame">
                                <label for="lname">Last Name</label>
                                <span class="invalid-feedback" id="lname-error"></span>
                            </div>
                        </div>
                        <div id="error-message" class="text-danger mt-3"></div>
                         <!-- <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject"></label>
                            </div>
                        </div> -->
                        <!-- <div class="col-12"> -->
                            <!-- <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                <label for="message">Message</label>
                            </div> -->
                            <!-- <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>  -->
                        <div class="col-md-12 text-center text-md-start mb-3 mb-md-0">
                            <p class="small-text">By signing up, you agree to our <a class="border-bottom" href="#">Terms and Conditions.</a></p>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" name ="submit"  id="submit-btn" type="submit">Sign Up</button>
                        </div>
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-center">
                            <p class="small-text">Already registered? <a class="border-bottom" href="login.php">Login.</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <!-- Join us end -->
        

    <?php include("footer.php"); ?>
    <script>
$(document).ready(function(){
    $('#submit-btn').click(function(e){
        e.preventDefault();
        var formData = {
            email: $('#email').val(),
            password: $('#password').val(),
            fname: $('#fname').val(),
            lname: $('#lname').val()
        };

        $.ajax({
            type: 'POST',
            url: 'services/signup.php', // Change this to the file handling the form submission
            data: formData,
            dataType: 'json',
            encode: true
        })
        .done(function(data) {
            // Reset form to remove previous error highlights and messages
            $('.form-control').removeClass('is-invalid');
            $('.error-msg').empty();

            if (!data.success) {
                if (data.message) {
                    $('#error-message').html(data.message);
                } else {
                    $('#error-message').empty();
                }
                if (data.errors) {
                    $.each(data.errors, function(key, value) {
                        $('#' + key).addClass('is-invalid'); // Add error highlight
                        $('#' + key + '-error').html(value); // Show error message
                    });
                }
            } else {
                alert('User registered successfully!');
                window.location = "<?php echo BASEURL."/login.php?msg=success&page=signup"; ?>";
                // Optionally, you can redirect the user or perform other actions here
            }
        });
    });
});
</script>
</body>

</html>
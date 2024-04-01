<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DMRC Internship</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include("header.php"); ?>
</head>

<body>
<?php include("topnav.php"); ?>


    <!-- Header Start -->
    <div class="container-fluid mt-5 text-center">
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h1 class="animated slideInDown">Log in</h1>
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
        <?php include("page_message.php");?>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-12 wow fadeInUp text-center" data-wow-delay="0.5s">
                <form>
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">E-mail</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" placeholder="Subject">
                                <label for="subject">Password</label>
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Your Name">
                                <label for="name">First Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" placeholder="Your Email">
                                <label for="email">Last Name</label>
                            </div>
                        </div> -->
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
                        <!-- <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            <p class="small-text">By signing up, you agree to our <a class="border-bottom" href="#">Terms and Conditions.</a></p>
                        </div> -->
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Log in</button>
                        </div>
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0 text-center">
                            <p class="small-text">New to Internshala? Register<a class="border-bottom" href="signup.php">(Student/Company)</a></p>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    
    <!-- Join us end -->
        

    <?php include("footer.php"); ?>
</body>

</html>
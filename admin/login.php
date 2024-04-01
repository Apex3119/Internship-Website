<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sign-in.css" rel="stylesheet">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
<main class="form-signin w-100 m-auto">
    <form id="loginForm">
        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password" required>
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault" name="remember_me">
            <label class="form-check-label" for="flexCheckDefault">
                Remember me
            </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="button" onclick="submitForm()">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">&copy; <?php echo date("Y"); ?></p>
    </form>
</main>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function submitForm() {
        var formData = $("#loginForm").serialize(); // Serialize form data
        $.ajax({
            type: "POST",
            url: "login.php",
            data: formData,
            success: function(response) {
                // Handle success response
                console.log(response);
                // Redirect or do something else as needed
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(xhr.responseText);
            }
        });
    }
</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Templates</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Email Templates</h1>
        <a href="add_template.php" class="btn btn-primary mb-3">Add New Template</a>
        <table class="table table-striped" id="templateTable">
            <thead>
                <tr>
                    <th>Email Alias</th>
                    <th>Email Subject</th>
                    <th>Email Template</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="templateTableBody">
                <!-- Email templates will be dynamically inserted here -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery (optional, required for Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/email_template.js"></script>
</body>
</html>

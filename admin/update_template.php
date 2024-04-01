<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Email Template</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Update Email Template</h1>
        <form id="updateEmailTemplateForm">
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <div class="mb-3">
                <label for="emailAlias" class="form-label">Email Alias</label>
                <input type="text" class="form-control" id="emailAlias" name="email_alias" required>
                <div class="invalid-feedback">Please provide an email alias.</div>
            </div>
            <div class="mb-3">
                <label for="emailSubject" class="form-label">Email Subject</label>
                <input type="text" class="form-control" id="emailSubject" name="email_subject" required>
                <div class="invalid-feedback">Please provide an email subject.</div>
            </div>
            <div class="mb-3">
                <label for="emailTemplate" class="form-label">Email Template</label>
                <textarea class="form-control" id="emailTemplate" name="email_template" rows="5" required></textarea>
                <div class="invalid-feedback">Please provide an email template.</div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery (required for Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // Populate form fields with existing data
        $(document).ready(function() {
            // Fetch email template data from server
            $.ajax({
                url: 'services/email_template/get_single.php?id=<?php echo $_GET['id']; ?>',
                type: 'GET',
                dataType: 'json',
                encode: true,
                success: function(response) {
                    console.log(response.email_alias);
                    $('#emailAlias').val(response.email_alias);
                    $('#emailSubject').val(response.email_subject);
                    $('#emailTemplate').val(response.email_template);
                },
                error: function(xhr, status, error) {
                    alert('Error: ' + error);
                }
            });
        });

        // Handle form submission
        $('#updateEmailTemplateForm').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();

            $.ajax({
                url: 'services/email_template/update.php',
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response === 'success') {
                        alert('Email template updated successfully.');
                        // Optionally, you can redirect or update UI here
                        // For example, redirect to another page:
                        // window.location.href = 'index.php';
                    } else {
                        alert('Error: ' + response);
                    }
                },
                error: function(xhr, status, error) {
                    alert('Error: ' + error);
                }
            });
        });
    </script>
</body>
</html>

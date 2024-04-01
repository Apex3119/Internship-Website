$(document).ready(function() {
    // Load email templates when the page loads
    loadEmailTemplates();

    // Function to load email templates from server
    function loadEmailTemplates() {
        $.ajax({
            url: 'services/email_template/read.php',
            type: 'GET',
            dataType: 'json',
            encode: true,
            success: function(response) {
                displayEmailTemplates(response);
            },
            error: function(xhr, status, error) {
                alert('Error: ' + error);
            }
        });
    }

    // Function to display email templates in table
    function displayEmailTemplates(data) {
        var templateTable = $('#templateTable tbody');
        templateTable.empty(); // Clear previous data
        $.each(data, function(index, template2) {
          
            var row = '<tr>';
            row += '<td>' + template2.email_alias + '</td>';
            row += '<td>' + template2.email_subject + '</td>';
            row += '<td>' + template2.email_template + '</td>';
            row += '<td>';
            row += '<a href="update_template.php?id=' + template2.id + '">Edit</a> | ';
            row += '<a href="#" class="deleteBtn" data-id="' + template2.id + '">Delete</a>';
            row += '</td>';
            row += '</tr>';
           
            templateTable.append(row);
        });
    }

    // Bind delete button click event using event delegation
    $('#templateTable').on('click', '.deleteBtn', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        deleteEmailTemplate(id);
    });

    // Function to delete email template
    function deleteEmailTemplate(id) {
        if (confirm('Are you sure you want to delete this template?')) {
            $.ajax({
                url: 'services/email_template/delete.php?id=' + id,
                type: 'GET',
                success: function(response) {
                    if (response === 'success') {
                        alert('Email template deleted successfully.');
                        loadEmailTemplates(); // Refresh table
                    } else {
                        alert('Error deleting email template.');
                    }
                },
                error: function(xhr, status, error) {
                    alert('Error: ' + error);
                }
            });
        }
    }
});

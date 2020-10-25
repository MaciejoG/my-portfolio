<!-- JQuery -->
<script type="text/javascript" src="dist/js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="dist/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="dist/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="dist/js/mdb.min.js"></script>
<script>
    // Contact form validation
    function validateForm() {
        var name = document.getElementById('name').value;
        if (name == "") {
            document.querySelector('.status').innerHTML = " Name cannot be empty";
            return false;
        }
        var email = document.getElementById('email').value;
        if (email == "") {
            document.querySelector('.status').innerHTML = " Email cannot be empty";
            return false;
        } else {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if (!re.test(email)) {
                document.querySelector('.status').innerHTML = " Email format invalid";
                return false;
            }
        }
        var subject = document.getElementById('subject').value;
        if (subject == "") {
            document.querySelector('.status').innerHTML = " Subject cannot be empty";
            return false;
        }
        var message = document.getElementById('message').value;
        if (message == "") {
            document.querySelector('.status').innerHTML = " Message cannot be empty";
            return false;
        }

        // Validation passed, send the form using Ajax
        document.getElementById('status').innerHTML = "Sending...";
        formData = {
            'name': name,
            'email': email,
            'subject': subject,
            'message': message
        };

        $request = $.ajax({
            url: "phpmailer/mail.php",
            type: "post",
            data: JSON.stringify(formData)
        });
        // Callback handler that will be called if request is done
        $request.done(function(response, textStatus, jqXHR) {
            // parse response
            console.log(response)
            var $jsonData = JSON.parse(response);
            if ($jsonData.success == "1") {
                // Reset form fields
                $('#status').text("");
                $('#contact-form').closest('form').find("input[type=text], textarea").val("");
            } else {
                // Diusplay error message for the user
                $('#status').text($jsonData.message);
            }
        });
        // Callback handler that will be called if request is not executed for some reason
        $request.fail(function(jqXHR, textStatus, errorThrown) {
            // Log the error to the console
            console.error("The following error occurred: " + textStatus, errorThrown);
            // Display error message for the user
            $('#status').text("Unexpected error occured");
        });
        // Callback handler that will be called regardless if the request was done or not
        $request.always(function() {});

    }
</script>
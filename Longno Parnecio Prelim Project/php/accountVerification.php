<?php
    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_token']) && $_POST['form_token'] === 'signin_form') {
        // Check if there is form data in the session
        if (isset($_SESSION['formData'])) {
            $formData = $_SESSION['formData'];
            // print_r($formData);
            // Retrieve username and password from the submitted form
            $submittedUsername = $_POST['Username'];
            $submittedPassword = $_POST['Password'];

            // Check if the submitted username exists in the session data
            if (isset($formData[$submittedUsername])) {
                // Retrieve password associated with the submitted username
                $storedPassword = $formData[$submittedUsername]['Password'];

                // Compare the submitted password with the stored password
                if ($submittedPassword === $storedPassword) {
                    // Authentication successful, redirect or perform further actions
                    $_SESSION['LoggedIn'] = true;
                    $_SESSION['LoggedInAccount'] = $submittedUsername;
                    // Redirect to a success page, for example:
                    return '<script language="javascript">window.location.href ="index.php"</script>';
                    // exit;
                } else {
                    // Password incorrect
                    return "Incorrect password!";
                }
            } else {
                // Username not found
                return "Username not found!";
            }
        } else {
            // No form data in the session
            return "No form data in session!";
        }
    } else {
        return "";
    }
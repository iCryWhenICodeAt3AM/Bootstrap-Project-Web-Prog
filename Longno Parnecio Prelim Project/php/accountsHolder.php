<?php
// Check if the form has been submitted
$formData = array();

if ($_SERVER["REQUEST_METHOD"] == "POST" && !isset($_POST['form_token'])) {
    // Initialize an empty array to store form data

    // Retrieve and store data from each input field
    $username = $_POST['Username'];

    // Store password and other form fields
    $formData[$username] = array(
        'Username' => $_POST['Username'],
        'Password' => $_POST['Password'],
        'ConfirmPassword' => $_POST['ConfirmPassword'],
        'Email' => $_POST['Email']."@".$_POST['EmailExtension'],
        'FirstName' => $_POST['FirstName'],
        'LastName' => $_POST['LastName'],
        'Birthdate' => $_POST['Birthdate'],
        'Gender' => $_POST['Gender']
    );

    // Check if file was uploaded successfully
    if (isset($_FILES['Image']) && $_FILES['Image']['error'] === UPLOAD_ERR_OK) {
        // Get file name and temporary location
        $fileTmpPath = $_FILES['Image']['tmp_name'];
        $fileName = $_FILES['Image']['name'];

        // Check if the file name is empty
        if (!empty($fileName)) {
            // Move uploaded file to a permanent location
            $targetPath = "uploads/" . $fileName;

            // Check if the file was moved successfully
            if (move_uploaded_file($fileTmpPath, $targetPath)) {
                // Store file path in the form data array
                $formData[$username]['Image'] = $targetPath; // Add the image directory to the array
            } else {
                // Error moving the file
                echo "Error moving the uploaded file.";
            }
        } else {
            // File name is empty
            echo "File name is empty.";
        }
    } else {
        // No file uploaded or error occurred
        echo "No file uploaded or an error occurred.";
    }


    // Check if there is existing form data in the session
    if (isset($_SESSION['formData'])) {
        // Merge the new form data with the existing session data
        $_SESSION['formData'] = array_merge($_SESSION['formData'], $formData);
    } else {
        // Set the form data in the session if it doesn't exist
        $_SESSION['formData'] = $formData;
    }
    
    echo "<script>console.log(".$formData.")</script>";
}

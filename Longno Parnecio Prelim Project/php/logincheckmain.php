<?php
    if (!isset($_SESSION["LoggedIn"]) || !$_SESSION["LoggedIn"]) {
        echo '<script language="javascript">window.location.href ="signinform.php"</script>';
        exit; // Make sure to exit after redirecting to prevent further execution
    }
    
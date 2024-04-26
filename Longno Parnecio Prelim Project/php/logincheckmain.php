<?php
    if(isset($_SESSION["LoggedIn"]) && !$_SESSION["LoggedIn"]){
        echo '<script language="javascript">window.location.href ="signinform.php"</script>';
    }
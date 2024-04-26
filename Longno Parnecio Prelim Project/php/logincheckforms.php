<?php
    if(isset($_SESSION["LoggedIn"]) && $_SESSION["LoggedIn"]){
        echo '<script language="javascript">window.location.href ="index.php"</script>';
    }
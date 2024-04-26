<?php
    // Check if the current page is "aboutus.php"
    if (basename($_SERVER['PHP_SELF']) === 'aboutus.php') {
        // If it is, just use the regular href value
        $reyLink = '#rey';
        $lloydLink = '#lloyd';
    } else {
        // If not, redirect to the "aboutus.php" page with the appropriate anchor
        $reyLink = 'aboutus.php#rey';
        $lloydLink = 'aboutus.php#lloyd';
    }

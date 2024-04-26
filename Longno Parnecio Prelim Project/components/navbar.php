<!-- Navigation Bar - START -->
<!-- Bootstrap CSS -->
<?php
    require("php/aboutusredirect.php");
?>
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Master CSS -->
<link rel="stylesheet" href="css/navigation.css">

<!-- NAVBAR CONTENT -->
<nav class="navbar navbar-expand-lg fixed-top p-0">
    <div class="nav-container container-fluid">
        <!-- Hidden Hamburger Menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar Logo -->
        <div class="logo navbar-brand justify-content-center text-center mt-3 mb-3 ms-lg-4 col-4 col-md-7 col-md-7 order-1 col-lg-2 order-lg-1 col-xl-1">
            <a href="index.php"><img src="images/troolife logo 1.svg" alt="troolife logo 1" id="logo" width="100%"></a>
        </div>
        <!-- Collapsable Navigation List -->
        <div class="collapse navbar-collapse justify-content-center col-12 order-3 col-lg-6 order-lg-2 col-xl-4" id="navbarNavAltMarkup">
            <div class="navbar-nav m-0 ">
                <!-- Navigation List Items Ordered List -->
                <li class="nav-item p-2">
                    <a class="nav-link" href="#" id="active">Mission</span></a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="#">LifeLine</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="#">Nutrition</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="#">Free by Referral</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="#">Public Relations</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="#">Company</a>
                </li>
                <li class="nav-item p-2">
                    <a class="nav-link" href="#">Mangement</a>
                </li>
                <li class="nav-item dropdown mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    About us
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <!-- Dropdown items here -->
                    <li><a class="dropdown-item" href="<?php echo $reyLink; ?>">Rey Longno</a></li>
                    <li><a class="dropdown-item" href="<?php echo $lloydLink; ?>">Lloyd Mark P. Parnecio</a></li>
                    </ul>
                </li>
            </div>
        </div>
        <div class="navbar-nav justify-content-start ps-2 me-3 col-4 col-sm-4 order-2 col-md-3 col-lg-3 order-lg-3 col-xl-3 ">
            <div class="row">
                <div class="col-2 p-0">
                    <a class="nav-link" href="#">
                        <img src="images/cart icon.svg" alt="cart icon" id="cart"> <!-- Cart Icon with Zero -->
                    </a>
                </div>
                <div class="col-1 mt-1 p-0" id="hide">
                    <a class="nav-link" href="#">
                        <img src="images/Line.svg" alt="line" id="line"> <!-- Line Icon -->
                    </a>
                </div>
                <div class="col-5 mt-1 p-0" id="hide">
                    <a class="nav-link d-flex" href="#">
                        <img src="images/profile icon.svg" alt="profile icon" id="profileIcon"> <!-- Profile Icon -->
                        <p class="title ms-2 mb-0">My Office</p> <!-- My Office Text -->
                    </a>
                </div>
                <div class="col-4 mt-1 p-0 ms-4 ms-sm-5 ms-lg-0">
                    <a class="nav-link d-flex" href="#">
                        <img src="images/globe icon.svg" alt="globe icon" id="globe"> <!-- Globe Image -->
                        <p class="title ms-2 mb-0">English</p>
                        <img src="images/dropdown.png" alt="dropdown img" class="ms-1">
                    </a>
                </div>
            </div>
        </div>
    </div>        
</nav>   
<!-- Navigation Bar - END -->
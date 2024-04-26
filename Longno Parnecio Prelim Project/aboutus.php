<!DOCTYPE html>
<?php
    session_start();
    require("components/navbar.php");
    require("php/logincheckmain.php");
?>
<html lang="en">
    <head>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link rel="stylesheet" href="css/aboutusstyles.css">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
    </head>
    <body>
    <br>
        <!-- Profile and Contacts -->
        <div class="profileContacts container-fluid mt-5">
            <div class="row">
                <div class="col-2 col-lg-1 text-end">
                    <img src="<?php echo isset($_SESSION['formData'][$_SESSION['LoggedInAccount']]['Image']) ? $_SESSION['formData'][$_SESSION['LoggedInAccount']]['Image'] : 'default_profile_image.jpg'; ?>" alt="Profile Picture" id="profilePicture">
                </div>
                <div class="col-6 col-lg-8 pt-3 text-start">
                    <p id="name"><?php echo isset($_SESSION['formData'][$_SESSION['LoggedInAccount']]['FirstName']) && isset($_SESSION['formData'][$_SESSION['LoggedInAccount']]['LastName']) ? $_SESSION['formData'][$_SESSION['LoggedInAccount']]['FirstName']." ".$_SESSION['formData'][$_SESSION['LoggedInAccount']]['LastName'] : "Error"; ?></p>
                </div>
                <div class="col-2 col-lg-2 text-center pt-3">
                    <img src="images/Contact Icons.svg" alt="Contact Icons" id="contactIcons">
                </div>
                <div class="col-2 col-lg-1 text-center pt-3">
                    <?php
                        if(isset($_SESSION["LoggedIn"]) && $_SESSION["LoggedIn"]){
                            echo '
                            <form method="post" action="">
                                <button type="submit" class="nav-link" name="logout"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="teal" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                            </svg></button>
                            </form>
                            
                        ';
                        }
                        // Check if the logout button was clicked
                        if(isset($_POST['logout'])) {
                            // Unset the session variable
                            $_SESSION["LoggedIn"] = false;
                            // Redirect to a page after logout
                            echo '<script language="javascript">window.location.href ="signinform.php"</script>';
                            exit;
                        }
                    ?>
                </div>
                
            </div>
        </div>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center" id="rey">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5 rounded-circle" src="assets/img/rey.jpg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Rey D. Longno</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">GDSC UNO-R VP for Technical | Web Developer | Full-Stack Developer | Computer Science Student</p>
            </div>
        </header>
        <!--REY Portfolio Section-->
        <section class="page-section portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Rey's Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/cake.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/game.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
<!--                     <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/safe.png" alt="..." />
                        </div>
                    </div> -->
                    <!-- Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/skill.webp" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">My Knowledge</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><dl>
                        <dt>Industry Knowledge</dt>
                        <dd>- Web Design</dd>
                        <dd>- Web Solutions</dd>
                        <dd>- Responsive Web Design</dd>
                        <dd>- Progressive Web Applications (PWAs)</dd>
                        <dd>- Computer Science</dd>
                        <dd>- Cisco Networking</dd>
                        <dd>- Back-End Web Development</dd>
                        <dd>- Web Applications</dd>
                        <dd>- Application Programming Interfaces (API)</dd>
                        <dd>- Web Development</dd>
                        <dd>- Java Web Applications</dd>
                        <dd>- Object-Oriented Programming (OOP)</dd>
                    </div>
                    <div class="col-lg-4 ms-auto">
                        <dl>
                            <dt>Tools & Technologies</dt>
                            <dd>- Cloud Firestore</dd>
                            <dd>- Firebase</dd>
                            <dd>- Boostrap (Framework)</dd>
                            <dd>- HTML</dd>
                            <dd>- Cascading Style Sheets (CSS)</dd>
                            <dd>- Github</dd>
                            <dd>- Phyton</dd>
                            <dd>- JavaScript</dd>
                            <dd>- PHP</dd>
                            <dd>- SQL</dd>
                            <dd>- Java</dd>
                            <dd>- MySQL</dd>
                        </dl>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Rey</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
             <h4 class=" text-center  text-secondary">reylongno2002@gmail.com</h4>
            </div>
        </section>


        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Favorite Foods</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                   <!--  <img class="img-fluid rounded mb-5" src="assets/img/portfolio/java.webp" alt="..." /> -->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">
Lechon, Fried Chicken, Tanduay, Antonov Vodka</p>
                         
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Address</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="..." /> -->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Brgy. Punta Taytay, Bacolod City</p>
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Games</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Rimworld, Arknights, Minecraft, League of Legends</p>
                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->

        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Skills</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/skill.webp" alt="..." />
             
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <div class="container">
  <dl>
    <dt>Industry Knowledge</dt>
    <dd>- Web Design</dd>
    <dd>- Web Solutions</dd>
    <dd>- Responsive Web Design</dd>
    <dd>- Progressive Web Applications (PWAs)</dd>
    <dd>- Computer Science</dd>
    <dd>- Cisco Networking</dd>
    <dd>- Back-End Web Development</dd>
    <dd>- Web Applications</dd>
    <dd>- Application Programming Interfaces (API)</dd>
    <dd>- Web Development</dd>
    <dd>- Java Web Applications</dd>
    <dd>- Object-Oriented Programming (OOP)</dd>
    <hr>
    <dt>Tools & Technologies</dt>
    <dd>- Cloud Firestore</dd>
    <dd>- Firebase</dd>
    <dd>- Boostrap (Framework)</dd>
    <dd>- HTML</dd>
    <dd>- Cascading Style Sheets (CSS)</dd>
    <dd>- Github</dd>
    <dd>- Phyton</dd>
    <dd>- JavaScript</dd>
    <dd>- PHP</dd>
    <dd>- SQL</dd>
    <dd>- Java</dd>
    <dd>- MySQL</dd>
  </dl>     
</div>
                                    <!-- Portfolio Modal - Text-->
                                    <!-- <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p> -->
             
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>








        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center" id="lloyd">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5 rounded-circle" src="assets/img/lloyd.jpg" alt="..."/>
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Lloyd Mark P. Parnecio</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">2023-2024 Executive Secretary General of GDSC UNO-R | Web Developer | Software Programmer | Hackathon Enthusiast | Full-Stack Dev | Machine Learning | Night Crows</p>
            </div>
        </header>
        <!--LLOYD Portfolio Section-->
        <section class="page-section portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lloyd's Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/cake.png" alt="..."/>
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModa2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModa3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/game.png" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModa4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/skill.webp" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
<!--                     <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/submarine.png" alt="..." />
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">My Knowledge</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto">                                      <dl>
                        <dt>Industry Knowledge</dt>
                        <dd>- Google App Script</dd>
                        <dd>- Andriod Development</dd>
                        <dd>- Web Design</dd>
                        <dd>- Presentations</dd>
                        <dd>- HTML Scripting</dd>
                        <dd>- Web Development</dd>
                        <dd>- Research & Development (R&D)</dd>


                        <hr>
                        <dt>Interpersonal Skills</dt>
                        <dd>- Analytical</dd>
                    </dl> 
                </div>
                <div class="col-lg-4 ms-auto">    
                    <dt>Tools & Technologies</dt>
                    <dd>- Phyton</dd>
                    <dd>- Angular</dd>
                    <dd>- PHP</dd>
                    <dd>- Javascript</dd>
                    <dd>- HTML5</dd>
                    <dd>- HTML</dd>
                    <dd>- Cascading Style Sheets (CSS</dd>
                    <dd>- Bootstrap</dd>
                    <dd>- JQuery</dd>
                    <dd>- Microsoft PowerPoint</dd>
                    <dd>- Java</dd></div>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Lloyd</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
            <h4 class=" text-center  text-secondary">lloydparn333@gmail.com</h4>
            </div>
        </section>
        <hr>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Favorite foods</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="..." /> -->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Rice</p>
                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModa2" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Address</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="..." /> -->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Silay City</p>
                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModa3" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Games</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="..." /> -->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">TFT, Night Crows, ROS, Valorant, Dress up</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModa4" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">My Skills</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/skill.webp" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <dl>
                                        <dt>Industry Knowledge</dt>
                                        <dd>- Google App Script</dd>
                                        <dd>- Andriod Development</dd>
                                        <dd>- Web Design</dd>
                                        <dd>- Presentations</dd>
                                        <dd>- HTML Scripting</dd>
                                        <dd>- Web Development</dd>
                                        <dd>- Research & Development (R&D)</dd>

                                        <hr>
                                        <dt>Tools & Technologies</dt>
                                        <dd>- Phyton</dd>
                                        <dd>- Angular</dd>
                                        <dd>- PHP</dd>
                                        <dd>- Javascript</dd>
                                        <dd>- HTML5</dd>
                                        <dd>- HTML</dd>
                                        <dd>- Cascading Style Sheets (CSS)</dd>
                                        <dd>- Bootstrap</dd>
                                        <dd>- JQuery</dd>
                                        <dd>- Microsoft PowerPoint</dd>
                                        <dd>- Java</dd>
                                        <hr>
                                        <dt>Interpersonal Skills</dt>
                                        <dd>- Analytical</dd>
                                    </dl>     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- FOOTER -->

    <script src="js/aboutusscript.js"></script>
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    <?php require("components/footer.html");?>
</body>
</html>
<!DOCTYPE html>
<?php
    session_start();
    require("components/navbar.php");

    if(isset($_SESSION["LoggedIn"]) && !$_SESSION["LoggedIn"]){
        echo '<script language="javascript">window.location.href ="signinform.php"</script>';
    }
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Setting Screen Width of Device -->
        <title>Longno Parnecio Prelim Project</title>
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
        <?php
        ?>
        <!-- Video Embedded - START -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 m-0 p-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item" src="videos/sunsets.mp4" autoplay muted loop style="max-width: 100%;max-height: 100%;"></video>
                        <img class="video-text position-absolute start-50 translate-middle" src="images/video text.svg" id="video-text" alt="video text" id="video-text">
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Embedded - END -->
        <!-- Our Mission - START -->
        <div class="container text-center mt-5 mb-5">
            <div class="row">
                <div class="our-Mission col-12 col-lg-10 offset-lg-1">
                    <h1>Our <u id="mis-word">Mis</u>sion</h1>
                </div>
                <div class="col-12 offset-0 col-lg-10 offset-lg-1 mt-4">
                    <div class="row">
                        <div class="col-12 offset-0 col-lg-8 offset-lg-2">
                            <p id="mission-Content" class="lh-lg">Our TrooLife mission is to empower Members to make a true difference in their own personal health, wellness and longevity. For them to enhance their own quality of life, and then to inspire a better quality of life for their family, friends and associates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Mission - END -->

        <!-- 2 Babes Smiling - START -->
        <div class="imageright container-fluid pt-5 pb-5">
            <div class="row">
                <div class="col-12 offset-0 col-lg-4 offset-lg-1 order-2 order-lg-1 pt-lg-4 pt-0 mt-lg-5 mt-0">

                    <h4 id="imageright">The things you consistently do</h3>
                    <p id="imageright" class="lh-lg mt-lg-4 mt-0 pt-3 pt-lg-0">to enhance your mind, your body, your relationships and your finances – will enhance your quality of life - and the quality of your extended life.</p>

                    <p id="imageright" class="lh-lg mt-lg-4 mt-0 pt-3 pt-lg-0">Also be aware that the things that you do not bother to do for your mind, body, relationships and finances – will reduce your quality of life.</p>
                </div>
                <div class="col-0 col-lg-1 order-1"></div>
                <div class="col-12 pb-4 pb-lg-0 offset-0 col-lg-6 offset-lg-1 m-0 order-1 order-lg-2">
                    <img src="images/2babessmiling.png" id="imageright" alt="2 babes smiling">
                </div>
            </div>
        </div>
        <!-- 2 Babes Smiling - END -->
        <!-- Chef and WOAHMAN - START -->
        <div class="container-fluid pt-5 pb-5">
            <div class="row">
                <div class="col-12 offset-0 col-lg-4 offset-lg-1 order-2 order-lg-2 pt-lg-4 pt-0 mt-lg-5 mt-0">
                    <h4 id="imageleft">Health experts say</h3>
                    <p id="imageleft" class="lh-lg mt-lg-4 mt-0 pt-3 pt-lg-0">we should have five servings or fresh fruits and vegetables every day, however this is not practical or possible for most active adults. This is why these same experts recommend supplementing your diet with high-quality vitamins, minerals, antioxidants and amino acids to help provide optimal health, vitality and mental clarity.</p>
                </div>
                <div class="col-0 col-lg-1 order-2 p-0 m-0"></div>
                <div class="col-12 pb-4 pb-lg-0 col-lg-6 m-0 order-1 order-lg-1">
                    <img src="images/chefandwaman.png" id="imageleft" alt="2 babes smiling">
                </div>
            </div>
        </div>
        <!-- Chef and WOAHMAN - END -->
        <!-- Exerciserist - START -->
        <div class="imageright-1 container-fluid pt-5 pb-5">
            <div class="row">
                <div class="col-12 offset-0 col-lg-4 offset-lg-1 order-2 order-lg-1 pt-lg-4 pt-0 mt-lg-5 mt-0">
                    <h4 id="imageright-1">Through our LifeLine program, </h3>
                    <p id="imageright-1" class="lh-lg mt-lg-4 mt-0 pt-3 pt-lg-0">TrooLife will act as your personal wellness coach, encouraging you to eat well, to maintain a healthy activity level and to help you de-stress from your work and family pressures. LifeLine will also advise you on how to optimize your important personal relationships with your family, friends and associates, to enhance your own life, and theirs.</p>
                </div>
                <div class="col-0 col-lg-1 order-1"></div>
                <div class="col-12 pb-4 pb-lg-0 offset-0 col-lg-6 offset-lg-1 m-0 order-1 order-lg-2">
                    <img src="images/exerciserist.png" id="imageright" alt="2 babes smiling">
                </div>
            </div>
        </div>
        <!-- Exerciserist - END -->
        <!-- Chef and WOAHMAN - START -->
        <div class="container-fluid pt-5 pb-5">
            <div class="row">
                <div class="col-12 offset-0 col-lg-4 offset-lg-1 order-2 order-lg-2 pt-lg-5 pt-0 mt-lg-5 mt-0">
                    <h4 id="imageleft">TrooLife is also committed</h3>
                    <p id="imageleft" class="lh-lg mt-lg-4 mt-0 pt-3 pt-lg-0">to providing you excellent product quality and value, with the means to receive your nutritional supplements and wellness coaching for free, from a few simple referrals. Please take a few minutes to find out how.</p>
                </div>
                <div class="col-0 col-lg-1 order-2 p-0 m-0"></div>
                <div class="col-12 pb-4 pb-lg-0 col-lg-6 m-0 order-1 order-lg-1">
                    <img src="images/3prettygirlswow.png" id="imageleft" alt="2 babes smiling">
                </div>
            </div>
        </div>
        <!-- Chef and WOAHMAN - END -->
        <!-- Button - START -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center mt-5 mb-5">
                    <img src="images/getstartedbutton.png" alt="get started button">
                </div>
            </div>
        </div>
        <!-- Button - END -->
        <!-- Cards - START -->
        <div class="cards container-fluid text-center">
            <div class="row">
                <div class="col-12 col-lg-10 offset-0 offset-lg-1 mt-5">
                    <h1 id="cardstitle">Realize Your <u id="shown">True</u> Life <u id="hidden">Potential</u></h1>
                </div>
                <div class="col-10 offset-1 ps-lg-5">
                    <div class="row">
                        <div class="card col-12 col-lg-3 ms-lg-5 mt-5 mb-5">
                            <div class="row">
                                <div class="col-4 offset-4 pb-4 pt-5">
                                    <img src="images/sicoach.svg" alt="coach" width="100%" height="100%">
                                </div>
                                <div class="col-10 offset-1 pb-3">
                                    <h5 id="cards" class="lh-base">LifeLine Wellness Coaching</h5>
                                </div>
                                <div class="col-10 offset-1 pb-5">
                                    <img src="images/cardbutton.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card col-12 col-lg-3 ms-lg-5 mt-5 mb-5">
                            <div class="row">
                                <div class="col-4 offset-4 pb-4 pt-5">
                                    <img src="images/hearts.svg" alt="hearts" width="100%" height="100%">
                                </div>
                                <div class="col-11 offset-1 pb-5">
                                    <h5 id="cards" class="lh-base">Nutritional Health &nbsp;&nbsp;&nbsp;</h5>
                                </div>
                                <div class="col-10 offset-1 pb-5">
                                    <img src="images/cardbutton.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="card col-12 col-lg-3 ms-lg-5 mt-5 mb-5">
                            <div class="row">
                                <div class="col-4 offset-4 pb-4 pt-5">
                                    <img src="images/karton.svg" alt="karton" width="100%" height="100%">
                                </div>
                                <div class="col-11.5 offset-1 pb-5">
                                    <h5 id="cards" class="lh-base">Referral Benefits &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                </div>
                                <div class="col-10 offset-1 pb-5">
                                    <img src="images/cardbutton.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cards - END -->
        <!-- Footer -->
        <?php require("components/footer.html");?>
        </script>
    </body>
</html>
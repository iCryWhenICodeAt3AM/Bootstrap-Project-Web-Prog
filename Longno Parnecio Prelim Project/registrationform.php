<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    require("components/navbar.php");
    require("php/logincheckforms.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <div class="container" style="margin-top: 85px; margin-bottom: 12  0px;">
        <div class="row">
            <div class="col-10 offset-1 pt-4 pb-4" style="background-color: teal; border-radius: 25px;">
                <div class="container p-1">
                    <form action="signinform.php" method="post" enctype="multipart/form-data" class="p-2">
                        <div class="row text-center">
                            <div class="col-12">
                                <img src="images/troolife logo 1.svg" alt="troolife logo 1" id="logo" width="100%">
                            </div>
                            <div class="col-12 pt-2">
                                <h5 class="text-white"><small>Registration Form</small></h5>
                            </div>
                        </div>
                        <div class="row pt-1">
                            <div class="col-12 text-center">
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id= "canv1" style="max-width:200px; border-radius: 20px; max-height: 200px; border: 2px solid #FFF;"></canvas>
                                    </div>
                                    <div class="col-4 offset-4 mb-3">
                                        <input type="file" class="form-control" multiple="false" accept="image/*" id=finput name="Image" onchange="upload()" required>
                                    </div>
                                </div>
                            </div>
                            <!-- Credentials -->
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h6 class="text-white">&nbsp;&nbsp;<small>Credentials</small></h5>
                                    </div>
                                    <div class="col-12 input-group  mb-3">
                                        <span class="input-group-text" id="basic-addon1">Username</span>
                                        <input type="text" class="form-control" name="Username" aria-label="Username" aria-describedby="basic-addon1" pattern="[^\s]+(_[^\s]+)*" title="Username must not contain spaces, and only underscores are allowed as special characters" minlength="4" required>
                                    </div>
                                    <div class="col-12 input-group">
                                        <span class="input-group-text" id="basic-addon1">Password&nbsp;</span>
                                        <input type="password" class="form-control" id="password" name="Password" aria-label="Password" aria-describedby="basic-addon1" pattern="^(?=\S{8,}$)(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z\d\s]).*$" title="Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character." required>
                                    </div>
                                    <div id="password-strength" class="col-12 mb-3 text-white"></div>
                                    <div class="col-12 input-group">
                                        <span class="input-group-text" id="basic-addon1">Confirm Password</span>
                                        <input type="password" oninput="validatePassword()" class="form-control" id="confirmPassword" name="ConfirmPassword" aria-label="Confirm Password" aria-describedby="basic-addon1" required>
                                        <div class="invalid-feedback">
                                            Passwords do not match
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Information -->
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h6 class="text-white">&nbsp;&nbsp;<small>Information</small></h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 input-group mb-3">
                                        <span class="input-group-text">Email</span>
                                        <input type="text" class="form-control" name="Email" aria-label="Email" required>
                                        <span class="input-group-text">@</span>
                                        <input type="text" class="form-control" name="EmailExtension" aria-label="Exension" pattern="[a-zA-Z]+[.][a-zA-Z]+" title="Enter a valid email extension with at least one letter before a period" required>
                                    </div>                                
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <span class="input-group-text">First & Last Name</span>
                                            <input type="text" aria-label="First name" name="FirstName" class="form-control" required>
                                            <input type="text" aria-label="Last name" name="LastName"  class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12 input-group">
                                        <span class="input-group-text">Birthdate</span>
                                        <input type="date" class="form-control" name="Birthdate" placeholder="Email" aria-label="Username" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <input class="form-check-input mt-0" type="radio" name="Gender" value="Male">
                                            </div>
                                            <input type="text" class="form-control" value="Male" disabled>
                                            &nbsp;
                                            <div class="input-group-text">
                                                <input class="form-check-input mt-0" type="radio" name="Gender" value="Female">
                                            </div>
                                            <input type="text" class="form-control" value="Female" disabled>
                                            &nbsp;
                                            <div class="input-group-text">
                                                <input class="form-check-input mt-0" type="radio" name="Gender" value="Others">
                                            </div>
                                            <input type="text" class="form-control" value="Others" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 text-center offset-3 d-grid gap-2 mt-3">
                                <button type="submit" class="btn btn-info border-light border-2 btn-lg text-white mt-1" style="border-radius: 50px;"><b><small>Submit</small></b></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://www.dukelearntoprogram.com/course1/common/js/image/SimpleImage.js"></script>
    <script src="js/imageUpload.js"></script>
    <script src="js/confirmpassword.js"></script>
    <script src="js/passwordStrength.js"></script>
    <?php require("components/footer.html");?>
</body>
</html>
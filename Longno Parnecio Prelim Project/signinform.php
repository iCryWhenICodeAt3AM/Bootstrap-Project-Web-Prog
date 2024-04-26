<!DOCTYPE html>
<?php
    // Start or resume a session
    session_start();
    require("components/navbar.php");
    require("php/accountsHolder.php");
    require("php/logincheckforms.php");

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign-in</title>
    </head>
    <body> 
        <div class="container" style="margin-top: 160px; margin-bottom: 70px;">
            <div class="row">
                <div class="col-10 offset-1 pt-4 pb-4" style="background-color: teal; border-radius: 25px;">
                    <div class="container p-1">
                        <form action="" method="post" class="p-2">
                            <div class="row">
                                <div class="col-5">
                                    <img src="images/troolife logo 1.svg" alt="troolife logo 1" id="logo" width="100%">
                                    <h1 class="sign-in pt-3 text-white">&nbsp;Sign In</h1>
                                    <h6 class="text-white">&nbsp;&nbsp;<small>Please use your TrooLife Account</small></h5>
                                    <button type="button" class="btn btn-none text-white" onclick="showAllAccounts()"><small>Click to view all accounts</small></button>
                                    <div id="accountList" style="display: none;">
                                        <ul>
                                            <?php
                                            if (isset($_SESSION['formData'])) {
                                                $formData = $_SESSION['formData'];
                                                foreach ($formData as $username => $data) {
                                                    echo "<small><strong>Username:</strong> $username, <strong>Password:</strong> {$data['Password']}</small><br>";
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </div>                                
                                </div>
                                <div class="col-7 pt-5">
                                    <div class="col-12 text-warning">
                                        <?php echo require("php/accountVerification.php");?>
                                    </div>
                                    <div class="row pt-3 pb-3">
                                        <div class="col-12 input-group mb-3">
                                            
                                            <input type="text" class="form-control" name="Username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 input-group mb-3">
                                            <input type="password" class="form-control" name="Password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h6><button type="button" class="btn btn-none btn-sm text-white" style="border-radius: 50px;"><small>Forgot password?</small></button></h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-4 offset-3 d-grid gap-2">
                                            <button type="button" class="btn btn-none btn-sm text-white" onclick="window.location.href='registrationform.php';" style="border-radius: 50px;"><b><small>Create Account</small></b></button>
                                        </div>
                                        <div class="col-4 offset-1 d-grid gap-2">
                                            <button type="submit" class="btn btn-info btn-md text-white mt-1" style="border-radius: 50px;"><b><small>Sign in</small></b></button>
                                        </div>   
                                        <input type="hidden" name="form_token" value="signin_form">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <script>
            function showAllAccounts() {
                var accountList = document.getElementById('accountList');
                accountList.style.display = 'block';
            }
        </script>
        <!-- FOOTER -->
        <?php
            require("components/footer.html");
        ?>
    </body>
</html>

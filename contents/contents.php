<?php
session_start();
class contents
{
    public function signUpForm($globalObj)
    {
        ?>
        <div class="container mb-5">
        <?php
            print $globalObj->getMsg('Message');
            $errors = $globalObj->getMsg('errors');
        ?>
        <form action="<?php print basename($_SERVER['PHP_SELF']) ?>" method="post" style = "border: 3px ridge goldenrod;" class="p-5 rounded">
            <!-- Email Row -->
            <div class="row mb-5 mt-5">
                <div class="col-sm-2">
                    <label for="email" class="form-label fw-bold">Email:</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-center" id="email" placeholder="Enter email" name="email"  required>
                    <!-- Email Errors - Print them if they are found -->
                    <?php 
                        if (isset($errors['emailFormatError'])) {
                            print ("<div class='invalid text-danger d-block'>" . $errors['emailFormatError'] . "</div>");
                        }
                        if (isset($errors['duplicateEmailError'])) {
                            print "<div class='invalid text-danger d-block'>" . $errors['duplicateEmailError'] . "</div>";
                        }
                        if (isset($errors['emailDomainError'])) {
                            print "<div class='invalid text-danger d-block'>" . $errors['emailDomainError'] . "</div>";
                        }
                    ?>
                    
                </div>
            </div>
            <!-- Full Name Row -->
            <div class="row mb-5 mt-5">
                <div class="col-sm-2">
                    <label for="fullname" class="form-label fw-bold">Full Name: </label>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-center" id="fullname" placeholder="Enter full name" name="fullname" required <?php print (isset($_SESSION["fullname"])) ? 'value="'.$_SESSION["fullname"].'"'  : ''; unset($_SESSION["fullname"]); ?>>
                    <!-- Full Name Errors -->
                    <?php
                        if (isset($errors['nameLettersError'])) 
                        {
                            print ("<div class='invalid text-danger d-block'>" . $errors['nameLettersError'] . "</div>");    
                        }
                    ?>
                </div>
            </div>
            <!-- Username Row -->
            <div class="row mb-5 mt-5">
                <div class="col-sm-2">
                    <label for="username" class="form-label fw-bold">Username:</label>
                </div>
                <div class="col-sm-10">
                    <input type="text" class="form-control text-center" id="username" placeholder="Enter username" name="username" required>
                    <!-- Username Errors -->
                    <?php
                        if (isset($errors['duplicateUsernameError'])) 
                        {
                            print ("<div class='invalid text-danger d-block'>" . $errors['duplicateUsernameError'] . "</div>");    
                        }
                        if (isset($errors['usernameLettersError']))
                        {
                            print ("<div class='invalid text-danger d-block'>" . $errors['usernameLettersError'] . "</div>");
                        }
                    ?>
                </div>
            </div>
            <!-- Button Row -->
            <div class="row mb-2 mt-5 container d-flex justify-content-center">
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-dark w-100 rounded-0 text-warning" name="signup">SIGN UP </button>
                </div>
            </div>
        </form>
    </div>
        <?php
    }
}
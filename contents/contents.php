<?php

class contents
{
    public function formContent()
    {
        ?>
        <div class="container mb-5">
        <form action="database/processForm.php" method="post" style = "border: 1px solid #000;" class="p-5 rounded">
            <!-- Email Row -->
            <div class="row mb-5 mt-5">
                <div class="col-sm-1">
                    <label for="email" class="form-label">Email:</label>
                </div>
                <div class="col-sm-11">
                    <input type="text" class="form-control text-center" id="email" placeholder="Enter email" name="email"  required>
                </div>
            </div>
            <!-- Full Name Row -->
            <div class="row mb-5 mt-5">
                <div class="col-sm-1">
                    <label for="fullname" class="form-label">Full Name: </label>
                </div>
                <div class="col-sm-11">
                    <input type="text" class="form-control text-center" id="fullname" placeholder="Enter full name" name="fullname" required>
                </div>
            </div>
            <!-- Username Row -->
            <div class="row mb-5 mt-5">
            <div class="col-sm-1">
                    <label for="username" class="form-label">Username:</label>
                </div>
                <div class="col-sm-11">
                    <input type="text" class="form-control text-center" id="username" placeholder="Enter username" name="username" required>
                </div>
            </div>
            <!-- Button Row -->
            <div class="row mb-2 mt-5 container d-flex justify-content-center">
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-dark w-100 rounded-0" name="signup">SIGN UP </button>
                </div>
            </div>
        </form>
    </div>
        <?php
    }
}
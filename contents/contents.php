<?php

class contents
{
    public function formContent()
    {
        ?>
        <div class="container mb-5">
        <form action="" style = "border: 1px solid #000;" class="p-5 rounded">
            <!-- First Row -->
            <div class="row mb-5 mt-5">
                <div class="col-sm-1">
                    <label for="email" class="form-label">Email:</label>
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control text-center" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="col-sm-1">
                    <label for="username" class="form-label">Username:</label>
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control text-center" id="username" placeholder="Enter username" name="username">
                </div>
            </div>
            <!-- Second Row -->
            <div class="row mb-5 mt-5">
                <div class="col-sm-1">
                    <label for="fname" class="form-label">First Name:</label>
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control text-center" id="fname" placeholder="Enter first name" name="fname">
                </div>
                <div class="col-sm-1">
                    <label for="surname" class="form-label">Surname:</label>
                </div>
                <div class="col-sm-5">
                    <input type="text" class="form-control text-center" id="surname" placeholder="Enter surname" name="surname">
                </div>
            </div>
            <!-- Third Row -->
            <div class="row mb-5 mt-5">
                <div class="col-sm-1">
                    <label for="fname" class="form-label">Password:</label>
                </div>
                <div class="col-sm-5">
                    <input type="password" class="form-control text-center" id="password" placeholder="Enter password" name="fname">
                </div>
                <div class="col-sm-1">
                    <label for="confirmPassword" class="form-label">Confirm Password:</label>
                </div>
                <div class="col-sm-5">
                    <input type="password" class="form-control text-center" id="confirmPassword" name="confirmPassword">
                </div>
            </div>
            <!-- Fourth Row - Button -->
            <div class="row mb-5 mt-5 container">
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-dark w-100">Sign Up</button>
                </div>
            </div>
        </form>
    </div>
        <?php
    }
}
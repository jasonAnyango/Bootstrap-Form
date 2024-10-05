<?php

// Require the 'load' file that has the objects
require_once "load.php";

// Call the functions using the objects
// The header function
$layoutsObj->header();
// The navBar function
$menuObj->navMenu();
// The signUpBanner function
$headingsObj->signUpBanner();
// The formContent function
$contentsObj->signUpForm($globalObj);
//  The footer function
$layoutsObj->footer();

<?php
// Start the session
session_start();
// Include files
require "includes/dbConnection.php";
require "includes/constants.php";
function classAutoLoad($className)
{
    // The different folders containing the classes
    $directories = ["contents", "menus", "layouts", "database"];
    // Loop through the folders
    foreach($directories as $dir)
    {
        //  Get the names of the files from the folders
        $fileName = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $className . ".php";
        // Check if the file exists and if it is also readable
        if(file_exists($fileName) AND is_readable($fileName))
        {
            // Require the file
            require_once $fileName;
        }
    }
}

// Automatically load the required files
spl_autoload_register('classAutoLoad');
// Create instances of all the classes
$menuObj = new menus();
$layoutsObj = new layouts();
$headingsObj = new headings();
$contentsObj = new contents();
// Connection Object
$conn = new dbConnection(dbType, hostName, hostUser, hostPass, dbName);

// Create instance of processForm
$processObj = new processForm();
// Call the signup function
$processObj->signup($conn);
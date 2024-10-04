<?php

require_once "dbConnection.php";

function validatePassword($password, $confirmPassword)
{
    if($password == $confirmPassword)
    {
        return true;
    }
    else
    {
        return false;
    }
}
echo "Start";
if(isset($_POST['email'], $_POST['username'], $_POST['fname'], $_POST['surname'], $_POST['password'], $_POST['confirmPassword']))
{
    // Assign variables
    $email = $_POST['email'];
    $username = $_POST['username'];
    $fname = $_POST['fname'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // Validate Password
    if(!validatePassword($password, $confirmPassword))
    {
        echo "Passwords do not match";
        die;
    }
    else
    {
        try
        {
        // Prepare the query
        $insertQuery = "INSERT INTO users (email, username, fname, surname, password) VALUES :email, :username, :fname, :surname, :password)";
        //  Create prepared statement
        $stmt = $connection->prepare($insertQuery);
        // Bind parameters
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':fname', $fname);
        $stmt->bindParam(':surname', $surname);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        echo "Record Inserted Successfully 👌 <br>"; 
        }
        catch(PDOException $pdoError)
        {
            echo "Record Insertion Failed 😭  <br>" . $pdoError->getMessage();
        }
    }
}
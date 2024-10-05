<?php

class processForm
{
    public function signup($conn)
    {
        if(isset($_POST['signup']))
        {
            // Set Variables
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            
            // Initialize errors array
            $errors = array();

            // Input Validation

            // 1. Fullname
            // 1A. Remove "/"s
            $fullname = str_replace("/", "", $fullname);
            // 1B. Remove spaces
            $fullname = str_replace(" ", "", $fullname);
            // 1C. Check if fullname only has alphabetical characters
            if(ctype_alpha($fullname) === false)
            {
                $errors['nameLettersError'] = "Full name can only contain letters";
            }

            


            // Make arrays
            $columns = ['fullname', 'email', 'username'];
            $values = [$fullname, $email, $username];

            // Combine arrays
            $data = array_combine($columns, $values);

            // Insert into database
            $insert  = $conn->insert('users', $data);

            // Check if the insert is valid
            if($insert === true)
            {
                header("Location: signUp.php");
            }
            else
            {
                die($insert);
            }
        }
    }

}
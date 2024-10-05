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

            // 2. Email
            // 2.A Verify Email Format
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $errors['emailFormatError'] = "Invalid email format";
            }
            // 2.B Verify Email Domain
            // Initialize array of valid domains
            $validDomains = ['gmail.com', 'strathmore.edu', 'yahoo.com', 'outlook.com'];
            // Split email into parts
            $emailArray = explode("@", $email);
            // Get email domain
            $domain = $emailArray[1];
            // Check if domain is valid
            if(!in_array($domain, $validDomains))
            {
                $errors['emailDomainError'] = "Invalid email domain";
            }
            // 2C. Check if email is already in the database
            // Get number of matching emails in database
            $emailCheck = $conn->countResults(sprintf("SELECT * FROM users WHERE email = '%s'", $email));
            if($emailCheck > 0)
            {
                $errors['duplicateEmailError'] = "Email already in use";
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
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
<?php

class layouts 
{
    // Header function
    public function header()
    {
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!-- Bootstrap CSS -->
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <link rel="icon"  href="img/report.png">
                <title>Sign Up</title>
            </head>
            <body>
        <?php
    }

    // Footer function
    public function footer()
    {
        ?>
            </body>
            </html>
        <?php
    }
}
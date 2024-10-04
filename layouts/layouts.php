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
                <link href="css/style.css" rel="stylesheet">
                <link rel="icon"  href="img/report.png">
                <title>Sign Up</title>
            </head>
            <body class = "d-flex flex-column min-vh-100">
        <?php
    }

    // Footer function
    public function footer()
    {
        ?>
            <div class="container-fluid text-bg-dark text-center mt-auto p-2">
                <p>Jason Anyango Copyright &copy; <?php echo date('Y') ?></p>
            </div>

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
            </body>
            </html>
        <?php
    }
}
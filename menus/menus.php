<?php

class menus
{
    // Navbar Function
    public function navMenu()
    {
        ?>
            <nav class="navbar navbar-dark navbar-expand-sm text-bg-dark d-flex justify-content-space-between">
                    <div class="container-fluid">
                        <ul class="nav d-flex align-items-center">
                            <li class="nav-item d-flex align-items-center">
                                <img src="img/logo.png" alt="">
                                <a href="" class="nav-link text-light navbar-brand">MyForm</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-light">Form</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link text-light">Users</a>
                            </li>
                        </ul>
                    <div>
                        <input type="search" class="form-control" placeholder="Search...">
                    </div>
                    </div>
                </nav>
        <?php
    }
}
<?php

namespace Layout;
class Header
{
    public static function render_self()
    {


        ?>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" href="?page=meter-reading-dashboard">Home</a>
                        <a class="nav-link" href="?page=meter-reading-company">Company</a>
                        <a class="nav-link" href="?page=meter-reading-meters">Meters</a>
                        <a class="nav-link" href="?page=meter-reading-departments">Departments</a>
                    </div>
                </div>
            </div>
        </nav>

        <div class="p-4">
        <?php
    }
}
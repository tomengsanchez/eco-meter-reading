<?php

namespace Layout;
class Header
{
    public static function render_self()
    {


        ?>

        <!-- Option 1: Include in HTML -->

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <?php
                        $links = [
                            'Home' => [
                                'link' => '?page=meter-reading-dashboard',
                                'icon' => 'bi-bar-chart-line'
                            ],
                            'Company' => [
                                'link' => '?page=meter-reading-company',
                                'icon' => 'bi-building'
                            ],
                            'Meters' => [
                                'link' => '?page=meter-reading-company',
                                'icon' => 'bi-speedometer2',
                            ],
                            'Departments' => [
                                'link' => '?page=meter-reading-company',
                                'icon' => 'bi-people-fill'
                            ],
                        ];

                        foreach ($links as $index => $link) {
                            
                            ?>
                            <a class="nav-link" href="?page=<?= $link['link'] ?>"><i
                                    class="bi <?= $link['icon'] ?>"></i> <?= $index ?></a>
                            <?php
                        }
                        ?>

                        <!-- <a class="nav-link active" href="?page=meter-reading-dashboard">Home</a>
                        <a class="nav-link" href="?page=meter-reading-company">Company</a>
                        <a class="nav-link" href="?page=meter-reading-meters">Meters</a>
                        <a class="nav-link" href="?page=meter-reading-departments">Departments</a> -->
                    </div>
                </div>
            </div>
        </nav>

        <div class="p-4">
            <?php
    }
}
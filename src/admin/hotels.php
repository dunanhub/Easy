<?php

    echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Easy : Admin Panel</title>

            <link rel="stylesheet" href="src/css/main.css">
            <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
            <link href="src/img/Logo/logo-white(illust).png" rel="icon">
        </head>
        <body>
    ';

    require "src/require/header.php";

    echo '
            <div class="main__section">
    ';

    require "src/require/navs.php";

    echo '
                <ul class="nav__container">
                        <li><a href="admin.php" class="nav__link">
                            <i class="ri-home-4-line"></i>
                            Dashboard
                        </a></li>
                        <li><a href="users.php" class="nav__link">
                            <i class="ri-team-fill"></i>
                            Users
                        </a></li>
                        <li><a href="email.php" class="nav__link">
                            <i class="ri-mail-fill"></i>
                            Email
                        </a></li>
                        <li><a href="hotels.php" class="nav__link active">
                            <i class="ri-community-line"></i>
                            Hotels
                        </a></li>
                        <li><a href="places.php" class="nav__link">
                            <i class="ri-map-pin-line"></i>
                            Places
                        </a></li>
                    </ul>
                    <span class="footer__logo__img"></span>
                </div>

                <div class="body__container">
                    
                    <div class="body__title__block" style="position: relative;">
                        <div class="body__title">
                            <i class="ri-community-line"></i>
                            <span class="body__title__text">Hotels</span>
                        </div>
                        <span class="body__title__nav">
                            HOME -- HOTELS LIST
                        </span>

                        <a href="#" class="add__hotel__btn">Add Hotel</a>
                    </div>

                    <div class="body__main">
                        <div class="users__block" style="width: 100%; margin: 0;">
                            <div class="users__title__block">
                                <span class="users__title__text">
                                    ID
                                </span>
                                <span class="users__title__text">
                                    Hotel Names
                                </span>
                                <span class="users__title__text" style="margin: 0 250px 0 20px;">
                                    Address
                                </span>
                                <span class="users__title__text">
                                    Images
                                </span>
                            </div>
                            <div class="users__list__block">
                                <div class="user__container">
                                    <span class="user__text">
                                        1.
                                    </span>
                                    <span class="hotel__text">
                                        Altai Business Hotel
                                    </span>
                                    <span class="hotel__text">
                                        Tole Bi Street 142, 050026 Almaty, Kazakhstan
                                    </span>
                                    <img src="src/img/bg.jpg" alt="" class="hotel__img">

                                    <a href="#" class="edit__btn">PREVIEW</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <script src="src/js/user.js"></script>
        </body>
        </html>
    ';
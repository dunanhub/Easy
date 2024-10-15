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
                        <li><a href="admin.php" class="nav__link active">
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
                        <li><a href="hotels.php" class="nav__link">
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
                    
                    <div class="body__title__block">
                        <div class="body__title">
                            <i class="ri-home-4-line"></i>
                            <span class="body__title__text">Dashboard</span>
                        </div>
                        <span class="body__title__nav">
                            HOME -- DASHBOARD
                        </span>
                    </div>

                    <div class="body__main">
                        <div class="info__email__block">
                            <div class="info__email__title">
                                <span>
                                    <i class="ri-mail-fill"></i>
                                </span>
                                <span>
                                    Email
                                </span>
                                <span>
                                    +999.999
                                </span>
                            </div>
                            <div class="info__email__body">
                                <div class="email__container">
                                    <span class="email__id">
                                        1.
                                    </span>
                                    <span class="email__name">
                                        Ivan Ivanov
                                    </span>
                                    <span class="email__email">
                                        ivan.ivanov@gmail.com
                                    </span>
                                </div>
                                <div class="email__container">
                                    <span class="email__id">
                                        1.
                                    </span>
                                    <span class="email__name">
                                        Ivan Ivanov
                                    </span>
                                    <span class="email__email">
                                        ivan.ivanov@gmail.com
                                    </span>
                                </div>
                                <div class="email__container">
                                    <span class="email__id">
                                        1.
                                    </span>
                                    <span class="email__name">
                                        Ivan Ivanov
                                    </span>
                                    <span class="email__email">
                                        ivan.ivanov@gmail.com
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="all__info__block">
                            <div class="info__container">
                                <div class="left__info__container">
                                    <i class="ri-team-fill"></i>
                                    <span class="info__text">
                                        Users
                                    </span>
                                </div>
                                <div class="right__info__container">
                                    +999.999
                                </div>
                            </div>
                            <div class="info__container">
                                <div class="left__info__container">
                                    <i class="ri-community-line"></i>
                                    <span class="info__text">
                                        Hotels
                                    </span>
                                </div>
                                <div class="right__info__container">
                                    +999
                                </div>
                            </div>
                            <div class="info__container">
                                <div class="left__info__container">
                                    <i class="ri-map-pin-line"></i>
                                    <span class="info__text">
                                        Places
                                    </span>
                                </div>
                                <div class="right__info__container">
                                    +999.999
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
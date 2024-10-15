<?php

echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Easy</title>

        <link rel="stylesheet" href="../css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link href="../img/Logo/logo-white(illust).png" rel="icon">
    
        <style>
            body::-webkit-scrollbar {
                width: 10px;
            }

            body::-webkit-scrollbar-track {
                background: var(--card-text);
            }

            body::-webkit-scrollbar-thumb {
                background: #a74add;
            }

            .main__block span.obl {
                max-width: 50px;
            }
            .obl:hover .obl__block {
                transition: max-height 1s ease, opacity 1s ease;
                max-height: 250px;
                opacity: 1;
                visibility: visible;
                display: flex;
            }

            .obl .obl__block {
                transition: max-height 1s ease, opacity 1s ease, visibility 0.1s ease;
                display: flex;
                justify-content: flex-start;
                align-items: center;
                flex-direction: column;
                position: relative;
                width: 500px;
                max-height: 0;
                overflow-y: auto;
                background: rgba(0, 0, 0, 0.7);
                z-index: 3;
                border: 2px solid var(--contact-btn);
                border-radius: 10px;
                padding: 0 10px;
                opacity: 0;
                visibility: hidden;
            }

            .obl .obl__block::-webkit-scrollbar {
                width: 10px;
            }

            .obl .obl__block::-webkit-scrollbar-track {
                background: var(--card-text);
                margin: 15px 0;
            }

            .obl .obl__block::-webkit-scrollbar-thumb {
                background: #a74add;
            }

            .obl__block a.obl__place__link {
                display: flex;
                justify-content: left;
                align-items: center;
                background: rgba(255, 255, 255, 1);
                height: 80px;
                border: 2px solid var(--contact-btn);
                border-left: none;
                border-radius: 10px;
                margin: 10px 0;
            }

            a.obl__place__link span.obl__img__block {
                width: 110px;
                height: 100%;
                border: 2px solid var(--text);
                border-top-left-radius: 8px;
                border-bottom-left-radius: 8px;
                background-size: cover;
                background-position: center;
            }

            a.obl__place__link .obl__text {
                padding: 5px 10px;
                width: calc(100% - 110px);
                color: var(--contact-btn);
            }

            .obl__text span.obl__title {
                display: block;
                width: 100%;
                font-family: "kurale";
                font-size: 20px;
                font-weight: bold;
            }

            .obl__text span.obl__address {
                display: block;
                width: 100%;
                font-family: "roboto-regular";
                font-size: 14px;
                margin-top: -5px;
                text-decoration: underline;
            }

            .obl__text span.obl__description {
                display: -webkit-box;
                width: 100%;
                overflow: hidden;
                white-space: wrap;
                text-overflow: ellipsis;
                -webkit-line-clamp: 2;
                -webkit-box-orient: vertical;
                color: blue;
                font-family: "roboto-light";
                font-size: 12px;
                margin: 5px 0 0 0;
            }
        </style>
    </head>
    <body style="max-width: 100%; min-height: 100vh;">
';

echo '
    <div class="header__block">
        <div class="logo__block">
            <a href="/">
                <span class="logo__illustr"></span>
                <span class="logo__text"></span>
            </a>
        </div>
        <div class="nav__block">
            <ul class="navs">
                <li><a href="/" class="nav__link">Home</a></li>
                <li><a href="about.php" class="nav__link active">About Us</a></li>
                <li><a href="hotels.php" class="nav__link">Hotels</a></li>
                <li><a href="contact.php" class="nav__link">Contact</a></li>
            </ul>

            <a href="#" class="signin__block">
                <i class="ri-user-fill"></i>
            </a>
        </div>
    </div>
';

echo '
    <div class="about__block">
        <div class="about__container">
            <div class="about__title">
                <span></span>About Us
            </div>
            <div class="about__text">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry is standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
        </div>
    </div>
';

echo '
    </body>
    </html>
';

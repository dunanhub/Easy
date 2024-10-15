<?php 

echo '
    <div class="header__section">
        <div class="left__header__block">
            <div class="nav__icon">
                <a href="/">
                    <i class="ri-arrow-go-back-line"></i>
                </a>
            </div>
            <div class="nav__icon">
                <a href="settings.php">
                    <i class="ri-settings-5-fill"></i>        
                </a>
                <a href="email.php">
                    <i class="ri-mail-fill"></i>
                </a>
                <a class="" href="#" id="toggle-link">
                    <i class="ri-user-fill"></i>
                </a>
            </div>
        </div>
        <div class="right__header__block">
            <div class="search__block">
                <form action="" method="post ">
                    <i class="ri-search-line"></i>
                    <div class="search__text">
                        <input type="text" name="search" placeholder="Search...">
                    </div>
                    <button name="searchBtn" class="search__btn">
                        <i class="ri-arrow-right-line"></i>
                    </button>
                </form>
            </div>
            <div class="logo__block">
                <div class="logo__text"></div>
                <div class="logo__img"></div>
            </div>
        </div>
    </div>
';
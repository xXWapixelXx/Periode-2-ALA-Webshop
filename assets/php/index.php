<?php 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--=============== REMIXICON ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="stylesheet" href="/assets/css/styles2.css">

    <title>Responsive gym website - Bedimcode</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="/assets/img/logo-nav.png" alt="logo"> OG FITNESS
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/index.html" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="/index.html" class="nav__link">Program</a>
                    </li>
                    <li class="nav__item">
                        <a href="/index.html" class="nav__link">Choose Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="/index.html" class="nav__link">Bodybuilders</a>
                    </li>

                    <div class="nav__link">
                        <a href="/index.html" class="button nav__button">Go Back</a>
                    </div>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
        </nav>
    </header>

    <!--==================== LOGIN ====================-->
    <div class="login-container">
        <img src="/assets/img/logo-nav.png" alt="Logo" class="logo">
        <form class="login-form">
            <h2>Login</h2>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Login</button>
            <p class="login-register-text">Don't have an account? <a href="/html/register.html"> Register Here</a></p>
        </form>
    </div>





    <!--==================== FOOTER ====================-->

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Project Emeka || Official Website</title>
    <script src="../frontend/js/_lib/vue.js"></script>
    <script src="../frontend/js/_lib/axios.min.js"></script>

    <!-- Main css style -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <link rel="stylesheet" href="../assets/css/responsiveness/responsive.css">
</head>

<body>
    <header>
        <!-- Logo -->
        <div class="logo_wrapper">
            <img src="../assets/img/Vector.png" alt="Logo" />
        </div>

        <!-- Nav Links & Login BTN -->
        <nav id="login">
            <a href="">Pricing</a>
            <p>Call: 09056279228</p>
            <button @click="loginBgControl">LOGIN</button>

            <!-- Login Form -->
            <?php
              include "../frontend/ui/form/login.php"
            ?>
        </nav>
    </header>
    <main>
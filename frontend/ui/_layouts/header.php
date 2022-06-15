<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Project Emeka || Official Website</title>
    <link rel="stylesheet" href="../assets/css/index/animation.css" />
    <link rel="stylesheet" href="../assets/css/index/style.css" />
    <link rel="stylesheet" href="../assets/css/index/responsive.css" />
    <script src="../frontend/js/_lib/vue.js"></script>
    <script src="../frontend/js/_lib/axios.min.js"></script>
  </head>
  <body>
    <div class="bg_effect"></div>
    <main>
    <header>
      <!-- Logo -->
      <div class="logo_wrapper">
        <img src="../assets/_img/Vector.png" alt="Logo" />
      </div>

      <!-- Nav Links & Login BTN -->
      <nav id="login">
        <a href="">Pricing</a>
        <p>Call: 09056279228</p>
        <button @click="loginBgControl" v-if="loginBg==='hide'">LOGIN</button>
        <img class="menu_icon" src="../assets/_icons/menu_icon.svg" alt="Menu Icon">

        <!-- Login Form -->
        <?php
        include "../frontend/ui/form/login.php"
        ?>
      </nav>
    </header>
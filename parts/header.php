<?php
include_once "lib/functions.php";
?>
<header class="container main-header">
    <div class="logo-holder">
        <a href="index.php"><img src="img/logo.png" height="40 "></a>
    </div>
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu container">
            <?php
            getMenu(1);
            ?>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>
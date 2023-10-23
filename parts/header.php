<?php
include_once "lib/Common.php";
include_once "lib/DB.php";

use PO\Lib\Common;
use PO\Lib\DB;

$common = new Common();
$db = new DB("localhost", 3306, "root", "", "po-2023-2024");
?>
<header class="container main-header">
    <div class="logo-holder">
        <a href="index.php"><img src="img/logo.png" height="40 "></a>
    </div>
    <nav class="main-nav">
        <ul class="main-menu" id="main-menu container">
            <?php
            try {
                $common->getMenu(1);
            } catch (Exception $exception) {
                file_put_contents("error.log", "Menu error", FILE_APPEND);
                echo '<li><a href="index.php">Home</a></li>';
            }
            ?>
        </ul>
        <a class="hamburger" id="hamburger">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>
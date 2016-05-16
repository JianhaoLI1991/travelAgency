<?php
/**
 * Created by PhpStorm.
 * User: JIANHAO_LI
 * Date: 28/04/2016
 * Time: 13:25
 */
session_start();
session_destroy();
header('Location: ./YourBooking.php');
?>
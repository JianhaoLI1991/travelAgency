<?php
    session_start();
    $loop = count($_REQUEST);
    print_r($loop);
    for($i = 0; $i < $loop; $i++){
        $key = $_REQUEST[$i];
        unset($_SESSION['route_no'][$key]);
        unset($_SESSION['from_city'][$key]);
        unset($_SESSION['to_city'][$key]);
        unset($_SESSION['price'][$key]);
        unset($_SESSION['child'][$key]);
        unset($_SESSION['wheelChair'][$key]);
        unset($_SESSION['specialDiet'][$key]);
        unset($_SESSION['total_number_seats'][$key]);
    }
echo '<script language="javascript">';
echo " window.location.href='YourBooking.php';";
echo '</script>';
?>
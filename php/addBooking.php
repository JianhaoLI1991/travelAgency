<?php
$route_no = $_REQUEST['route_no'];
$from_city = $_REQUEST['from_city'];
$to_city = $_REQUEST['to_city'];
$price = $_REQUEST['price'];
$child = $_REQUEST['child'];
$wheelChair = $_REQUEST['wheelChair'];
$specialDiet = $_REQUEST['specialDiet'];
$total_number_seats = 0;
for($i = 1 ; $i <= 5 ; $i++){
    $seat = "seat" . $i;
    if($_REQUEST[$seat]){
        $total_number_seats++;
    }else{
        continue;
    }
}
session_start();
if(!$_SESSION){
    $_SESSION['route_no'][0] = $route_no;
    $_SESSION['from_city'][0] = $from_city;
    $_SESSION['to_city'][0] = $to_city;
    $_SESSION['price'][0] = $price;
    $_SESSION['child'][0] = $child;
    $_SESSION['wheelChair'][0] = $wheelChair;
    $_SESSION['specialDiet'][0] = $specialDiet;
    $_SESSION['total_number_seats'][0] = $total_number_seats;
}else{
    $_SESSION['route_no'][] = $route_no;
    $_SESSION['from_city'][] = $from_city;
    $_SESSION['to_city'][] = $to_city;
    $_SESSION['price'][] = $price;
    $_SESSION['child'][] = $child;
    $_SESSION['wheelChair'][] = $wheelCh1air;
    $_SESSION['specialDiet'][] = $specialDiet;
    $_SESSION['total_number_seats'][] = $total_number_seats;
}
?>
<body>

    <?php
        echo '<script language="javascript">';
        echo " alert('flight booked successfully!');
                window.location.href='YourBooking.php';";
        echo '</script>';
        
    ?>

</body>


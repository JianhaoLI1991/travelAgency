<?php
$route_no = $_REQUEST['route_no'];
$from_city = $_REQUEST['from_city'];
$to_city = $_REQUEST['to_city'];
$price = $_REQUEST['price'];
$child = 0;
$wheelChair = 0;
$specialDiet = 0;
$total_number_seats = 0;
for($i = 1 ; $i <= 5 ; $i++){
    $index = "seat" . $i;
    if($_REQUEST[$index]){
        $total_number_seats++;
    }else{
        continue;
    }
    $index = "child" . $i;
    if($_REQUEST[$index]){
        $child++;
    }else{
        continue;
    }
}
for($i = 1 ; $i <= 5 ; $i++) {
    $index = "wheelchair" . $i;
    if ($_REQUEST[$index]) {
        $wheelChair++;
    } else {
        continue;
    }
}
for($i = 1 ; $i <= 5 ; $i++) {
    $index = "specialDiet" . $i;
    if ($_REQUEST[$index]) {
        $specialDiet++;
    } else {
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
    $_SESSION['wheelChair'][] = $wheelChair;
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


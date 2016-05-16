<h1>Thank you!....Your booking has been completed and a confirmation email has been sent to your email address</h1>
<?php
session_start();
$allFlight;
for($i=0;$i<sizeof($_SESSION['route_no']);$i++){
    $route = $_SESSION['route_no'][$i];
    $from = $_SESSION['from_city'][$i];
    $to = $_SESSION['to_city'][$i];
    $price = $_SESSION['price'][$i];
    $child = $_SESSION['child'][$i];
    $wheelchair = $_SESSION['wheelChair'][$i];
    $specialDiet = $_SESSION['specialDiet'][$i];
    $seats = $_SESSION['total_number_seats'][$i];
    $totalPrice = $Total_Price=$_SESSION['price'][$i]*$_SESSION['total_number_seats'][$i];
    $flight = "\r       " . $route . "    " . $from . "   " . $to . " " . $price . "  " . $child . "  " . $wheelchair . "  " . $specialDiet . "   "
        . $seats . "  " . $totalPrice;
    $allFlight .= $flight;
    
}
$to      = $_SESSION['email'];
$subject = 'Air tickets details';

$message = 
    "Dear " . $_SESSION['givenName'] . " " . $_SESSION['familyName'] . "
         
         Thanks for booking your air ticket from Dragon Travel Agency, your personal info. and details of flights will 
         be presented in the following, if there has anything wrong, please contact our support service without hesitate.
         
         Address:" . $_SESSION['addressFull'] . "
         
    Route_No   From    To  Price   Child   Wheelchair  Special-diet    Seats   Total_price" . $allFlight;

$headers = 'From: 11811609@student.uts.edu.au' . "\r\n" .
    'Reply-To: 11811609@student.uts.edu.au' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $message, $headers);
session_destroy();
?>

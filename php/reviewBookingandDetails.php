<head>
    <link rel="stylesheet" href="../css/table.css">
</head>
    <h1>Review Bookings and Details</h1>
    <table >
<?php
    session_start();
    $purchaseName = $_SESSION['givenName'] . " " . $_SESSION[familyName];
    $address =  $_SESSION['addressLine1'] . " " . $_SESSION['addressLine2']
                . " " . $_SESSION['suburb'] . " " . $_SESSION['state']
                . " " . $_SESSION['postcode'] . " " . $_SESSION['country'];
    $_SESSION['addressFull'] = $address;
    $email = $_SESSION['email'];
    $allPrice = 0;
    print "<tr><th>Customer Name:</th><td colspan='8'>$purchaseName</td></tr>";
    print "<tr><th>Address:</th><td colspan='8'>$address</td></tr>";
    print "<tr><th>E-mail:</th><td colspan='8'>$email</td></tr>";
    print "<tr><th colspan='6'><h3>Flights checking out</h3></th></tr>";?>
        <tr >
            <th style="text-align: left">Route_no</th>
            <th style="text-align: left">From</th>
            <th style="text-align: left">To</th>
            <th style="text-align: left">Price</th>
<!--            <th style="text-align: left">Child</th>-->
<!--            <th style="text-align: left">WheelChair</th>-->
<!--            <th style="text-align: left">SpecialDiet</th>-->
            <th style="text-align: left">Seats</th>
            <th style="text-align: left">Total_Price</th>
        </tr>
<?php    for($i=0;$i<sizeof($_SESSION['route_no']);$i++){
            print "<tr>";
            print "<td>" . $_SESSION['route_no'][$i] . "</td>";
            print "<td>" . $_SESSION['from_city'][$i] ."</td>";
            print "<td>" . $_SESSION['to_city'][$i] . "</td>";
            print "<td>" . $_SESSION['price'][$i] . "</td>";
//            print "<td>" . $_SESSION['child'][$i] . "</td>";
//            print "<td>" . $_SESSION['wheelChair'][$i] . "</td>";
//            print "<td>" . $_SESSION['specialDiet'][$i] . "</td>";
            print "<td>" . $_SESSION['total_number_seats'][$i] . "</td>";
            $Total_Price = $_SESSION['price'][$i] * $_SESSION['total_number_seats'][$i];
            print "<td>" . $Total_Price . "</td>";
            $allPrice += $Total_Price;
            print "</tr>";
        }
        print "<tr><td colspan='5' style='text-align: right'>All:</td><td>$allPrice</td></tr>";

?>
        <tr>
            <td colspan="3">Credit Card details: <span style="color: red">provided</td>
            <td colspan="3" style="text-align: right">
                <form action="confirmPayment.php"><input type="submit" value="Stage4 - Confirm Payment"></form></td>
        </tr>
     </table>
        
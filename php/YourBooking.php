<html>
<head>
    <title>YourBooking</title>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
<h1>YourBooking</h1>
<?php
    session_start();
    if(sizeof($_SESSION)){ ?>
        <table style="width: 100%;"><tr>
            <th>Route_no</th>
            <th>From_city</th>
            <th>To_city</th>
            <th>Price</th>
            <th>Child</th>
            <th>WheelChair</th>
            <th>SpecialDiet</th>
            <th>Seats</th>
            <th>Total_Price</th>
            <th>Remove_Flights</th>
        </tr>
<?php
    foreach($_SESSION['route_no'] as $i => $value){
        if ($_SESSION['route_no'][$i]) {
            print "<tr>";
            print "<td>" . $value . "</td>";
            print "<td>" . $_SESSION['from_city'][$i] . "</td>";
            print "<td>" . $_SESSION['to_city'][$i] . "</td>";
            print "<td>" . $_SESSION['price'][$i] . "</td>";
            print "<td>" . $_SESSION['child'][$i] . "</td>";
            print "<td>" . $_SESSION['wheelChair'][$i] . "</td>";
            print "<td>" . $_SESSION['specialDiet'][$i] . "</td>";
            print "<td>" . $_SESSION['total_number_seats'][$i] . "</td>";
            $Total_Price = $_SESSION['price'][$i] * $_SESSION['total_number_seats'][$i];
            print "<td>" . $Total_Price . "</td>";
            print "<td><input type='checkbox' name='$i' class='removeFlights' id='$i'></td>";
            print "</tr>";
        }
    }
?>
            <tr>
                <td colspan="10">
                    <a href="clearBooking.php" target="Content"><input type="button" class="button" value="Clear all Booked Flights" onclick="return confirm('Are you sure to clear your bookings')"></a>
                    <a href="#" target="Content" onclick="return deleteFlight()" id="removeHref"><input type="button" class="button" value="Delete selected flights"></a>
                    <a href="./SearchFlight.php" target="Content"><input type="button" class="button" value="Book more Flights"></a>
                    <a href="checkout.php" target="Content"><input type="button" class="button" value="Proceed to Checkout"></a>
                </td>
            </tr>
            <?php
            
    }else{
        echo "<tr>You Currently have not booked any Flights.</td></tr>";
    }
    ?>
        </table>
<script type="text/javascript" src="../js/javascript.js">
</script>
</body>
</html>
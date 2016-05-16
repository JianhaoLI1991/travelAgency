<html>
<head>
    <link rel="stylesheet" href="../css/table.css">
</head>
<body>
<?php
$route_no = $_REQUEST['route'];
$from_city = $_REQUEST['from_city'];
$to_city = $_REQUEST['to_city'];
$price = $_REQUEST['price'];
?>
<form action="addBooking.php" method="get" onsubmit="return checkSeat()">
    <table>
        <tr>
            <th style="width: 25%;">from_city:</th>
            <td style="width: 25%;"><input type="text" disabled="disabled" name="from_city" value="<?php echo $from_city;?>"></td>
        </tr>
        <tr>
            <th>to_city:</th>
            <td><input type="text" disabled="disabled" name="to_city" value="<?php echo $to_city;?>"></td>
        </tr>
            <input type="hidden" name="route_no" value="<?php echo $route_no;?>">
            <input type="hidden" name="from_city" value="<?php echo $from_city;?>">
            <input type="hidden" name="to_city" value="<?php echo $to_city;?>">
            <input type="hidden" name="price" value="<?php echo $price;?>">
<!--        <tr>-->
<!--            <th>child:</th>-->
<!--            <td><input type="radio" name="child" value="yes">Yes<input type="radio" name="child" value="no" checked="checked">No</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th>wheelChair:</th>-->
<!--            <td><input type="radio" name="wheelChair" value="yes">Yes<input type="radio" name="wheelChair" value="no" checked="checked">No</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--            <th>specialDiet:</th>-->
<!--            <td><input type="radio" name="specialDiet" value="yes">Yes<input type="radio" name="specialDiet" value="no" checked="checked">No</td>-->
<!--        </tr>-->
        <tr>
            <th rowspan="6">seats:</th>
                <tr><td><input type="checkbox" class="seat" name="seat1" checked="checked" onchange="seatChange(this);">seat1
                    <td id="seat1" >
                        <input type="checkbox">child
                        <input type="checkbox">wheelchair
                        <input type="checkbox">special-diet
                    </td>
                </td></tr>
                <tr><td><input type="checkbox" class="seat" name="seat2" onchange="seatChange(this);" >seat2</td>
                    <td id="seat2" hidden >
                        <input type="checkbox">child
                        <input type="checkbox">wheelchair
                        <input type="checkbox">special-diet
                    </td></tr>
                <tr><td><input type="checkbox" class="seat" name="seat3" onchange="seatChange(this);" >seat3</td>
                    <td id="seat3" hidden >
                        <input type="checkbox">child
                        <input type="checkbox">wheelchair
                        <input type="checkbox">special-diet
                    </td></tr>
                <tr><td><input type="checkbox" class="seat" name="seat4" onchange="seatChange(this);">seat4</td>
                    <td id="seat4" hidden >
                        <input type="checkbox">child
                        <input type="checkbox">wheelchair
                        <input type="checkbox">special-diet
                    </td></tr>
                <tr><td><input type="checkbox" class="seat" name="seat5" onchange="seatChange(this);">seat5</td>
                    <td id="seat5" hidden >
                        <input type="checkbox">child
                        <input type="checkbox">wheelchair
                        <input type="checkbox">special-diet
                    </td></tr>
        </tr>
        <tr>

            <td colspan="2" style="text-align: right"><input type="button" value="Back" onclick="window.history.back();"></a></td>
            <td style="text-align: right"><input type="submit" value="Add to booking"></td>
        </tr>
    </table>
</form>
</body>
<script type="text/javascript" src="../js/javascript.js"></script>
<script type="text/javascript">
    function seatChange(seat){
        if(seat.checked) {
            document.getElementById(seat.getAttribute('name')).removeAttribute('hidden');
        }else{
            document.getElementById(seat.getAttribute('name')).setAttribute('hidden','true');
        }
    }
</script>
</html>

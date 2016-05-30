<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>SearchFlight</title>
<!--    <link rel="stylesheet" href="../css/reset.css">-->
    <link rel="stylesheet" href="../css/table.css">
    <?php require './Mysql.php';?>
</head>
<body onload="change_type(1)">
<table>
    <form action="./SearchResult.php" method="GET" target="Content" onsubmit=" return checkEmpty()">
        <tr>
            <th>Search Type:&nbsp;</th>
            <td>
                <input type="radio" name="type" value="1" id="routeSearch" checked="checked" onclick="change_type(1)">Route_no&nbsp;
                <input type="radio" name="type" value="2" onclick="change_type(2)">From_city&nbsp;
                <input type="radio" name="type" value="3" onclick="change_type(3)">To_city&nbsp;
                <input type="radio" name="type" value="4" id="searchBoth" onclick="change_type(4)">From & To _City&nbsp;
            </td>
        </tr>
        <tr id="routeNo">
            <th>Route_no:</th>
            <td><input type="text" name="route" id="route"></td>
        </tr>
        <tr id="fromCity">
            <th>From_city:</th>
            <td><?php $result = getCity(1,"from_city");
                $num_rows = mysql_num_rows($result);
                if( $num_rows > 0 ){
                    print "<select name =\"from_city\" id = \"from_city\">";
                    while ($a_row = mysql_fetch_row($result)) {
                        foreach ($a_row as $city) {
                            print("<option value = \"" . $city ."\">" . $city . "</option>");
                        }
                    }
                }
                mysql_close($link);
                ?>
            </td>
        </tr >
        <tr id="toCity">
            <th>To_City:</th>
            <td><?php $result = getCity(1,"to_city");
                $num_rows = mysql_num_rows($result);
                if( $num_rows > 0 ){
                    print "<select name =\"to_city\" id = \"to_city\">";
                    while ($a_row = mysql_fetch_row($result)) {
                        foreach ($a_row as $city) {
                            print("<option value = \"" . $city ."\">" . $city . "</option>");
                        }
                    }
                }
                mysql_close($link);
                ?>
                ?></td>
        </tr>
        <tr>
            <td ><input type="reset" class="button" value="Reset" onclick="change_type(1)"></td>
            <td ><input type="submit" class="button" value="Submit"></td>
        </tr>
    </form>
</table>
    <script type="text/javascript" src="../js/javascript.js"></script>
</body>
</html>


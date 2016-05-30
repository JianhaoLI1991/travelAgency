<html>
<head>
    <link rel="stylesheet" href="../css/table.css">
    <?php require './Mysql.php';?>
</head>
<body>
<div id="selectFlight">
<?php   //printout the search result
$result = searchResult();
echo "<h1>Search Result</h1>";
if($result){?>
    <form action="#" method="post" id="myForm" onsubmit="return submitSelectedFlight()" target="Content">
<?php
    print "<table><tr><th>Route_no</th><th>From_city</th><th>To_city</th><th>Price</th><th>Selection</th></tr>";
    $r = count($result);
    $i = 1;
    foreach ($result as $row){
        print "<tr name='flghts'>";
        print "<td>".$row["route_no"]."</td>";
        print "<td>".$row["from_city"]."</td>";
        print "<td>".$row["to_city"]."</td>";
        print "<td>".$row["price"]."</td>";
        print "<td><input type='checkbox' class='checkFlight' id='$i' onclick='checkOne(this.id,$r)'></td>";
        $i++;
    } ?>
     <tr>
         
     <td colspan="2"><a href="SearchFlight.php"><input type="button" class="button" value="New Search" ></a></td>
     <td></td>
     <td colspan="2"><input type="submit" class="button" id="booking" value="making booking for selected flight"></td>
 </tr>

    <?php
}else{
    print "No flight is found by your search.<br>";
}
?>
</table></form></div>
    <script type="text/javascript" src="../js/javascript.js"></script>
</body>
</html>
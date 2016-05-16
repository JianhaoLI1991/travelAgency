<?php
/**
 * Created by PhpStorm.
 * User: JIANHAO_LI
 * Date: 20/04/2016
 * Time: 10:57
 */
    function getCity($fun, $city){
        $link = mysql_connect("rerun.it.uts.edu.au","potiro","pcXZb(kL");
        if (!$link)
            die("Could not connect to Server");
        mysql_select_db("poti",$link);
        if($fun == 1){
            $query_string = "select distinct " .$city. " from flights";
        }else{

        }
        return mysql_query($query_string);
}
    function searchResult(){

        $type = $_REQUEST["type"];
        $query = "Select * from flights where ";
        switch ($type){  //Selection of Searching type
            case 1:      //Search using route_no
                $arg1 = $_REQUEST["route"];
                $query = $query . "route_no = $arg1";
                break;
            case 2:     //Search using from_city
                $arg1 = $_REQUEST["from_city"];
                $query = $query . "from_city = \"$arg1\"";
                break;
            case 3:     //Search using to_city
                $arg2 = $_REQUEST["to_city"];
                $query = $query . "to_city = \"$arg2\"";
                break;
            case 4:     //Search using from_city and to_city
                $arg1 = $_REQUEST["from_city"];
                $arg2 = $_REQUEST["to_city"];
                $query = $query . "from_city = \"$arg1\" and to_city = \"$arg2\"";
                break;
            default:
                break;
        }
                $link = mysql_connect("rerun.it.uts.edu.au","potiro","pcXZb(kL");
                if (!$link)
                    die("Could not connect to Server");
                mysql_select_db("poti",$link);
                $result = mysql_query($query);
                $num_rows = mysql_num_rows($result);
                $num = 0;
                $data[][] = null;
                if($num_rows > 0 ){
                    while( $row = mysql_fetch_assoc($result)) {
                        $data[$num]["route_no"] = $row["route_no"];
                        $data[$num]["from_city"] = $row["from_city"];
                        $data[$num]["to_city"] = $row["to_city"];
                        $data[$num]["price"] = $row["price"];
                        $num++;
                    }
                    mysql_close($link);
                    return $data;
                }else {
                    mysql_close($link);
                    return false;
                }
    }
?>


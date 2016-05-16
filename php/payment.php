<?php
    $compulsory_field = array("givenName","familyName","addressLine1","suburb","email","country",);
    session_start();
    for($i = 0; $i < sizeof($compulsory_field); $i++){
        $arg = $compulsory_field[$i];
        $_SESSION[$arg] = $_REQUEST[$arg];
    }
    $optional_field = array("addressLine2","state","postcode","mobilePhone","businessPhone","workPhone");
    for($i = 0; $i < sizeof($optional_field); $i++) {
        $arg = $optional_field[$i];
        if ($_REQUEST[$arg]){
            $_SESSION[$arg] = $_REQUEST[$arg];
        } else {
            continue;
        }
    }                               //add personal info to session
    $personalInfo = array_merge($compulsory_field , $optional_field);
    print "<h1>Personal Details</h1>";
    print "<table>";
    for($i = 0 ; $i < sizeof($personalInfo) ; $i++){
        $title = $personalInfo[$i];
        if(isset($_SESSION[$title])){
            print "<tr><th style='text-align: left'>$title: </th><td>$_SESSION[$title]</td></tr>";
        }
        else{
            continue;
        }
    }
    print "</table>";               //print out personal details
?>
<a name="stage2"></a>
<form action="reviewBookingandDetails.php" method="post" target="Content" onsubmit="return paymentCheck()">
 <table id="stage2">
    <tr>
        <td colspan="2"><h1>Stage 2 of 4 - Payment Details</h1></td>
    </tr>

     <tr><td>Credit Card Type:<span style="color: red">*</span></td>
         <td><select  id="creditCardType">
                 <option value="Visa" selected="selected">Visa</option>
                 <option value="Diners">Diners</option>
                 <option value="Mastercard">Mastercard</option>
                 <option value="Amex">Amex</option>
             </select> </td></tr>

     <tr><td>Credit Card Number:<span style="color: red">*</span> </td>
         <td><input type="text" name="creditCardNumber" id="creditCardNumber"></td></tr>

     <tr><td>Account Name:<span style="color: red">*</span> </td>
         <td><input type="text" name="accountName" id="accountName"></td></tr>

     <tr><td>Expiry Month:<span style="color: red">*</span> </td>
         <td><input type="text" name="expiryMonth" id="expiryMonth"></td></tr>

     <tr><td>Expiry Year:<span style="color: red">*</span> </td>
         <td><input type="text" name="expiryYear" id="expiryYear"></td></tr>

     <tr><td>Security Code:<span style="color: red">*</span> </td>
         <td><input type="text" name="securityCode" id="securityCode"></td></tr>
     <tr><td><h3 style="color: red;">Note:All of these fields are compulsory</h3></td></tr>
     
     <tr><td></td><td><input type="submit" value="Stage3 - Review Booking and Details"></td></tr>
</table>
</form>
<script type="text/javascript" src="../js/javascript.js">
</script>

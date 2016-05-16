<html>
<head></head>
<body>
<form action="payment.php#stage2" method="post" target="Content" onsubmit="return stage1()">
<table id="stage1">
    <tr>
        <td colspan="2"><h1>Stage 1 of 4 - Personal Details</h1></td>
    </tr>
    <tr><td>Given Name:<span style="color: red">*</span> </td>
        <td><input type="text" name="givenName" id="givenName"></td></tr>

    <tr><td>Family Name:<span style="color: red">*</span> </td>
        <td><input type="text" name="familyName" id="familyName"></td></tr>

    <tr><td>Address Line 1:<span style="color: red">*</span> </td>
        <td><input type="text" name="addressLine1" id="addressLine1"></td></tr>

    <tr><td>Address Line 2:<span style="color: red">(option)</span></td>
        <td><input type="text" name="addressLine2" id="addressLine2"></td></tr>

    <tr><td>Suburb:<span style="color: red">*</span> </td>
        <td><input type="text" name="suburb" id="suburb"></td></tr>

    <tr><td>State:<span style="color: red" id="stateStar">*</span> </td>
        <td><input type="text" name="state" id="state"></td></tr>

    <tr><td>Postcode:<span style="color: red" id="postcodeStar">*</span> </td>
        <td><input type="text" name="postcode" id="postcode"></td></tr>

    <tr><td>Country:<span style="color: red">*</span></td>
        <td><select name="country" id="country" onblur="countrySelected()">
                <option value="Australia" selected="selected">Australia</option>
                <option value="others">others</option>
            </select> </td></tr>
    
    <tr><td>Email:<span style="color: red">*</span> </td>
        <td><input type="email" name="email" id="email"></td></tr>

    <tr><td>Mobile Phone:<span style="color: red">(option)</span></td>
        <td><input type="text" name="mobilePhone" id="mobilePhone"></td></tr>

    <tr><td>Business Phone:<span style="color: red">(option)</span></td>
        <td><input type="text" name="businessPhone" id="businessPhone"></td></tr>

    <tr><td>work Phone:<span style="color: red">(option)</span></td>
        <td><input type="text" name="workPhone" id="workPhone"></td></tr>

    <tr>
        <td></td>
        <td><input type="submit" value="Stage2" onclick="changeStage(1)"></td>
    </tr>
</table>
</form>
<!--Stage 1-->
<script type="text/javascript" src="../js/javascript.js">
</script>
</body>
</html>
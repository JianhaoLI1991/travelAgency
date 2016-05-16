<form action="contactUs.php" method="post" onsubmit="return checkContactUs()" id="myForm">
    <table >
        <tr><td><b>Subject:</b><span style="color: red;">*</span></td>
            <td><input type="text" name="subject" id="subject"></td></tr>
        <tr><td><b>Email:</b><span style="color: red;">*</span></td>
            <td><input type="text" name="email" id="email"></td></tr>
        <tr><td><b>First Name:</b></td>
            <td><input type="text" name="firstName"></td></tr>
        <tr><td><b>Last Name:</b></td>
            <td><input type="text" name="lastName"></td></tr>
        <tr><td><b>Content:</b><span style="color: red;">*</span></td>
            <td><textarea name="content" style="width: 600px; height: 200px;" id="content"></textarea></td></tr>
        <tr><td colspan="2" style="text-align: right"><input type="submit" value="Submit"></td></tr>
    </table>
</form>
<?php
    if(isset($_REQUEST['email'])){
        echo '<script language="javascript">';
        echo " document.getElementById(\"myForm\").setAttribute('hidden','hidden');";
        echo '</script>';
        echo "<h3>Thanks for contacting us, we will response as soon as possible.</h3>";
        $to = "11811609@student.uts.edu.au";
        $subject = $_REQUEST['subject'];
        $message= "
            from:" . $_REQUEST['firstName'] . "  " . $_REQUEST['lastName'] . "
            " . $_REQUEST['content'];
        $headers = 'From:' . $_REQUEST['email'] . "\r\n" .
            'Reply-To:' . $_REQUEST['email'] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        mail($to, $subject, $message, $headers);
    }
?>
<script type="text/javascript">
    function checkContactUs() {
        var compulsory = new Array('subject','email','content');
        for(var i = 0; i < compulsory.length; i++){
            if(document.getElementById(compulsory[i]).value == ""){
                alert("one or more compulsory field is blank");
                return false
                }
            }
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!re.test(document.getElementById("email").value)) {
            alert("Email address is invalid");
            return false;
        }
        return true;
    }
</script> 
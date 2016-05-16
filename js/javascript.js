/**
 * Created by JIANHAO_LI on 22/04/2016.
 */
function submitSelectedFlight(){
    var myDIV = (document.getElementsByName("flghts"));
    for(var i = 0; i < myDIV.length ; i++ ){
        if(myDIV[i].getElementsByClassName("checkFlight")[0].checked){
            var route = myDIV[i].getElementsByTagName("td")[0].innerHTML;
            var from_city =myDIV[i].getElementsByTagName("td")[1].innerHTML;
            var to_city = myDIV[i].getElementsByTagName("td")[2].innerHTML;
            var price = myDIV[i].getElementsByTagName("td")[3].innerHTML;
            var action = "Booking.php?route=" + route + "&from_city=" + from_city + "&to_city=" + to_city + "&price=" + price;
            document.getElementById("myForm").setAttribute("action",action);
            return true;
        }else{
            continue;
        }
    }
    alert("You need to select at least one flight");
    return false;
}
function change_type(num){
    switch(num){
        case 1:
            document.getElementById("routeNo").removeAttribute("hidden");

            document.getElementById("fromCity").setAttribute("hidden","true");
            document.getElementById("toCity").setAttribute("hidden","true");
            break;
        case 2:
            document.getElementById("routeNo").setAttribute("hidden","true");
            document.getElementById("fromCity").removeAttribute("hidden");
            document.getElementById("toCity").setAttribute("hidden","true");
            break;
        case 3:
            document.getElementById("routeNo").setAttribute("hidden","true");
            document.getElementById("fromCity").setAttribute("hidden","true");
            document.getElementById("toCity").removeAttribute("hidden");
            break;
        case 4:
            document.getElementById("routeNo").setAttribute("hidden","true");
            document.getElementById("fromCity").removeAttribute("hidden");
            document.getElementById("toCity").removeAttribute("hidden");
            break;

    }
}
function checkOne(id,row) {
    for (var i = 1;i <= row; i++)
    {
        document.getElementById(i).checked = false;
    }
    document.getElementById(id).checked = true;
}

function checkSeat() {
    var seat = document.getElementsByClassName("seat");
    for(var i = 0 ; i < 5 ; i++){
        if(seat[i].checked){
            return true;
        }
    }
    alert("You have to select at least one seat");
    return false;
}
function countrySelected() {
    var select = document.getElementById('country');
    var selectedCountry = select.options[select.selectedIndex].value;
    var state = document.getElementById("stateStar");
    var postcode = document.getElementById("postcodeStar");
    if(selectedCountry == "Australia"){
        state.innerHTML = "*";
        postcode.innerHTML = "*";
    }else{
        state.innerHTML = "(option)";
        postcode.innerHTML = "(option)";
    }
}
function stage1() {
    var compulsory_field = new Array("givenName", "familyName", "addressLine1", "suburb", "email");
    var country = document.getElementById("country").value;
    if (country == "Australia") {
        compulsory_field.push("state", "postcode");
    }
    for (var i = 0; i < compulsory_field.length; i++) {
        var value = document.getElementById(compulsory_field[i]).value;
        if (value == "") {
            alert("one or more compulsory field is blank");
            return false;
        }
    }
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(document.getElementById("email").value)) {
        alert("Email address is invalid");
        return false;
    }
    var number_field = new Array("postcode", "mobilePhone", "businessPhone", "workPhone");
    for (var i = 0; i < number_field.length; i++) {
        var number = document.getElementById(number_field[i]).value;
        if (!isNaN(number || number == "")) {
            continue;
        } else {
            alert(number_field[i] + " should be a number");
            return false;
        }
    }
}
function paymentCheck() {
    var compulsory_field = new Array("creditCardNumber","accountName","expiryMonth","expiryYear","securityCode");
    for (var i = 0; i < compulsory_field.length; i++) {
        var value = document.getElementById(compulsory_field[i]).value;
        if (value == "") {
            alert("one or more compulsory field is blank");
            return false;
        }
    }
    var cardNumber = document.getElementById("creditCardNumber").value;
    if(isNaN(cardNumber) || cardNumber.length != 12 ){
        alert("Credit card number should be number with a length of 12");
        return false;
    }
    var accountName = document.getElementById("accountName").value;
    if(accountName.match(/\d+/g)){
        alert("Invalid account name");
        return false;
    }
    var date = new Date();
    var month = document.getElementById("expiryMonth").value;
    var year = document.getElementById(("expiryYear")).value;
    if(isNaN(month) || month < 1 || month > 12){
        alert("expiry month invalid");
        return false;
    }
    if(isNaN(year) || year.length != 4){
        alert("expiry year invalid");
        return false;
    }else if (year < date.getFullYear()){
        alert("expiry date should be in the future");
        return false;
    }else if(year == date.getFullYear()) {
        if (month < date.getMonth() + 1) {
            alert("expiry date should be in the future");
            return false;
        } else {
        }
    }else{}
    var securityCode = document.getElementById("securityCode").value;
    if(isNaN(securityCode) || securityCode.length != 3){
        alert("invalid security code");
        return false;
    }
}
function deleteFlight() {
    var booked = document.getElementsByClassName('removeFlights');
    var href = "removeFlights.php?";
    var key = 0;
    for(var i =0 ; i < booked.length ; i++){
        if(booked[i].checked){
            href = href.concat(key++,"=",booked[i].getAttribute('id'),"&");
        }
    }
    if(href.indexOf("0") > -1){
        if(confirm("Are you sure to delete selected flights")) {
            document.getElementById("removeHref").setAttribute("href", href);
            return true;
        }
    }else{
        alert("you should select at least one flight");
        return false;
    }
}
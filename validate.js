function validate(){

    var msg = "";

    //mobile number 1 validate
    var mobile_no1 = document.forms["form1"]["mob1"].value;
    phoneNoValidate(mobile_no1, "Mobile No 1");

    //mobile number 2 validate
    var mobile_no2 = document.forms["form1"]["mob2"].value;
    if(mobile_no2.length>0) phoneNoValidate(mobile_no2, "Mobile No 2");
        
    //land number validate
    var land_no = document.forms["form1"]["land"].value;
    if(land_no.length>0) phoneNoValidate(land_no , "Land No");

    // common function to validate phone numbers
    function phoneNoValidate(field_value, field_name){
        
        // to get first character
        var firstChar = field_value.charAt(0);

        if(firstChar !== "0" && firstChar !== "+")
            msg += field_name+" is invalid - Begin with '0' OR '+' <br>";
        else if(firstChar =="0" && field_value.length !=10)
            msg += field_name+" is Invalid - 10 Numbers required <br>";
        else if(firstChar =="+" && field_value.length !=12)
            msg += field_name+" is Invalid - 11 Numbers required <br>";
    }

    //email validate
    var email = document.forms["form1"]["email"].value;

    var at_symbol = email.indexOf("@");
    var last_dot = email.lastIndexOf(".");

    if(last_dot<at_symbol) msg += "Email is Invalid <br>";

    // username validate
    var user_name = document.forms["form1"]["uname"].value;
    if(user_name.trim()=="") msg += "Name is Invalid <br>";

    // display messages
    if(msg !== ""){
        document.getElementById('msg').style.display="block";
        document.getElementById('msg').innerHTML=msg;
        return false;
    }

}
function validateForm() {
    var fname = document.getElementById("FullName").value;
    var email = document.getElementById("Email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var pass= document.getElementById("Password").value;
    var dob= document.getElementById("DOB").value;
    
    var g1 = document.getElementById("male").checked;
    var g2 = document.getElementById("female").checked;
    var g3 = document.getElementById("other").checked;
    var address= document.getElementById("Address").value;
    var exp= document.getElementById("wexp").value;

    if (fname == "" ) {
     document.getElementById("errorfname").innerHTML="Please fill out first name";
      return false;
    }
    else if(fname.length<3)
    {
      document.getElementById("errorfname").innerHTML="Please enter name of atleast length 3";
      return false;
    }
    if(!res)
    {
      document.getElementById("erroremail").innerHTML="Email format is not correct";
      return false; 
    }

    if (pass == "") 
    {
      document.getElementById("errorpass").innerHTML="Please fill out password";
      return false;
    }
    else if(pass.length < 5)
    {
      document.getElementById("errorpass").innerHTML="Password must be atleast 5 character long";
      return false;
    }

    if(dob == "")
    {
        document.getElementById("errordob").innerHTML="Please enter date of birth correctly";
        return false;
    }

    if(g1==false && g2==false && g3==false)
    {
      document.getElementById("errorgender").innerHTML="Please select atleast one gender option";
      return false;
    }
    

    if(address == "")
    {
        document.getElementById("erroraddress").innerHTML="Please enter address correctly";
        return false;
    }

    if(document.form.wexp.selectedIndex=="")
    {
    alert ( "Please select atleast one work experience option!");
    return false;
    }
}
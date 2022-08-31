
function validateForm() {
    var fullname = document.getElementById("fullname").value;
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var password= document.getElementById("password").value;
    var nid = document.getElementById("nid").value;
    var date= document.getElementById("date").value;
    var edu = document.getElementById("edu").value;
    var exp = document.getElementById("exp").value;
    var m = document.getElementById("m").checked;
    var f = document.getElementById("f").checked;
    
    
    if (fullname == "" ) 
    {
     document.getElementById("errorfullname").innerHTML="Please fill out full name";
      return false;
    }
    if(!res)
    {
      document.getElementById("erroremail").innerHTML="Email format is not correct";
      return false; 
    }

    if(nid == "")
    {
        document.getElementById("errornid").innerHTML="Please enter a nid number";
        return false;
    }
    else if(nid.length<9)
    {
        document.getElementById("errornid").innerHTML="Please enter a valid nid number";
        return false;
    }

    
    if(date == "")
    {
        document.getElementById("errordate").innerHTML="Please enter date of birth correctly";
        return false;
    }


    if (password == "") 
    {
      document.getElementById("errorpassword").innerHTML="Please fill out password";
      return false;
    }
    else if(password.length < 6)
    {
      document.getElementById("errorpassword").innerHTML="Password must be atleast 6 character long";
      return false;
    }

    
    
    if (edu == "")
    {
        document.getElementById("erroredu").innerHTML="Please enter education";
        return false;
    }
    if (exp == "") 
    {
        document.getElementById("errorexp").innerHTML="Please enter experience";
        return false;
    }
    if(m==false && f==false )
    {
      document.getElementById("errorgender").innerHTML="Please select atleast one gender option";
      return false;
    }


}
function validateSignUpForm() {
   var fullname = document.getElementById("fullname").value;
   var email = document.getElementById("email").value;
   var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
   var res = patt.test(email);
   var password= document.getElementById("password").value;
   var pn = document.getElementById("pn").value;
  
  
   var g1 = document.getElementById("g1").checked;
   var g2 = document.getElementById("g2").checked;
   var g3 = document.getElementById("g3").checked;

    var date = document.getElementById("date").value;

    var l1 = document.getElementById("l1").checked;
    var l2= document.getElementById("l2").checked;
    var l3 = document.getElementById("l3").checked;

  if (fullname == "" ) {
   document.getElementById("errorfullname").innerHTML="Please fill out full name";
    return false;
  }
 if(!res)
  {
    document.getElementById("erroremail").innerHTML="Email format is not correct";
    return false; 
  }

   if (password == "") 
   {
     document.getElementById("errorpassword").innerHTML="Please fill out password";
    return false;
  }
   else if(password.length < 5)
   {
   document.getElementById("errorpassword").innerHTML="Password must be atleast 5 character long";
     return false;
   }
   if (pn == "") 
   {
     document.getElementById("errorpn").innerHTML="Please fill out NID number";
     return false;
   }


 if(g1==false && g2==false && g3==false)
   {
     document.getElementById("errorgender").innerHTML="Please select atleast one gender option";
     return false;
   }

    if(date==false)
 {
       document.getElementById("errordate").innerHTML="Please select date of birth correctly";
       return false;
  }

     if (l1==false && l2==false && l3==false) 
     {
       document.getElementById("errorcheckbox").innerHTML=" Please select atleast one language option";
      return false;
}


}

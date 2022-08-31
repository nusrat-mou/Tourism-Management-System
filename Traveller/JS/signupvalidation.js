function validateForm() {
    var fname = document.getElementById("fname").value;
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var pass= document.getElementById("pass").value;
    var passport = document.getElementById("passport").value;
    var phone = document.getElementById("phone").value;
    var dob= document.getElementById("dob").value;
    var file = document.getElementById("filetoupload").value;
    
    var g1 = document.getElementById("male").checked;
    var g2 = document.getElementById("female").checked;
    var g3 = document.getElementById("other").checked;



    if (fname == "" ) {
     document.getElementById("errorfname").innerHTML="Please fill out first name";
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

    if(passport == "")
    {
        document.getElementById("errorpassport").innerHTML="Please enter a passport number";
        return false;
    }
    else if(passport.length<9)
    {
        document.getElementById("errorpassport").innerHTML="Please enter a valid passport number";
        return false;
    }

    if(phone == "")
    {
        document.getElementById("errorphone").innerHTML="Please enter a phone number";
        return false;
    }
    else if(phone.length<11)
    {
        document.getElementById("errorphone").innerHTML="Please enter a phone number";
        return false
    }

    if(dob == "")
    {
        document.getElementById("errordob").innerHTML="Please enter date of birth correctly";
        return false;
    }
    else
    {
      var dob1 = new Date(dob);  
      var month_diff = Date.now() - dob1.getTime();
    
        //convert the calculated difference in date format  
      var age_dt = new Date(month_diff);   
        
      //extract year from date      
      var year = age_dt.getUTCFullYear();  

      //now calculate the age of the user  
      var age = Math.abs(year - 1970);  
      if(age<17)
      {
        document.getElementById("errordob").innerHTML="You must be atleast 17 years old";
        return false;
      }
    }

    
    if (file == "") {
        document.getElementById("errorfile").innerHTML="Please upload a file";
        return false;
      }

    if(g1==false && g2==false && g3==false)
    {
      document.getElementById("errorgender").innerHTML="Please select atleast one gender option";
      return false;
    }
}
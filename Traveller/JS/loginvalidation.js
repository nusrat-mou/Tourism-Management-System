function validateForm() {

    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var pass= document.getElementById("pass").value;

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
}
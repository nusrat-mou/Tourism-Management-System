function validateForm() {

    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    var password= document.getElementById("password").value;

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
}
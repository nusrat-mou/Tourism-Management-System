function validateForm() {
    var gid3= document.getElementById("gid3").value;

    if (gid3 == "" ) {
     document.getElementById("errorgid3").innerHTML="Please enter guide id";
     return false;
    }

}
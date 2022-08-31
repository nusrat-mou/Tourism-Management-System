function validateForm() {
    var gid1= document.getElementById("gid1").value;

    if (gid1 == "" ) {
     document.getElementById("errorgid1").innerHTML="Please enter guide id";
     return false;
    }

}
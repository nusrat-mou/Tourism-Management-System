function validateForm() {
    var gid2= document.getElementById("gid2").value;

    if (gid2 == "" ) {
     document.getElementById("errorgid2").innerHTML="Please enter guide id";
     return false;
    }

}
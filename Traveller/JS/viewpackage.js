function validateForm() {
    var pid1= document.getElementById("pid1").value;

    if (pid1 == "" ) {
     document.getElementById("errorpid1").innerHTML="Please enter package id";
     return false;
    }

}
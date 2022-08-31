function validateForm() {
    var pid3= document.getElementById("pid3").value;

    if (pid3 == "" ) {
     document.getElementById("errorpid3").innerHTML="Please enter package id";
     return false;
    }

}
function validateForm() {
    var pid2= document.getElementById("pid2").value;

    if (pid2 == "" ) {
     document.getElementById("errorpid2").innerHTML="Please enter package id";
     return false;
    }

}
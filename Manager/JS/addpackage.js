function validateForm() {
    var pname = document.getElementById("pname").value;
    var pdesc = document.getElementById("pdesc").value;
    var cost= document.getElementById("cost").value;
    var sdate = document.getElementById("sdate").value;
    var edate = document.getElementById("edate").value;
    
    if (pname == "" ) {
     document.getElementById("errorpname").innerHTML="Please fill out package name";
      return false;
    }
    

    if (pdesc == "") 
    {
      document.getElementById("errorpdesc").innerHTML="Please fill out description";
      return false;
    }

    
    if(sdate == "")
    {
        document.getElementById("errorsdate").innerHTML="Please enter a package starting date ";
        return false;
    }
    
    if(edate == "")
    {
        document.getElementById("erroredate").innerHTML="Please enter package ending date";
        return false;
    }

    if(cost == "")
    {
        document.getElementById("errorcost").innerHTML="Please enter cost";
        return false;
    }
    
}
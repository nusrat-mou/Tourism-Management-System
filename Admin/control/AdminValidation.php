<?php 

$validatefname=$validateEmail=$validatePassword=$validateGender=$validateAddress=$validateDOB=$validateExp="";

if (isset($_POST['register'])) 
{

    if (empty($_POST['FullName']))
    {
        $validatefname="Enter a valid Full Name";
    }
    
    
    if(empty($_POST['Email']))
    {
        $validateEmail="Enter a valid Email";
    } 
    
    if(empty($_POST['Password']))
    {
        $validatePassword="Enter a valid Password";
    }  
    
    if(empty($_POST['gender']))
    {
        $validateGender="Enter a valid Gender";
    }
    
    if(empty($_POST['Address']))
    {
        $validateAddress="Enter a valid Address";
    } 
    
    if(empty($_POST['DOB']))
    {
        $validateDOB="Enter a valid DOB";
    }
    
    if(empty($_POST["wexp"])) 
    {
        $validateExp ="Choose atleast one option";
    }
}

if (isset($_POST['update'])) 
{

    if (empty($_POST['FullName']))
    {
        $validatefname="Enter a valid Full Name";
    }
    
    
    if(empty($_POST['Email']))
    {
        $validateEmail="Enter a valid Email";
    } 
    
    if(empty($_POST['Password']))
    {
        $validatePassword="Enter a valid Password";
    }  
    
    if(empty($_POST['gender']))
    {
        $validateGender="Enter a valid Gender";
    }
    
    if(empty($_POST['Address']))
    {
        $validateAddress="Enter a valid Address";
    } 
    
    if(empty($_POST['DOB']))
    {
        $validateDOB="Enter a valid DOB";
    }
    
    if(empty($_POST["wexp"])) 
    {
        $validateExp ="Choose atleast one option";
    }
}





?>
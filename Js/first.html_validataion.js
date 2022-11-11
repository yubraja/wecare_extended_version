function Loginvalidation(){
    var dname="";   
    var dpass="";   
    var pname="";   
    var ppass="";   

    var dname=Document.getElementById("dname").value; 
    var dpass=Document.getElementById("dpass").value; 
    var pname=Document.getElementById("pname").value; 
    var ppass=Document.getElementById("ppass").value; 

    // now for doctor only 
    if(dname=="" && dpass=="")
    {
        alert("Both Field can't be empty !!");  
        return false;   
    }
    else if(dname=="" || dname==null)
    {
        alert("Oops Username Can't be empty");   
        return false;    
    }
    else if(dpass=="" || dname==null)
    {
        alert("Oops password Can't be empty");  
        return false;     
    }

    // now if both field are not emtpy then i have to do some validation

    if(dname!="" && dpass!="")
    {
        var validname = "^[[A-Z]|[a-z]][[A-Z]|[a-z]|\\d|[_]]{8,29}$";
        var validpass="/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/"; 

        if(dname.matches(validname) && dpass.matches(validpass))
            {
               location.href="../Medi-Report.php"
            }
            else
            {
                alert("Username and password does not meet the criteria "); 
                if(dname.length<8 || dpass.length<8)
                {
                    alert("Username and Password length must be greater than 8 character"); 
                }
            }
    }

}
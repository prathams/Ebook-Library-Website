function validateEmptyF(fld)
{
var error;
    if (fld.value.length == 0) {
      
     error="First Name is required.\n";
	 document.getElementById("firstname").innerHTML = error;
    } 
	else {
		error = " ";
      
		document.getElementById("firstname").innerHTML = error;
    }
	
}

function validateEmptyU(fld)
{
var error;
    if (fld.value.length == 0) {
     
     error="User name is required .\n";
	 document.getElementById("username").innerHTML = error;
    }
	else {
		error = " ";
   
		document.getElementById("username").innerHTML = error;
    }
	
}

function validateEmail(fld) 
{
    var error;
   // var tfld = trim(fld.value);                        // value of field with whitespace trimmed off
    var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
    var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
    
    if (fld.value == "") {
       
        error = "Please enter a valid email address.\n";
		document.getElementById("eaddress").innerHTML = error;
    }else if (fld.value.match(illegalChars)) {
 
        error = "The email address contains illegal characters.\n";
		document.getElementById("eaddress").innerHTML = error;
    } else {
        error = " ";
		fld.style.background = 'White';
		document.getElementById("eaddress").innerHTML = error;
    }
    
}

function validatePassword(fld) {
    var error = "";
    var illegalChars = /[\W_]/; // allow only letters and numbers 
 
    if (fld.value == "") {
       
        error = "Please enter password.\n";
		document.getElementById("epwd").innerHTML = error;
    } else if ((fld.value.length < 7) || (fld.value.length > 15)) {
		
        error = "Please enter strong password. \n";
		document.getElementById("epwd").innerHTML = error;
    } else if (illegalChars.test(fld.value)) {
		
        error = "Password contains illegal characters.\n";
		document.getElementById("epwd").innerHTML = error;
    } else if (!((fld.value.search(/(a-z)+/)) && (fld.value.search(/(0-9)+/)))) {
		
        error = "Password must contain at least one numeral.\n";
		document.getElementById("epwd").innerHTML = error;
    } else {
		error = " ";
        
		document.getElementById("epwd").innerHTML = error;
    }
  
} 

function validatePhone(fld) {
    var error = "";
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');     
   
   if (fld.value == "") {
        error = "Please enter a phone number.\n";
  
		document.getElementById("phone").innerHTML = error;
    } else if (isNaN(parseInt(stripped))) {
        error = "Phone number contains illegal characters.\n";
     
		document.getElementById("phone").innerHTML = error;
    } else if (!(stripped.length == 10)) {
        error = " Make sure you included an area code.\n";

		document.getElementById("phone").innerHTML = error;
    } 
	else{
		error = " ";
      
		document.getElementById("phone").innerHTML = error;
	}
 
}
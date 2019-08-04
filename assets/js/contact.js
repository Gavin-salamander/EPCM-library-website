function pagetest(){ 
    /* Name */ 
    var name= document.getElementById("name").value; 
    var filt =  /^[A-Za-z\'-\s\.\,]+$/; 
        if (!name.match(filt))
        { 
            document.getElementById("name").style.borderColor="red"; 
            document.getElementById("nameerror").innerHTML='First Name should not contain any number or special characters'; 
            document.getElementById("nameerror").style.color='red'; 
        } 
        else{ 
            document.getElementById("name").style.borderColor="green"; 
            document.getElementById("nameerror").innerHTML='valid name'; 
            document.getElementById("nameerror").style.color='green'; 
        } 

    /* Number */ 
    var number=document.getElementById("mobile").value; 
        if(number.length!=10) { 
            document.getElementById("mobile").style.borderColor="red"; 
            document.getElementById("moberror").innerHTML="Number should be exactly 10 digits and not less than or more than that"; 
            document.getElementById("moberror").style.color='red'; 
        } 
        else { 
            document.getElementById("mobile").style.borderColor="green"; 
            document.getElementById("moberror").innerHTML="valid number"; 
            document.getElementById("moberror").style.color='green'; 
        }

    /* Email */ 
    var email = document.getElementById("email").value; 
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,3})+$/; 
        if (!filter.test(email)) { 
            document.getElementById("email").style.borderColor="red"; 
            document.getElementById("emailerror").innerHTML="Please provide a valid email address"; 
            document.getElementById("emailerror").style.color="red";
        } 
         else{ 
            document.getElementById("email").style.borderColor="green"; 
            document.getElementById("emailerror").innerHTML='valid email address'; 
            document.getElementById("emailerror").style.color='green'; 
        }
        
    /* Country */ 
    var country= document.getElementById("country").value; 
    var filt =  /^[a-zA-Z]+$/; 
        if (!country.match(filt)) { 
            document.getElementById("country").style.borderColor="red"; 
            document.getElementById("countryerror").innerHTML='country should not contain any number or special characters'; 
            document.getElementById("countryerror").style.color='red'; 
        } 
        else{ 
            document.getElementById("country").style.borderColor="green"; 
            document.getElementById("countryerror").innerHTML='Valid Country name'; 
            document.getElementById("countryerror").style.color='green'; 
        } 
            
    /* City */ 
    var city= document.getElementById("city").value; 
    var filt =  /^[a-zA-Z]+$/; 
            if (!city.match(filt)) { 
                document.getElementById("city").style.borderColor="red"; 
                document.getElementById("cityerror").innerHTML='city should not contain any number or special characters'; 
                document.getElementById("cityerror").style.color='red'; 
            } 
            else{ 
                document.getElementById("city").style.borderColor="green"; 
                document.getElementById("cityerror").innerHTML='Valid city name'; 
                document.getElementById("cityerror").style.color='green'; 
            }
                
    /* Total */ 
        if( (name!="") && (name!="") && (email!="")  && (number!="") && (country!="") && (city!="") && (name.match(filt)) && (number.length==10) && (filter.test(email)) && (country.match(filt)) && (city.match(filt)) ) 
        {  
            document.getElementById("submit_btn").value="Please Wait ..."; 
            setTimeout("submitForm()", 2000);  
        } 
    }

        function submitForm() { 
            document.getElementById("form_id").submit(); 
        }


function showError(element,message) {
        document.getElementById(element).textContent = message;  
        document.getElementById(element).style.display = "block"; 
      }
       

function validateRegister(){
        event.preventDefault();
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
        const nameRegex =  /^[a-zA-Z- ]+$/;
        const phoneRegex = /^\+(?:[0-9] ?){6,14}[0-9]$/;

        var fname=document.getElementById("fname");
        var lname=document.getElementById("lname");
        var email=document.getElementById("email");
        var password=document.getElementById("password");
        var confirmPassword=document.getElementById("confirmPassword");


         if (!nameRegex.test(fname)) {
                showError("fname-error-msg","Invalid first name. Please use letters, spaces, and hyphens.");
                return false;
        } 
        else if (!nameRegex.test(lname)) {
                showError("lname-error-msg","Invalid last name. Please use letters, spaces, and hyphens.");
                return false;
        }

}



        





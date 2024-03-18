

function showError(element,message) {
        document.getElementById(element).textContent = message;  
        document.getElementById(element).style.display = "block"; 
      }
       

function validateRegister(event){
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


         if (!nameRegex.test(fname.textContent)) {
                showError("fname-error-msg","Invalid first name. Please use letters, spaces, and hyphens.");
                return false;
        } 
        if (!nameRegex.test(lname.textContent)) {
                showError("lname-error-msg","Invalid last name. Please use letters, spaces, and hyphens.");
                return false;
        }

        if (!emailRegex.test(email.textContent)) {
                showError("lname-error-msg","Invalid Email.");
                return false;
        }
        if (!password.test(password.textContent)) {
                showError("lname-error-msg","Weak Password");
                return false;
        }
        if (password.textContent != confirmPassword.textContent) {
                showError("lname-error-msg","Passwords do not match");
                return false;
        }

}



        





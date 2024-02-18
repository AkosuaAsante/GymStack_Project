
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
        const nameRegex = /^[a-zA-Z]+$/;
        const phoneRegex = /^\+(?:[0-9] ?){6,14}[0-9]$/;

        function validateRegister(){
            event.preventDefault();
            var firstName = document.getElementById("fname");
            var lastName = document.getElementById("lname");
            var emailaddress = document.getElementById("email");
            var password = document.getElementById("password");
            var confirmPassword = document.getElementById("confirmPassword");
            var phone = document.getElementById("phoneNumber");
        
            if (!nameRegex.test(firstName)) {
                alert("Invalid first name");
                document.getElementById('fname-error-msg').style.display = 'block';
                return false;
            } 
            
            if (!nameRegex.test(lastName)) {
                document.getElementById('lname-error-msg').style.display = 'block';
                return false;
            }

            if (!phoneRegex.test(phone)) {
                document.getElementById('phone-error-msg').style.display = 'block';
                return false;
            }

            if (!emailRegex.test(emailaddress)) {
                document.getElementById('email-error-msg').style.display = 'block';
                return false;
            }
            
            if (!passwordRegex.test(password)) {
                document.getElementById('password-error-msg').style.display = 'block';
                return false;
            }

             if (password !== confirmPassword) {
                document.getElementById('confirmpassword-error-msg').style.display = 'block';
                return false;
            }

            
                alert("Form submitted successfully!");
                window.location.href = "../login/Register1.php";
                return false;
            

        }
           

        






        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
        const nameRegex = /^[a-zA-Z]+$/;
        const phoneRegex = /^\+(?:[0-9] ?){6,14}[0-9]$/;

        function validateRegister(){
            var firstName = document.getElementById("fname").value;
            var lastName = document.getElementById("lname").value;
            var emailaddress = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;
            var phone = document.getElementById("phoneNumber").value;
        
            if (!nameRegex.test(firstName)) {
                alert("Invalid first name");
                document.getElementById('fname-error-msg').style.display = 'block';
                return false;
            } 
            
            else if (!nameRegex.test(lastName)) {
                document.getElementById('lname-error-msg').style.display = 'block';
                return false;
            }

            else if (!phoneRegex.test(phone)) {
                document.getElementById('phone-error-msg').style.display = 'block';
                return false;
            }

            else if (!emailRegex.test(emailaddress)) {
                document.getElementById('email-error-msg').style.display = 'block';
                return false;
            }
            
            else if (!passwordRegex.test(password)) {
                document.getElementById('password-error-msg').style.display = 'block';
                return false;
            }

            else if (password !== confirmPassword) {
                document.getElementById('confirmpassword-error-msg').style.display = 'block';
                return false;
            }

            else {
                alert("Form submitted successfully!");
                window.location.href = "login/Register1.php";
            }

        }
           

        





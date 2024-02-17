<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register- Task Management System</title>
    <link rel="stylesheet" href="Register.css" />
  </head>
  <body>
    <div class="login-container">
      <div class="logo-info">
        <img class="logo" src="../images/logo_transparent.png" alt="">
        <span class="logo-text">GYM STACK</span>
      </div>
      
      <h2 id="welcome-back">Register Here</h2>
      <form method="POST" onsubmit="return validateLogin()" id="login-form" name="login-form" >
        <div>
           <input type="text" id="fname" name="fname" placeholder="John" required />
           <input type="text" id="lname" name="lname" placeholder="Doe" required />
          <input type="text" id="email" name="email" placeholder="email address" required />
          <input type="password" id="password" name="password" placeholder="password" required />
          <input type="password" id="confirmpassword" name="confirmpassword" placeholder="confirm password" required />
          <input type="text" class="form-control" id="gymname" placeholder="Planet Fitness">
          <input type="text" class="form-control" id="Address" placeholder="123 St Monica Street">
                  <select id="role" class="form-select">
                    <option>Role</option>
                    <option>Manager</option>
                    <option>Customer</option>
                  </select>

          <p class ="error-msg" id="error-msg"> Incorrect email or password. Try again</p>
        </div>
        <button type="submit" name="sign-in" id="sign-in" onclick="validate()">Sign Up</button>
        
      </form>
        
      </div>
      
    </div>
    </div>
    <script src="../js/loginpage.js"></script>
  </body>


</html>
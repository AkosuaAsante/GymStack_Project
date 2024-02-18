<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register- Task Management System</title>
    <link rel="stylesheet" href="../css/Register.css" />
  </head>
  <body>
    <div class="login-container">
      <div class="logo-info">
        <img class="logo" src="../images/logo_transparent.png" alt="">
        <span class="logo-text">GYM STACK</span>
      </div>
      <h2 id="welcome-back">Register Here</h2>
      <form class="form-background" method="POST" onsubmit="return validateRegister()" id="register-form" name="register-form" >
          <input type="text" id="fname" name="fname" placeholder="Enter First Name" required />
          <p class ="error-msg" id="fname-error-msg"> Incorrect Name . Try again</p>
          <input type="text" id="lname" name="lname" placeholder="Enter Last Name" required />
          <p class ="error-msg" id="lname-error-msg"> Incorrect Name . Try again</p>
          <input type="email" id="email" name="email" placeholder="Email Address" required />
          <p class ="error-msg" id="email-error-msg"> Incorrect Email Address . Try again</p>
          <input type="password" id="password" name="password" placeholder="Password" required />
          <p class ="error-msg" id="password-error-msg"> Incorrect Password . Try again</p>
          <input type="password" id="confirmpassword" name="confirmPassword" placeholder="Confirm Password" required />
          <p class ="error-msg" id="confirmpassword-error-msg"> Password does not match. Try again</p>
          <input type="text" class="form-control" id="gymname" placeholder="Gym Name">
          <input type="number" class="form-control" id="phoneNumber" placeholder="Phone Number">
                  <select id="role" class="form-select">
                    <option value=0>Role</option>
                    <option value=1>Manager</option>
                    <option value=2>Customer</option>
                  </select>
            <button type="submit" name="sign-in" id="sign-in">Sign Up</button>
      </form>
    </div>
    <script defer src="../js/signup.js"></script>
  </body>


</html>
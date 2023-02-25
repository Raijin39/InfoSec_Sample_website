<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/LoginFormstyle.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="home.html" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>


          <form action="" class="sign-up-form" method="post">
            <h2 class="title">Sign up</h2>
            <i class="fas fa-user"></i>
            <input type="text" placeholder="First Name" name="signup_first_name" value="<?php echo $_POST["signup_first_name"]; ?>" required />
          </div>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Last Name" name="signup_last_name" value="<?php echo $_POST["signup_last_name"]; ?>" required />
          </div>

          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="tel" placeholder="Phone Number" name="signup_phone_number" value="<?php echo $_POST["signup_phone_number"]; ?>" required />
          </div>

          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email Address" name="signup_email" value="<?php echo $_POST["signup_email"]; ?>" required />
          </div>

          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="signup_password" value="<?php echo $_POST["signup_password"]; ?>" required />
          </div>
          
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="signup_cpassword" value="<?php echo $_POST["signup_cpassword"]; ?>" required />
          </div>

          
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Building you GREAT DESIGN that Sell, Join thousand of designers with Us!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="css/images/mobile_encryp.svg" class="image" alt="" />
        </div>

        <div class="panel right-panel">
            <div class="content">
              <h3>One of us ?</h3>
              <p>
                WELCOME BACK! To keep connected with us, please login with your personal account.
              </p>
              <button class="btn transparent" id="sign-in-btn">
                Sign in
              </button>
            </div>
            <img src="css/images/office.svg" class="image" alt="" />
          </div>
        </div>
      </div>
  
      </div>
    </div>

    <script src="js/app.js"></script>
    <?php if($_GET["sign-up-btn"] == 1): ?>
    <script>
      sign_up_btn.click();
      document.getElementById("toRemove").remove();
    </script>
    <?php endif ?>
  </body>
</html> 
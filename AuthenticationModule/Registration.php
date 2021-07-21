<!DOCTYPE html>
<html lang="en">

  <head>
    <meta name="google-signin-client_id" content="407063748479-dbmn68b26gcbeln4hevvcr97qnrg6hrd.apps.googleusercontent.com">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="RegistrationStyling.css" />
    <title>Sign in & Sign up Form</title>

  </head>

  <body>

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <!--Sign In Form-->
          <form action="process_login.php" method="POST" class="sign-in-form">
            <h2 class="title">Sign in</h2>


            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input  type="email" name="email" id="email" placeholder="Email" required />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
            </div>
            <input type="submit" name="submit " value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div id="my-signin2"></div>
            <script>
              function onSuccess(googleUser) {
                console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
              }
              function onFailure(error) {
                console.log(error);
              }
              function renderButton() {
                gapi.signin2.render('my-signin2', {
                  'scope': 'profile email',
                  'width': 240,
                  'height': 50,
                  'longtitle': true,
                  'theme': 'dark',
                  'onsuccess': onSuccess,
                  'onfailure': onFailure
                });
              }
            </script>
<a href="http://localhost/SemesterProject/AuthenticationModule/PasswordReset.php">Forgot Your Password?</a><br>
            <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
          </form>

          <!--Sign Up Form-->
          <form action="process_register.php" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username"autocomplete="off" id="username" placeholder="Username" required />
            </div>
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input  type="email" name="email" autocomplete="off" id="email" placeholder="Email" required />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password"  onkeyup="checkPassword()" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />

            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Password Confirm" onkeyup="checkPassword()" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
            </div>
            <span id="message"></span>
            <div class="clearfix"> .</div>

            <div class="input-field">
              <i class="fas fa-map-marker-alt"></i>
              <input type="text" name="location" id="location "autocomplete="off" placeholder="Location" required/>
            </div>

            <input type="submit" name="submit" class="btn" value="Create"  />

          
          </form>

        </div>
      </div>




      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
                Want to receive repair from the comfort of your home? Then sign
                up here ?
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="undraw_bug_fixing_oc7a.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
                Already a member? Login to your account to start
                receiving services.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="undraw_working_remotely_jh40.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="slider.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

  </body>
  <script>
    function checkPassword() {
        if(document.getElementById('password').value ==
                document.getElementById('passwordConfirm').value) {
            document.getElementById('message').innerHTML="";

        } else {

            document.getElementById("message").innerHTML="passwords need to match!";
        }
    }
    </script>
  
</html>
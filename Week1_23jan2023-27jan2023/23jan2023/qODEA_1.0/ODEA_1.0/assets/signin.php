<?php
    $title = "| Sign In";
    require_once('common_files/header.php');
?>
    <section class="sec1signinContainer1">
        <article class="sec1signinArt1">
            <h1>qODEA </h1><br>
            <form action="validate_signin.php" method="POST">
            

    <title>Sign In</title>
  </head>
  <body>
    <div class="signin-container">
      <form action="validate_signin.php" method="POST" id="form_signin">
        <h1>Sign In</h1><br>
    <!-- <label for="email">Email:</label><br> -->
    <input type="text" placeholder="Email" name="email" id="emailid" minlength="7" maxlength="80" required>

    <!-- <label for="psw">Password:</label><br> -->
    <input type="password" placeholder="Enter Password" name="psw" minlength="7" maxlength="08" required>
        
        <br><br>
         
        <!-- <input type="submit" value="Login" name="login"> -->
        <button class="login-button">Login</button><br><br>

                <!-- <p>Don't have an account? <a href="signup.php">Sign up</a> | <a href="forgotpassword.php">Forgot Password?</a></p> -->
                <div class="signup-container">
                <p>Don't have an account? <a href="signup.php" class="signup-link">Sign up</a></p><p>|</p>
                 
                 <p><a href="forgotpassword.php" class="forgot-password-link">Forgot Password</a></p>
                    
                </div>
               
      </form>
    </div>
    <figure>
        <a href="https://www.qualesce.com/" target="_blank"> <img src="assets/img/qualesce footer.svg" alt=""></a>
    </figure>
  </body>
</html>

               
            </form>
        </article>
    </section>
<?php
    require_once('common_files/footer.php');
?>
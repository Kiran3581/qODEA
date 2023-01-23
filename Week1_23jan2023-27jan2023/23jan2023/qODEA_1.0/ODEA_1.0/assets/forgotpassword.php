<?php
$title = "| Password Reset";
require_once('common_files/header.php');
?>
<section class="sec1signupContainer1">
    <article class="sec1signupArt1">
        <h1>qODEA Reset Password</h1><br>
        <form action="validate_password.php" method="POST">
        <!-- <label for="email"><b>Email:</b></label><br> -->
    <input type="text" placeholder="Email" name="email" id="emailid" minlength="7" maxlength="80" required>

    <!-- <label for="psw"><b> New Password:</b></label><br> -->
    <input type="password" placeholder="New Password" name="psw" minlength="7" maxlength="08" required>
    <!-- <label for="psw"><b> Confirm Password:</b></label><br> -->
    <input type="password" placeholder="Confirm Password" name="psw" minlength="7" maxlength="08" required>

            <button class="reset-password-button">Reset Password</button>
            <br><br>


            <p>Remeber Login ? <a href="signin.php">Login</a></p>
        </form>
    </article>
</section>
<?php
require_once('common_files/footer.php');
?>
<?php
    $title = "| Sign Up";
    require_once('common_files/header.php');
?>
    <section class="sec1signupContainer1">
        <article class="sec1signupArt1">
            <h1>qODEA Signup</h1>
            <form action="validate_signup.php" method="POST">
                <input type="text" name="firstname" placeholder="First Name" required>
                <input type="text" name="lastname" placeholder="Last Name" required>
                <input type="text" name="company" placeholder="Company" required>
                <?php
                    require_once('includes/countrylist.php');
                ?>
                <input type="text" name="role" placeholder="Job Role" required>
                <?php
                    require_once('includes/industrylist.php');
                ?>
                <input type="email" name="email" placeholder="e-mail" required>
                <input type="text" name="phno" placeholder="Phone Number" required>
                <input type="password" name="password" placeholder="password" required>
                <input type="submit" value="Sign up" name="signup">
            </form>
        </article>
    </section>
<?php
    require_once('common_files/footer.php');
?>
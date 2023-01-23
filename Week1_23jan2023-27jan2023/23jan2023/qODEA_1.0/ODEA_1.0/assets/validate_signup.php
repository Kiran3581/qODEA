<?php

    include 'dbconn.php';
    include 'includes/functions.php';

    $firstname = execute($_POST['firstname']);
    $lastname = execute($_POST['lastname']);
    $fullName = $firstname." ".$lastname;
    $companyname = execute($_POST['company']);
    $country = $_POST['country_type'];
    $jobrole = execute($_POST['role']);
    $industry = $_POST['industry_type'];
    $emailid = execute($_POST['email']);
    $phone = execute($_POST['phno']);
    $newPwd = $_POST['new_password'];
    $confirmPwd = $_POST['confirm_password'];

//  comparing password if it fails to show alert msg
    if(strcmp($newPwd, $confirmPwd) == 0){
// encrypting the email 
        $encryptemail = base64_encode( strtolower($emailid));
// extracting the country and country code
        $country = explode("(",$country);
        $countryname = trim($country[0]);
        $newmobno = explode(")",$country[1]);
// encrypting the phoneno with country code
        $encryptphno = base64_encode($newmobno[0].$phone);
        echo   $encryptphno;
// encrypting the password using argon2I method
        $hashpass = password_hash($newPwd, PASSWORD_ARGON2I);
        $newpwd = substr($hashpass,29);
// Query is used to check email and phonenumber exsists in DB
        $sqlQuery1 = "SELECT * FROM qodea_signup WHERE email='$encryptemail' OR phoneNumber='$encryptphno' ;";
        $result = mysqli_query($conn,$sqlQuery1);
        $rowcount1 = mysqli_num_rows($result);
        if($rowcount1 == 0) {   
            $sqlQuery2 = "INSERT INTO qodea_signup (fullName, company, country, jobRole, industry, email, 
            phoneNumber, password) VALUES ('$fullName','$companyname','$countryname','$jobrole',
            '$industry','$encryptemail', '$encryptphno','$newpwd');";
            $result1 = mysqli_query($conn,$sqlQuery2);
            echo "<script>";
            echo "alert('Thanks for signing up!');";
            echo "location.href='signin.php';";
            echo "</script>";
        } else {
            echo "<script>";
            echo "alert('Email-Id or Phone number already exsists!');";
            echo "location.href='signup.php';";
            echo "</script>";
        }
    }
    else{
        echo "<script>";
        echo "alert('Password do not match!');";
        echo "location.href='signup.php';";
        echo "</script>";
    }
?>
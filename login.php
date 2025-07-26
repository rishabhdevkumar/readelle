<?php
include("config.php");
// echo $_SESSION['user_id'];

if(isset($_POST['save']))
{
	$email = mysqli_real_escape_string($connect,$_POST['email']);
	$pass  = md5(mysqli_real_escape_string($connect,$_POST['password']));

	$select_rec = "SELECT * FROM user WHERE email='".$email."' And password='".$pass."'";
	$run = mysqli_query($connect,$select_rec);
	$fetch = mysqli_fetch_array($run);
	$num_rows = mysqli_num_rows($run);
	if($num_rows>0)
	{
		echo'<script>alert("Login Successfully")</script>';
		// $_SESSION['user_id']=$fetch['id'];
		// header('Location:dashboard.php');
	}
	else
	{
		echo'<script>alert("Something Went Wrong")</script>';
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/w3.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body style="margin: 0; background: #f0efefcc;">
    <div class="w3-top w3-black w3-container">
        <div class="w3-row w3-content" style="max-width:1200px; line-height:48px;">
            <div class="w3-col s6 m3 l2 w3-left-align">
                <header class="w3-xlarge w3-center">
                    <img src="./images/20250725_112042[1].png" alt="image" width="70px" height="70px">
                    <h3 style="display: inline; font-family: AnandaBlackPersonalUseRegular-rg9Rx; color: #9bb6f0;">
                        <b>Readelle</b>
                    </h3>
                </header>
            </div>
            <div class="w3-col s6 w3-right-align w3-hide-medium w3-hide-large">
                <button class="w3-black" style="border: none;" onclick="toggleMobileMenu()">☰</button>
            </div>
            <div class="w3-col m9 l10 w3-hide-small w3-padding">
                <div class="w3-center w3-container w3-margin-right">
                    <a href="home.php" class="w3-margin-right w3-hover-text-aqua"
                        style="text-decoration: none;">Home
                    </a>
                    <a href="book.php" class="w3-margin-right w3-hover-text-aqua"
                        style="text-decoration: none;">Book
                    </a>
                    <a href="about.php" class="w3-margin-right w3-hover-text-aqua"
                        style="text-decoration: none;">About
                    </a>
                    <a href="contact.php" class="w3-margin-right w3-hover-text-aqua"
                        style="text-decoration: none;">Contact
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="mobileNav" class="w3-bar-block w3-black w3-hide w3-hide-medium w3-hide-large w3-margin-top">
        <a href="home.php" class="w3-bar-item w3-button" style="padding-top: 60px;">Home</a>
        <a href="book.php" class="w3-bar-item w3-button">Book</a>
        <a href="about.php" class="w3-bar-item w3-button">About</a>
        <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
    </div>
    <div class="w3-display-container" style="height: 100vh;">
        <div class="w3-display-middle" style="width: 100%;">
            <div style="max-width: 370px; margin: 0 auto;">
                <div class="w3-card w3-white w3-padding-large w3-round-large"
                    style="box-shadow: 0px 2px 5px 5px #c4c3c3;">
                    <header class="w3-container w3-center">
                        <h3><b>Welcome Back!</b></h3>
                        <p>Sign in to your Readelle Account</p>
                    </header>
                    <form class="w3-container" method="POST" action="" enctype="multipart/form-data">
                        <div class="w3-section">
                            <label>Email Address</label>
                            <input class="w3-input w3-border w3-round" type="email" id="email" name="email" 
                            placeholder="Enter your Email" required>
                        </div>
                        <div class="w3-section">
                            <label>Password</label>
                            <input class="w3-input w3-border w3-round" type="Password" name="password" id="password" 
                            placeholder="Enter your Password" required>
                            <div class="w3-right w3-small w3-margin-top">
                                <a href="forgot-password.html" class="w3-text-blue"
                                    style="text-decoration: none;">Forgot Password?
                                </a>
                            </div>
                        </div>
                        <button class="w3-button w3-cobalt w3-round-large w3-margin-top" type="submit" value="submit" name="save" id="save"style="width: 100%;"><b>Login</b></button>
                        <div class="w3-center w3-margin-top">
                            <p>Don't have an account?
                                <a href="signup.php" style="text-decoration: none;" class="w3-text-blue">
                                    <b>Sign Up</b>
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="./js/signup.js"></script>
</body>

</html>
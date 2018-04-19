<?php
session_start();
//if( isset($_SESSION['user_id']) ){
//	header("Location: /");
//}
//require 'config/database/database.php';
//$message = '';
//if(!empty($_POST['email']) && !empty($_POST['password'])):

	// Enter the new user in the database
/*	$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':email', $_POST['email']);
	$stmt->bindParam(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));
	if( $stmt->execute() ):
		$message = 'Successfully created new user';
	else:
		$message = 'Sorry there must have been an issue creating your account';
	endif;
endif;*/
?>
<?php
require "includes/header.php";
?>
<script src="js/country.js"></script>
<!--
    # Form enviroment issue
-->
<div id="form-body--env">

    <div id="path-session-panel">
        <ul>
            <li class="path"> register </li>
            <li class="path"> validate </li>
            <li class="path"> complete </li>
        </ul>
    </div>
    <!--
        #
    -->
    <div class="more-about">
        <div class="important-about">
            Due to security statements the registers are limited to one <b> personal user ID </b> per account.
        </div>
        <div class="reg-cap">
            Registering on Prestige high tech finance is the first step toward creating an account. Once your email is confirmed, you'll need to complete your profile and verify your identity before using future features.
        </div>
    </div>

    <div id="parallel-panel" class="clearfix">

        <!-- # -->
        <div id="form-panel">
            <div class="form-fields">
                <form class="" action="signup_validation.php" method="post">
                    <div class="input-group">
                        <label for="">Country</label>
                        <select class="" name="" role="select">
                            <option value="">Select country...</option>
                            <script>
                                for ( var i = 0; i < country_list.length; i++ ) {
                                    document.write('<option value="">' + country_list[i] + '</option>');
                                }
                            </script>
                        </select>
                    </div>
                    <div class="input-group">
                        <label for="">Email</label>
                        <input type="email" name="" value="" autofocus>
                    </div>
                    <div class="input-group">
                        <label for="">Password</label>
                        <input type="password" name="" value="">
                    </div>
                    <div class="input-group">
                        <label for="">Repeat password</label>
                        <input type="password" name="" value="">
                    </div>
                    <div class="input-group">
                        <div class="g-recaptcha" data-sitekey="6LdaNFIUAAAAAPZaDMvnEPvmdPE-d_hubN1VY4RE"></div>
                    </div>
                    <div class="about">
                        <div>
                            <input type="checkbox" name="accept" id="accept" value="">
                            <label for="accept">I have read and accept</label>
                            the
                            <a href="#"> Terms of use </a>
                            and
                            <a href="#"> Privacy policy. </a>
                        </div>
                    </div>
                    <div class="input-action set-right">
                        <button> Register </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- # -->
        <div id="aside-info">
            <p class="about-signin">
                The email address you provide will become your Prestige ID and will be used for all future communications, including account recovery.<b> Protect your email account like you would your Prestige account. </b> Sign-ups using throwaway email addresses will be rejected.
            </p>
            <p class="about-signin">
                Your password must be at least 8 characters long, but it is HIGHLY recommended that you choose a random, alphanumeric password of at least 32 characters.
            </p>
            <p class="about-signin">
                NEVER use a password for an external account that you use ANYWHERE else, especially for the email address you sign up with.
            </p>
        </div>
    </div>
</div>
<?php
require "includes/footer.php";
?>

<?php
require "includes/header.php";
?>

<!--
    # Form enviroment issue
-->
<div id="form-body--env">

    <div id="path-session-panel">
        <h1 style="font-weight: 300;"> Sign in to your account. </h1>
    </div>
    <!--
        #
    -->
    <div id="parallel-panel" class="clearfix">

        <!-- # -->
        <div id="form-panel">
            <div class="form-fields">
                <h1> Sign in </h1>
                <form class="" action="validation.php" method="post">
                    <div class="input-group">
                        <label for="">Email</label>
                        <input type="email" name="" value="">
                    </div>
                    <div class="input-group">
                        <label for="">Password</label>
                        <input type="password" name="" value="">
                    </div>
                    <div class="about">
                        <a href="reset_password.php"> Forgot your password? </a>
                    </div>
                    <div class="input-action set-right">
                        <button> Sign in </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- # -->
        <div id="aside-info">
            <h1 style="font-weight: 300; line-height: 1;"> You dont have an account yet? </h1>
            <p> Create one to start your smart investments with the presftige hight tech finance contracts. </p>
            <div class="input-action">
                <button onclick="red_signup();" name="red_signup"> create an account </button>
            </div>
        </div>
    </div>
</div>
<?php

if ( isset($_POST['red_signup']) ):
    header("Location: signup.php");
endif;
require "includes/footer.php";
?>

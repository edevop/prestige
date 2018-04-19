<?php
require "includes/header.php";
?>

<!--
    # Form enviroment issue
-->
<div id="form-body--env">

    <div id="path-session-panel">
        <h1 style="font-weight: 300;"> Change password. </h1>
    </div>
    <!--
        #
    -->
    <div id="parallel-panel" class="clearfix">

        <!-- # -->
        <div id="form-panel">
            <div class="form-fields">
                <form class="" action="validation.php" method="post">
                    <div class="input-group">
                        <label for="">Old password</label>
                        <input type="password" name="" value="">
                    </div>
                    <div class="input-group">
                        <label for="">New password</label>
                        <input type="password" name="" value="">
                    </div>
                    <div class="input-group">
                        <label for="">Re-enter new password</label>
                        <input type="password" name="" value="">
                    </div>
                    <div class="input-action set-right">
                        <button> change password </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- # -->
        <div id="aside-info">
            <h1 style="font-weight: 300; line-height: 1;"> Password recovery </h1>
            <p> Check your email and change your password. </p>
        </div>

    </div>
</div>
<?php

if ( isset($_POST['red_signup']) ):
    header("Location: signup.php");
endif;
require "includes/footer.php";
?>

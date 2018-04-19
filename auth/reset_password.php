<?php
require "includes/header.php";
?>

<!--
    # Form enviroment issue
-->
<div id="form-body--env">

    <div id="path-session-panel">
        <h1 style="font-weight: 300;"> Password reset. </h1>
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
                        <label for="">Email</label>
                        <input type="email" name="" value="">
                    </div>
                    <div class="input-action set-right">
                        <button> submit </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- # -->
        <div id="aside-info">
            <h1 style="font-weight: 300; line-height: 1;"> Forget your password? </h1>
            <p> You can use this form to reset it. </p>
        </div>

    </div>
</div>
<?php

if ( isset($_POST['red_signup']) ):
    header("Location: signup.php");
endif;
require "includes/footer.php";
?>

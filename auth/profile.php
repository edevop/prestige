<?php
require "includes/header.php";
?>

<!--
    # Form enviroment issue
-->
<div id="form-body--env">

    <div id="path-session-panel" style="background: transparent;">
        <h1 style="font-weight: 300;"> Welcome to Prestige high tech finance. </h1>
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
                        <label for="">First name</label>
                        <input type="text" name="" value="">
                    </div>
                    <div class="input-group">
                        <label for="">Last names</label>
                        <input type="text" name="" value="">
                    </div>
                    <div class="input-group">
                        <label for="">Street address</label>
                        <input type="text" name="" value="">
                    </div>
                    <div class="input-group">
                        <label for="">City</label>
                        <input type="text" name="" value="">
                    </div>
                    <div class="input-group">
                        <label for="">Postal code</label>
                        <input type="text" name="" value="">
                    </div>
                    <div class="input-group">
                        <label for="">Phone number</label>
                        <input type="text" name="" value="">
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
                        <button> Begin verification </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- # -->
        <div id="aside-info">
            <div class="preview--info-account">
                <h1 class="email-address">example@domain.com</h1>
                <h2 class="procedense" style="font-size: 16px;"> Country: Dominican Republic </h2>
            </div>
            <div class="preview--status-account">
                <h2 class="account-status" style="font-size: 14px;"> Account status: <span> UNVERIFIED </span> </h2>
            </div>
        </div>
    </div>
</div>
<?php
require "includes/footer.php";
?>

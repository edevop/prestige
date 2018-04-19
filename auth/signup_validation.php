<?php
require "includes/header.php";
?>
<style>
li.path:nth-child(2) {
    background: #0066ff;
    color: #fff;
    border: 1px solid #0066ff;
}

li.path:nth-child(1)::after {
    border: 3px solid #0066ff;
}
</style>
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
        <div class="val-message">
            <h3 style="color: teal;">Thank you for creating your account.</h3>
            <h1 style="line-height: 1;"> Please check your email for a confirmation letter.</h1>
            <p> Be sure to check your spam box if it does not arrived within a few minutes. </p>
        </div>
    </div>

</div>

<script type="text/javascript">
    setTimeout(function() {
        window.location.replace('complete.php');
    }, 10000);
</script>
<?php
require "includes/footer.php";
?>

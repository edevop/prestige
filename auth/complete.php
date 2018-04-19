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

li.path:nth-child(3) {
    background: #0066ff;
    color: #fff;
    border: 1px solid #0066ff;
}

li.path:nth-child(2)::after {
    border: 3px solid #0066ff;
}
</style>
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
    <div id="parallel-panel" class="clearfix">

        <!-- # -->
        <div id="form-panel">
            <div class="form-fields">
                <form class="" action="validation.php" method="post">
                    <div class="input-group">
                        <label for="">Validation code</label>
                        <input type="text" name="" value="" autofocus>
                    </div>
                    <div class="input-group">
                        <label for="">Email</label>
                        <input type="email" name="" value="">
                    </div>
                    <div class="input-group">
                        <label for="">Password</label>
                        <input type="password" name="" value="">
                    </div>
                    <div class="input-action set-right">
                        <button> complete registration </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- # -->
        <div id="aside-info">
            <h3> My code isn't working </h3>
            <p> Resend code </p>
            <div class="input-action">
                <button type="button" name="button"> resend code </button>
            </div>
        </div>
    </div>
</div>
<?php
require "includes/footer.php";
?>

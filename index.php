<?php
session_start();
?>
<?php require "includes/header.php";?>

<section id="home" class="home-panel">

    <div class="presentation-point">
        <div id="particles-js">

        </div>
        <div class="deep-screen"></div>
        <div class="static-converter" style="height: inherit;">
            <div class="box-non-equal">
                <div class="left-box">
                    <div class="target-text fadeInUp">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod
                    </div>
                    <div class="info-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut ali
                    </div>
                    <div class="sub-inputs-form-fields">
                        <form class="" method="post">
                            <div class="splited">
                                <div class="input-group">
                                    <label for="">name</label>
                                    <input type="text" name="user_name" value="">
                                </div>
                                <div class="input-group">
                                    <label for="">email</label>
                                    <input type="email" name="user_email" value="">
                                </div>
                            </div>
                            <button type="submit" name="sub"> recieve updates <i class="arrow-right"></i> </button>
                        </form>
                    </div>
                </div>
                <div class="right-box">

                </div>
            </div>
        </div>
    </div>

    <div class="about" id="about">
        <div class="static-converter">
            <div class="box-non-equal-2">
                <div class="box-1">
                    <img src="resources/trading.jpg" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>

</section>

<?php


    // Import PHPMailer classes into the global namespace
    // These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    //Load Composer's autoloader
    require 'authvendor/autoload.php';
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 1;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.zoho.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'info@prestige-htf.io';                 // SMTP username
        $mail->Password = 'Trader@01200**';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        //Recipients
        $mail->setFrom('info@prestige-htf.io', 'Prestige High Tech Finance Corp.');
        $mail->addAddress($_POST['user_email'], $_POST['user_name']);     // Add a recipient
        $mail->addReplyTo('info@prestige-htf.io', 'Prestige High Tech Finance Corp.');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        // //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = '<h1>Hello</h1>' . $_POST['user_name'];
        $mail->Body    = '<h2>Welcome to Prestige High Tech Finance.</h2>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }

?>

<?php require "includes/footer.php";?>

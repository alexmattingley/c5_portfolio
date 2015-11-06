<?php
$errName = '';
$errEmail = '';
$errMessage = '';
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'Demo Contact Form';
    $to = 'example@domain.com';
    $subject = 'Message from Contact Demo ';

    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    }
// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }
    }
}
?>

<div class="contact-block container-fluid">
    <a name="contact"></a>
    <h2 class="col-xs-12 col-md-11 col-md-offset-1 col-lg-10 col-lg-offset-2">Contact Me</h2>
    <div class="col-sm-6 col-md-4 col-md-offset-1 col-lg-offset-2">
        <form action="index.php#contact" role="form" method="POST" id="form">
            <div class="form-group">
                <label for="name">Name </label>
                <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                <p class='text-danger'><?php echo $errName; ?></p>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" class="form-control"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
<!--            <button class="btn btn-lg btn-green">Send</button>-->
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary btn-lg btn-green">
        </form>
    </div>
    <div class="col-sm-6 col-md-4 col-md-offset-1">
        <h2>Phone &amp; Email</h2>
        <a class="p_Num" href="tel:949.280.6557"></a>
        <a class="email_add" href="mailto:alexmattingley@gmail.com"></a>
    </div>
</div>

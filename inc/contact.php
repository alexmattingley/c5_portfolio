<?php
$errName = '';
$errEmail = '';
$errMessage = '';
if (isset($_POST["submit"])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $errobots = $_POST['robots'];
    $from = 'Demo Contact Form';
    $to = 'alexmattingley@gmail.com';
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

    if($errobots){
        echo "NO ROBOTS!";
    }
// If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage && !$errobots) {
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
        }
    }
}

print_r($_POST);
?>

<div class="contact-block container-fluid">
    <a name="contact"></a>
    <h2 class="col-xs-12 col-md-11 col-md-offset-1 col-lg-10 col-lg-offset-2">Contact Me</h2>
    <div class="col-sm-6 col-md-4 col-md-offset-1 col-lg-offset-2">
        <form action="index.php#contact" role="form" method="POST" id="form">
            <div class="form-group">
                <label for="name">Name </label>
                <input type="text" id="name" name="name" class="form-control" >
                <p class='text-danger'><?php echo $errName; ?></p>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" class="form-control"></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
            </div>
            <div class="form-group honey">
                <label for="robots">You shouldn't see this</label>
                <textarea name="robots" id="robots" cols="30" rows="10"></textarea>
            </div>
            <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary btn-lg btn-green">
        </form>
    </div>
    <div class="col-sm-6 col-md-4 col-md-offset-1">
        <h2>Phone &amp; Email</h2>
        <a class="p_Num" href="tel:949.280.6557"></a>
        <a class="email_add" href="mailto:alexmattingley@gmail.com"></a>
    </div>
</div>

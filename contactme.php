<?php

session_start('test');

$isValid = true;

$errors = array();


// $success = "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $isValid = false;



        //Do some validations
        $name = $_POST['name'];
        $email = $_POST['email'];
        $text = $_POST['text'];
        $phone = $_POST['phone'];
        $captcha = $_POST['captcha'];
        $subject = $_POST['subject'];

        //preg_match = perform Regular Expression returns a boolean of 0 or 1.
        if(preg_match("/.+@\w+\.\w+/", $email)){
                $isEmailValid = true;
        } else{
                $isEmailValid = false;
                $errors['email'] = "Invalid Email Format";
        }
        if(preg_match("/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/", $phone)){
                $isPhoneValid = true;
        } else {
                $isPhoneValid = false;
                $errors['phone'] = "Invalid Phone Format";
        }
        if(preg_match("/./", $text)){
                $isTextValid = true;
        } else {
                $isTextValid = false;
                $errors['text'] = "Isn't there something you wanted to say?";
        }
        if(preg_match(" ", $name)){
                $isNameValid = false;
                $errors['name'] = "Invalid Name";
        } else {
                $isNameValid = true;
        }
        $mathAnswer = $_SESSION['captcha'];
        print_r($_SESSION);
        if($mathAnswer == $captcha){
                $isCaptchaValid = true;
        }else {
                $isCaptchaValid = false;
                $errors['captcha'] = "Beep Boop, That means wrong in robot.";
        }


        //If all is well, save to the DB or CRM
        if($isNameValid && $isPhoneValid && $isEmailValid && $isTextValid && $isCaptchaValid){
                $isValid = true;
        } else {
                $isValid = false;
        }


        if ($isValid){
                $name = '';
                $phone = '';
                $email = '';
                $text = '';
                $success = "Thanks for the message!";
        }

}
$a = mt_rand(10,99);
$b = mt_rand(10,99);
$c = $a + $b;

$_SESSION['captcha'] = $c;

// print_r($_POST);
// print_r($_GET);
// print_r($_ENV);
// print_r($_SERVER);
// print_r($_REQUEST);

?>

<?php
$title = 'Contact Page';
?>


<?php require('header.php'); ?>
        <main class="contactMe_main">
                <video id="videoBG" poster="dist/img/herobkgd.gif" autoplay muted loop>
                        <source src="dist/vid/Nebula-25168.mp4" type="video/mp4">
                </video>
                <div class="video_foreground"></div>
                <article>
                        <h2 class="form_header">contact us</h1>
        
                        <form method="POST" class="contactus_form">
                                <?php
                                        if (!$isValid){
                                        ?>
                                        <p class="error-message">Invalid Data Provided</p>
                                        <?php
                                        } else if (@$success){
                                        ?>
                                        <p class="success-message"><?php echo $success; ?></p>
                                        <?php
                                        $msgDraft = "name\nemail\ntext";
                                        $msg = wordwrap($msgDraft, 70);
                                        $from ="from: " + $email;
                                        $cc = "CC: " + $email;
                                        $headers = $from . "\r\n" . $cc;
                                        mail("cptdreaddev@gmail.com",$subject,$msg,$headers);
                                        }
                                ?>
                                <p class="form-field">
                                        <label for="name">name</label>
                                        <input type="text" name="name" id="name" value="<?php echo @$name;?>"> <!-- @ symbol functions as a command to ignore until needed.-->
                                </p>
                                <p class="form-field <?php echo @$errors['phone'] ? 'error' : ''; ?>">
                                        <label for="phone">phone</label>
                                        <input type="text" name="phone" id="phone" value="<?php echo @$phone;?>">
                                        <span class="error-message"><?php echo @$errors['phone']; ?></span>
                                </p>
                                <p class="form-field <?php echo @$errors['email'] ? 'error' : ''; ?>">
                                        <label for="email">email</label>
                                        <input type="text" name="email" id="email" value="<?php echo @$email;?>">
                                        <span class="error-message"><?php echo @$errors['email']; ?></span>
                                </p>
                                <div class="form-field <?php echo @$errors['subject'] ? 'error' : ''; ?>">
                                        <h3>subject</h3>
                                        <input class='subject' type='radio' id='advice' name='subject' value='advice'>
                                        <label for="advice">advice</label>
                                        <input class='subject' type='radio' id='appeciation' name='subject' value='appeciation'>
                                        <label for="appeciation">appeciation</label>
                                        <input class='subject' type='radio' id='offer' name='subject' value='offer'>
                                        <label for="offer">offer</label>
                                        <input class='subject' type='radio' id='request' name='subject' value='request'>
                                        <label for="request">request</label>
                                        <span class="error-message"><?php echo @$errors['subject']; ?></span>
                                </div>
                                <p class="form-field <?php echo @$errors['text'] ? 'error' : ''; ?>">
                                        <label for="text">message</label>
                                        <textarea name="text" id="text" value="<?php echo @$text; ?>"></textarea>
                                        <span class="error-message"><?php echo @$errors['text']; ?></span>
                                </p>
                                <p class="form-field <?php echo @$errors['captcha'] ? 'error' : ''; ?>">
                                        <label for="captcha">solve this equation </br><?php echo $a; ?> + <?php echo $b; ?> =</label>
                                        <input type="text" name="captcha" id="captcha">
                                        <span class="error-message"><?php echo @$errors['captcha']; ?></span>
                                </p>
                                <button type="submit">Submit</button>
                        </form>
                </article>
        </main>

<?php require('footer.php'); ?>
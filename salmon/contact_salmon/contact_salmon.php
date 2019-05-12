<!DOCTYPE html>
<!--
This is the Contact Me page
-->
<?php session_start();?>
<html lang="en-us">
    <head>
        <title>Contact | Salmon River Adventures</title>
        <?php include $_SERVER['DOCUMENT_ROOT']. '/salmon/modules_salmon/head_salmon.php';?>
        <meta name="description" content="A site dedicated to providing recreation to outdoor enthusiasts along the Salmon River in central Idaho.">
    </head>
    <body>
        <div id="wrapper">
            <header class="header">
                <?php include $_SERVER['DOCUMENT_ROOT']. '/salmon/modules_salmon/header_salmon.php';?>
                <ul class="breadcrumbs">
                    <li>You are here: <a href="/salmon/index.php">Home</a></li>
                    <li><a href="/salmon/contact_salmon/contact_salmon.php">Contact</a></li>
                </ul>
            </header>
            
            <aside id="mediaaside">
                <?php include  $_SERVER['DOCUMENT_ROOT'].'/salmon/modules_salmon/aside_salmon.php';?>
            </aside>
            
            <section class="contactme">
                <h1>Contact Us</h1>
                    <section class="article">
                        <section class="entry">
                            <?php
                                if (!empty($errors)) {
                                echo '<ul class="notify">';
                                foreach ($errors as $error) {
                                echo "<li>$error</li>";
                                }
                                echo '</ul>';
                                unset($errors);
                                }
                                ?>
                            <p class="hardsplit">Please contact us using the provided form. All fields are required.</p>
                            <hr />
                            <form method="post" action="." id="contactform">
                                <label for="name">Name:</label><br />
                                <input class="forminput" type="text" name="name" id="name" value="<?php echo $name; ?>" required><br />
                                <label for="email">Email:</label><br />
                                <input class="forminput" type="email" name="email" id="email" size="50" value="<?php echo $email;?>" required><br />
                                <label for="subject">Subject:</label><br />
                                <input class="forminput" type="text" name="subject" id="subject" size="50" value="<?php echo $subject; ?>" required><br />
                                <label for="message">Message:</label><br />
                                <textarea name="message" id="message" cols="52" rows="10" required><?php echo $message; ?></textarea><br />
                                <label>&nbsp;</label>
                                <img id="captcha" src="captcha_images.php?width=100&amp;height=40&amp;characters=5" alt="captcha image"> (Type these characters into the text box below)<br />
                                <label for="cap_code">Security Code:</label><br />
                                <input class="forminput" id="cap_code" name="cap_code" type="text" size="6" required><br />
                                <label for='action'>&nbsp;</label>
                                <input class="sendbutton" type='submit' name="action" id='action' value="Send">
                            </form>
                        </section>
                </section>
            </section>
            <aside>
                <?php include  $_SERVER['DOCUMENT_ROOT'].'/salmon/modules_salmon/aside_salmon.php';?>
            </aside>
            <footer>
                <?php include  $_SERVER['DOCUMENT_ROOT'].'/salmon/modules_salmon/footer_salmon.php';?>
            </footer>
        </div>
   </body>
</html>

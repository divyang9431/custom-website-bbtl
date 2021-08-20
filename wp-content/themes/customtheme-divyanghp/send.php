<?php // Check if form was submitted:
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Lc9fOgUAAAAAJWeNwpmC1aXqu7WRp46SxthbD5L';
    $recaptcha_response = $_POST['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
        // Verified - send email
    } else {
        // Not verified - show form error
    }

} ?>
<?php 
if ($_POST["email"]<>'') { 
    $ToEmail = 'pateldivyang9431@gmail.com'; 
    $EmailSubject = 'Site contact form'; 
    $mailheader = "From: info@divyanghp.in.\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY = "Name: ".$_POST["name"]."<br />"; 
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br />"; 
    $MESSAGE_BODY .= "Comment: ".nl2br($_POST["comment"]).""; 
    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
	 header("Location: https://divyanghp.in/");
?> 
Your message was sent
<?php 
} else { header("Location: https://divyanghp.in/");
?> 
 <form class="site-form" action="send.php" method="post">
                            <table width="400" border="0" cellspacing="2" cellpadding="0">
                            <tr>
                            <td><input class="site-input" name="name" type="text" id="name" size="32" placeholder="Name" required></td>
                            </tr><tr>
                            <td><input class="site-input" name="email" type="text" id="email" size="32" placeholder="E-mail" required></td>
                            </tr>
                            <tr>
                            <td><textarea class="site-area bodytext" name="comment" cols="45" rows="6" id="comment" placeholder="Message" required></textarea></td>
                            </tr>
                            <tr>
                            </td>
                            <td align="left" valign="top"><input class="site-btn" type="submit" name="Submit" value="Submit"></td>
                            </tr>
                            </table>
                            </form> 
<?php 
}; 
?>
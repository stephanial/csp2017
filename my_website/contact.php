<?php
if($_POST["message"]) {
    mail("stephanialedezma03@gmail.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>

<!doctype html>
<form method="post" action="contact.php">
    <textarea name="message"></textarea>
    <input type="submit">
</form>
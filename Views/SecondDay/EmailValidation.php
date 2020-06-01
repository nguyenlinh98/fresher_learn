<html>
<form action="" method="post">
    <label for="email"> Email</label>
    <input type="email" name="email">

    <input type="submit" name="btn_send">
</form>
</html>
<?php
$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo $email;
} else {
    echo "";
}

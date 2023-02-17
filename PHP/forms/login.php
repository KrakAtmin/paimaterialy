
<?php
session_start();
if ($_SESSION['email'] === $_POST['email']) {
    if ($_SESSION['password'] === $_POST['password']) {
        echo("Zalogowany");
    } else {
        echo("Wrong Password");
    };
} else {
    echo("Wrong Email");
};
?>
<form id="form3" name="logout" method="post" action="dislogin.php">
    <button type="submit">Logout</button>
</form>
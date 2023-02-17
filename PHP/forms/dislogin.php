<?php
session_start();
if (isset($_SESSION['email'])) {
    if (isset($_SESSION['password'])) {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        echo("Logout");
    } else {
        echo("No one loggedin");
    };
} else {
    echo("No one loggedin");
};
?>
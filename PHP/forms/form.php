<html>
<?php session_start() ?>
<head>
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            float: left;
        }
        #form2 {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            float: left;
            margin-left: 20px;
        }
        * + * {
            margin-top: 15px;
        }
    </style>
</head>

<body>
<form id="form" name="register" method="post">
    <div>
        <label for="email">Email</label>
        <input type="text" name='email' id="email" required="required"/>
    </div>
    <div>
        <label for="birthdate">Birth Date</label>
        <input type="date" name='birthdate' id="birthdate" required="required"/>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name='password' id="password" required="required"/>
    </div>
    <div>
        <label for="password2">Repeat Password</label>
        <input type="password" name='password2' id="password2" required="required"/>
    </div>
    <button type="submit">Zarejestruj</button>
</form>
<body>
<form id="form2" name="login" method="post" action="login.php">
    <div>
        <label for="email">Email</label>
        <input type="text" name='email' id="email" required="required"/>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name='password' id="password" required="required"/>
    </div>  
    <button type="submit">Login</button>
</form>
<form id="form3" name="logout" method="post" action="dislogin.php">
    <button type="submit">Logout</button>
</form>
<?php

if (isset($_POST['email'])) echo("Email:".$_POST['email']."\n");
if ($_POST['password'] === $_POST['password2']) echo("Password:".$_POST['password2']."\n");
if (isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
}

?>
</body>
</html>
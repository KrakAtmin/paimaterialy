<html>
<head>
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        * + * {
            margin-top: 15px;
        }
    </style>
<?php 
if (!empty($_POST['nowauwaga']) && !empty($_POST['imie'])) {
$handle = fopen('comments.txt', "a+");
$handle2 = fopen('names.txt', "a+");
fwrite($handle, $_POST['nowauwaga']);

fwrite($handle2, $_POST['imie']);
fclose($handle);
fclose($handle2);
}

?>
</head>

<body>
<form id="form" name="register" method="post">
    <div>
        <label>Dotychczasowe uwagi</label>
        <input type="textarea" name='uwagi' id="uwagi" value="<?php if (file_exists('comments.txt')) echo file_get_contents("comments.txt")?>" />
    </div>
    <div>
        <label>Nowa uwaga</label>
        <input type="text" name='nowauwaga' id="nowauwaga"/>
    </div>
    <div>
        <label>Imię</label>
        <input type="text" name='imie' id="imie"/>
    </div>
    <button type="submit">Zarejestruj</button>
</form>

</body>
</html>
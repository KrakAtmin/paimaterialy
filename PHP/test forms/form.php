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
</head>

<body>
<form id="form" name="register" method='get'>
    <div>
        <label for="Miasto">Miasto</label>
        <input type="text" name='Miasto' id="Miasto" required="required"/>
    </div>
    <div>
        <label for="Panstwo">Panstwo</label>
        <input type="text" name='Panstwo' id="Panstwo" required="required"/>
    </div>
    <button type="submit">Zarejestruj</button>
</form>
<?php
if (isset($_GET['Miasto']) && isset($_GET['Panstwo'])) {
    echo "<table>"."<tr>";
    echo "<td>"."Miasto:"." ";
    printf("%'?25s", $_GET['Miasto']);
    echo "<tr>"."<td>"."Państwo:"." ";
    printf("%'?25s", $_GET['Panstwo']);
    echo "<tr>"."<td>"."Adres:"." ";
    printf("%-025s", $_GET['Miasto']."(".$_GET['Panstwo'].")");
};
?>
</body>
</html>
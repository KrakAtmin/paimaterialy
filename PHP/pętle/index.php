<!DOCTYPE html>
<head>
</head>
<body>
    <form method="GET">
    <div>
    ilości składników sumy
    <input type="number" name="numer" id="numer">
</div>
    <button type="submit">Submit</button>
</form>

<?php 
if (isset($_GET['numer'])) {
    echo "<form>";

    for ($a = 0; $a < $_GET['numer']; $a++) {
    echo "<div>";
    echo '<input type="number" name="$a" id="$a">';
    echo "</div>";
    };





}
?>
</body>
</html>
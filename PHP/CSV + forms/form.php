<?php
function explonde($x) {
    return explode(",", $x);
}
$lines = file("osoby.csv");

$array = array_map('explonde', $lines);
$wiersz = $_GET['id'];
?>
<form method="post">
<table border = 1>
    <tr>
        <td><?php echo $array[0][0];?></td>
        <td><?php echo $array[0][1];?></td>
        <td><?php echo $array[0][2];?></td>
    </tr>
    <tr>
        <td><input type='textarea' name='text0' id='text0' value="<?php echo $array[$wiersz][0]; ?>"></td>
        <td><input type='textarea' name='text1' id='text1' value="<?php echo $array[$wiersz][1]; ?>"></td>
        <td><input type='textarea' name='text2' id='text2' value="<?php echo $array[$wiersz][2]; ?>"></td>     
    </tr>
</table>
<button type="submit">submit</button> 
</form>
<?php
if (!empty($_POST['first_name']) && !empty($_POST['text1']) && !empty($_POST['text2'])) {
$changeArray = [$_POST['first_name'], $_POST['text1'], $_POST['text2'],PHP_EOL];
$imploded = implode(',', $changeArray);


$lines[$wiersz] = $imploded;
//var_dump($lines);
echo 'Wykonano zmiany';

file_put_contents("osoby.csv", $lines);
}
?>
<a href="/?wiersz=<?php echo $_GET['id']?>"><button type="submit">Back</button></a>
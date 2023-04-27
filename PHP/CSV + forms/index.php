<?php 
function explonde($x) {
    return explode(",", $x);
}

$lines = file("osoby.csv");

$array = array_map('explonde', $lines);
// var_dump($array);

$wiersz = $_GET['wiersz'];

?>
<table border = 1>
    <tr>
        <td><?php echo $array[0][0];?></td>
        <td><?php echo $array[0][1];?></td>
        <td><?php echo $array[0][2];?></td>
    </tr>
    <tr>
        <td><?php echo $array[$wiersz][0];?></td>
        <td><?php echo $array[$wiersz][1];?></td>
        <td><?php echo $array[$wiersz][2];?></td>
    </tr>
</table>
<?php
if ($wiersz > 1): ?>
<a href="?wiersz=<?php echo $wiersz - 1?>"><button type='submit'>Prev</button></a>
<?php endif; ?>

<?php
if ($wiersz < array_key_last($array)): ?>
<a href="?wiersz=<?php echo $wiersz + 1?>"><button type="submit">Next</button></a>
<?php endif; ?>

<a href="form.php/?id=<?php echo $wiersz?>"><button type="submit">Edit</button></a>
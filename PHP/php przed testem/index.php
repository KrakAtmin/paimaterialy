<?php
$mainarray = array(
    array('Imie','Wiek'),
    array('Jan','20'),
    array('Anna','25'),
    array('Marek','30'),
    array('Kasia','35'),
);
?>
<table border="1">
    <?php
    $testCount = count($mainarray);
    var_dump(array_map('countArray', $mainarray));

    for ($i = 0; $i <= $testCount - 1; $i++) {
        echo '<tr>';
        echo "<td>";
        echo $mainarray[$i][0];
        echo "</td>";
        echo "<td>";
        echo $mainarray[$i][1];
        echo "</td>";
        echo "</tr>";
    };
?>
</table>

<?php
$newarray = array_map('expo', $mainarray);

file_put_contents('test.txt', $newarray);

function expo($array) {
    return implode(';', $array);
}

function countArray($array) {
    return count($array);
}

?>
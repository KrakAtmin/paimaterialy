<?php 
$ogstring = '18>2>2>14>1>18>3>2>6>6>15>11>16>13>9>10>1>17>15>14';
$text = explode('>', $ogstring);
$array = array_map('map', $text);
var_dump($array);
echo nl2br("\r\n");
echo "Min: ".min($array).nl2br("\r\n");
echo "Max: ".max($array).nl2br("\r\n");
echo "Avg: ".array_sum($array)/count($array).nl2br("\r\n");
echo "Sum: ".array_sum($array).nl2br("\r\n");

var_dump(array_filter($array, function ($x) { return !($x % 2); }));
echo nl2br("\r\n");
var_dump(array_filter($array, function ($x) { return $x % 2; }));
echo nl2br("\r\n");

echo "Index: ".array_search(17, $array).nl2br("\r\n");

if(in_array("9.65", $array)) {
    echo "Tablica zawiera średnią".nl2br("\r\n");
} else {
    echo "Tablica nie zawiera średniej".nl2br("\r\n");
};

sort($array);
echo "Sort: ";
var_dump($array);
echo nl2br("\r\n");

$uniquearray = array_unique($array);
echo "Unique: ";
var_dump($uniquearray);
echo nl2br("\r\n");

echo "Square: ";
var_dump(array_map('square', $uniquearray));
echo nl2br("\r\n");

echo "Slice: ";
var_dump(array_slice($array, 5, 6));
echo nl2br("\r\n");

$endstring = implode("#", $array);
echo $endstring;



function square($x) { 
    return $x * $x; 
};
function map($map) {
    return intval($map);
};

?>
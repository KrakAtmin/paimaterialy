<!DOCTYPE html>
<head>
</head>
<body>
    <?php

    $initString = "0*7*8*3*8*15*15*16*19*1*2*9*8*7*7*3*2*2*2*9*7*13*15*6*19*14*8*12*14*14*5*17*1*2*9*18*11*3*18*12*13*2*10*16*2*16*17*5*11*3";
    $initArray = explode('*', $initString);
    var_dump($initArray);
    echo nl2br("\n\r");

    $maxInArray = max($initArray);
    echo "Index najwiekszej wartości: ".array_search($maxInArray, $initArray);
    echo nl2br("\n\r");

    echo "Suma: ".array_sum($initArray);
    echo nl2br("\n\r");

    var_dump(array_map('divideBy5', $initArray));
    echo nl2br("\n\r");

    echo "Unikalna tablica: ";
    var_dump(array_unique($initArray));
    echo nl2br("\n\r");

    echo "Tablica indeksy od 7 do 17: ";
    var_dump(array_slice($initArray, 7, 10));
    echo nl2br("\n\r");

    echo "Ostateczny string: ".implode('$', $initArray);
    echo nl2br("\n\r");

    function divideBy5($x) {
        if ($x % 5 == 0) {
            return $x;
        }
    }
?>
</body>
</html>
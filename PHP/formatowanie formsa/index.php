<!DOCTYPE html>
<head>
    
</head>
<body>
    <form id="form" name="calc" method="post">
        <div>
            <label for="b">Liczba A</label>
            <input type="text" name='a' id="a" required="required"/>
        </div>
        <div>
            <label for="b">Liczba B</label>
            <input type="text" name='b' id="b" required="required"/>
        </div>
        <div>
            <label for="oper">Operacja</label>
            <select name="oper" name="oper">
                <option value="">--Please choose an option--</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="**">**</option>
                <option value="%">%</option>
            </select>
        </div>
        <div>
            <button type="submit">Zarejestruj</button>
        </div>
    </form>
    <?php 
    
    if (!isset($_POST["a"]) || !isset($_POST["b"]) || $_POST["oper"] = "") {
        echo "Każde pole musi być wypełnione";
    } else {
        // $inta = intval($_POST["a"]);
        // $intb = intval($_POST["b"]);
        $wynik = 0;
        $inta = $_POST["a"];
        $intb = $_POST["b"];
        // if (gettype($inta) != "integer" || gettype($intb) != "integer") {
        //     echo "Wymagana jest liczba";
        // } else {
        try {
            switch ($_POST['oper']) {
                case '+':
                    $wynik = $inta + $intb;
                    break;
                    
                case '-':
                    $wynik = $inta - $intb;
                    break;
                
                case '*':
                    $wynik = $inta * $intb;
                    break;
                
                case '/':
                    $wynik = $inta / $intb;
                    break;
                
                case '**':
                    $wynik = $inta ** $intb;
                    break;    
                
                case '%':
                    $wynik = $inta % $intb;
                    break;     
            }
            printf ('%020.9e',$wynik);
        } catch (Error) {
            echo "Operacje można wykonywać tylko na liczbach";
        }
    };
    
    
    
    
    
    
    ?>
</body>
</html>
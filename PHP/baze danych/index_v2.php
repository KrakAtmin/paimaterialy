<?php
$host = "127.0.0.1";
$dbUser = 'root';
$password = '';
$database = '3infA';
$conn = mysqli_connect($host,$dbUser,$password,$database);
if($conn){
    echo 'działa';
}

$query= "select * from users";

//  where user_id = 10
$result = mysqli_query($conn, $query);
$test = mysqli_fetch_all($result, MYSQLI_ASSOC);
$testCount = count($test);
// var_dump($test);



if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['city']) && !empty($_POST['age']) && !empty($_POST['email'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $testCount1 = $testCount + 1;
    $queryInsert = "insert into users values ('$testCount1', '$first_name', '$last_name','$city','$age','$email')";
    $result2 = mysqli_query($conn, $queryInsert);
    print $result2;
    
}
$_POST = array();



$result = mysqli_query($conn, $query);
$test = mysqli_fetch_all($result, MYSQLI_ASSOC);
$testCount = count($test);


?>
<table border = 1>
    <tr>
        <td><?php echo 'user_id';?></td>
        <td><?php echo 'first_name';?></td>
        <td><?php echo 'last_name';?></td>
        <td><?php echo 'city';?></td>
        <td><?php echo 'age';?></td>
        <td><?php echo 'email';?></td>
    </tr>
    <?php 
    $wiersz = $_GET['wiersz'];
    $i = 0 + $wiersz * 10;
    $moduled = $testCount%10 + 1;
    for ($i; $i <= $testCount - $moduled; $i++) {
        echo '<tr>';
        echo "<td>";
        echo $test[$i]['user_id'];
        echo "</td>";
        echo "<td>";
        echo $test[$i]['first_name'];
        echo "</td>";
        echo "<td>";
        echo $test[$i]['last_name'];
        echo "</td>";
        echo "<td>";
        echo $test[$i]['city'];
        echo "</td>";
        echo "<td>";
        echo $test[$i]['age'];
        echo "</td>";
        echo "<td>";
        echo $test[$i]['email'];
        echo "</td>";
        echo "</tr>";
    };
    ?>
    <form method="post">
    <tr>
        <td><?php echo $testCount + 1;?></td>
        <td><input type='textarea' name='first_name' id='first_name'></td>
        <td><input type='textarea' name='last_name' id='last_name'></td>
        <td><input type='textarea' name='city' id='city'></td>
        <td><input type='textarea' name='age' id='age'></td>
        <td><input type='textarea' name='email' id='email'></td>
        <td><button type="submit">submit</button></td>
    </tr>
    </form>
</table>
<?php

mysqli_close($conn);
?>
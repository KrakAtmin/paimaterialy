<!DOCTYPE html>
<head>
<?php 
    $handle = file_get_contents("abc.txt");
?>
</head>
<body>
    <form method="post">
    <input type='textarea' name='text' id='text' value="<?php echo $handle; ?>">
    <button type="submit">submit</button>



    </form>
</body>
</html>



<?php 
$file = "abc.txt";
file_put_contents($file, $_POST["text"]);
echo $_POST["text"];

?>
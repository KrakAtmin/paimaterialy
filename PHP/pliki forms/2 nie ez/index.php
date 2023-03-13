<!DOCTYPE html>
<head>
<?php 
if (!isset($_GET['filename'])) {

} else {

    $name = $_GET['filename'].".txt";
    $file = fopen($name, "w+");
    if (isset($name) && isset($_POST['text'])) {
        file_put_contents($name, $_POST["text"]);
        echo $_POST["text"];
    }
    if (filesize($name) > 0) {
        $handle = fread($file, filesize($name));
        fclose($file);
    }
}
?>
</head>
<body>
    <form method="get">
    <input type='text' name='filename' id='filename' required="required" value="<?php if (isset($name)) {echo $_GET['filename'];} ?>">
    <button type="submit">submit</button>



    </form>
    <form method="post">
    <input type='textarea' name='text' id='text' value="<?php if (isset($handle)) {echo $handle;} ?>">
    <button type="submit">submit</button>



    </form>
</body>
</html>



<?php

?>
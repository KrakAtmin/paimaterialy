<?php
$conn = mysqli_connect('127.0.0.1','root','','3infa');
$query = 'select * from books';

$dbQuery = mysqli_query($conn, $query);
$result = mysqli_fetch_all($dbQuery);
$dbCount = count($result);
$test = 42;
//var_dump($result);


if (!empty($_POST['book_number']) && !empty($_POST['title']) && !empty($_POST['author']) && !empty($_POST['genre']) && !empty($_POST['page_count'])) {
    $bookNumber = $_POST['book_number'];
    //var_dump($bookNumber);
    //echo strlen($bookNumber);
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $pageCount = $_POST['page_count'];
    $dbCount2 = $dbCount + 1;
    
    //echo intval($pageCount);
    if (strlen($bookNumber) <= 10 && strlen($title) <= 100 && strlen($author) <= 100 && strlen($genre) <= 50 && intval($pageCount) > 0) {
    $insertQuery = "insert into books values ('$dbCount2', '$bookNumber', '$title', '$author', '$genre', '$pageCount')";
    $dbInsert = mysqli_query($conn, $insertQuery);
    }
}
//var_dump($_POST);
$dbQuery = mysqli_query($conn, $query);
$result = mysqli_fetch_all($dbQuery);
$dbCount = count($result);

?>
<table border=1>
    <tr>
        <td>book_id</td>
        <td>book_number</td>
        <td>title</td>
        <td>author</td>
        <td>genre</td>
        <td>page_count</td>
    </tr>
    <?php
    for ($i = 0; $i <= $dbCount - 1; $i++) {
        echo '<tr>';
        echo '<td>'.$result[$i][0].'</td>';
        echo '<td>'.$result[$i][1].'</td>';
        echo '<td>'.$result[$i][2].'</td>';
        echo '<td>'.$result[$i][3].'</td>';
        echo '<td>'.$result[$i][4].'</td>';
        echo '<td>'.$result[$i][5].'</td>';
        echo '</tr>';
    }
    ?>
    <form method='post'>
    <tr>
        <td><?php echo $dbCount + 1;?></td>
        <td><input type='textarea' name='book_number' required='required'></td>
        <td><input type='textarea' name='title' required='required'></td>
        <td><input type='textarea' name='author' required='required'></td>
        <td><input type='textarea' name='genre' required='required'></td>
        <td><input type='textarea' name='page_count' required='required'></td>
        <td><button type='submit'>submit</button></td>
    </tr>
    </form>




    <?php mysqli_close($conn); ?>
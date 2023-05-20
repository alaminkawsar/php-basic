<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and SET Method </title>
</head>
<body>
    <?php
        $looking = isset($_GET['title']) || isset($_GET['author']);
    ?>
    <p>You looking? <?php echo (int) $looking; ?></p>
    <p>The book you are looking for is </p>
    <ul>
        <li><b>Title</b>: <?php echo $_GET['title']; ?></li>
        <li><b>Author</b>: <?php echo $_GET['author']; ?></li>
    </ul>
</body>
</html>
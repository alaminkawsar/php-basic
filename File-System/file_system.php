<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File System</title>
</head>
<body>
    <?php
        $bookJson = file_get_contents('books.json');
        $books = json_decode($bookJson);
        // var_dump($books);
    ?>
    <table>
        <tr>
            <th>"Title"</th>
            <th>"Author"</th>
            <th>"Available"</th>
            <th>"Pages"</th>
            <th>"isbn"</th>
        </tr>
        <?php
        foreach($books as $key=>$book):
            echo "<tr>";
            foreach($book as $k=>$value):
                // echo $k;
                echo "<td>";
                echo $value;
                echo "</td>";
            endforeach;
            echo "</tr>";
        endforeach;
        ?>
    </table>
</body>
</html>
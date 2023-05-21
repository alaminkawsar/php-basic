<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Authentication</title>
</head>
<body>
    <?php
        $submitted = (int) isset($_POST['username']);
        setcookie('username',$_POST['username']);
        if(!$submitted){
            echo "No information provided";
        }else{
            echo "<p>Your password information</p>";
            echo "<ul>
                    <li>username:".$_POST['username']."</li>"
                    ."<li>password:".$_POST['password']."</li>"
                ."</ul>";
        }
    ?>

</body>
</html>
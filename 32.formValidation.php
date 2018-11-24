
<?php 
    if(isset($_POST['click'])) {

        $userName = $_POST['username'];
        $password = $_POST['password'];

        if(strlen($userName)<5){
            echo "<h3 style='color:red'>UserName has to be longer than 5</h3>";
        }

        else
            echo 'Your Username is '.$userName.' and your Password is '.$password ;
    }        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action = "32.formValidation.php" method="post">
        <pre>
            <input type="text" placeholder = "Enter username" name="username" />

            <input type="password" placeholder = "Enter Passwrod" name="password" />

            <input type="submit" value="click" name="click"/>
        </pre>
    </form>
</body>
</html>
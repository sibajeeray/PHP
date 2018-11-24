
<?php 
    if(isset($_POST['click'])) {
        echo "Form Submitted.";
        //print_r($_POST);

        $userName = $_POST['username'];
        $password = $_POST['password'];

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

    <form action = "31.form.php" method="post">
        <pre>
            <input type="text" placeholder = "Enter username" name="username" />

            <input type="password" placeholder = "Enter Passwrod" name="password" />

            <input type="submit" value="click" name="click"/>
        </pre>
    </form>
</body>
</html>
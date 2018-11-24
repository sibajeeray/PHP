<?php include "36.PhpInclude/db.php";
    if(isset($_POST['submit'])) {

        $userName = $_POST['username'];
        $password = $_POST['password'];

        $userName = mysqli_real_escape_string($connection , $userName);
        $password = mysqli_real_escape_string($connection , $password);

        $hashFormat = "$2y$10$";
        $salt = $hashFormat."AnyStringOfLengthMoreThan22CanBeUsed";
        $encryptedPassword = crypt($password, $salt);




            
        $query = "insert into users(username,password) values('$userName','$encryptedPassword')";

        $result = mysqli_query($connection, $query);

        if(!$result)
            die("Query failed<br/>". mysqli_error($connection));
        else
            echo "Query Executed Successfully<br/>";
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

    <form action = "37.PasswordEncryption.php" method="post">
        <pre>
            <input type="text" placeholder = "Enter username" name="username" />

            <input type="password" placeholder = "Enter Passwrod" name="password" />

            <input type="submit" value="SignUp" name="submit"/>
        </pre>
    </form>
    
</body>
</html>
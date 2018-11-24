
<?php 
    if(isset($_POST['submit'])) {

        $userName = $_POST['username'];
        $password = $_POST['password'];

        $connection = mysqli_connect('localhost','root','','test');

        if($connection) {
            echo "DB Connection successfully Established";

        } 
        else {
            die("DB Connection could not be established<br/>".mysqli_connect_error($connection));
        }

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

    <form action = "33.DbConnection.php" method="post">
        <pre>
            <input type="text" placeholder = "Enter username" name="username" />

            <input type="password" placeholder = "Enter Passwrod" name="password" />

            <input type="submit" value="Submit" name="submit"/>
        </pre>
    </form>
</body>
</html>
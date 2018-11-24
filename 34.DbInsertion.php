
<?php 
    if(isset($_POST['submit'])) {

        $userName = $_POST['username'];
        $password = $_POST['password'];

        $connection = mysqli_connect('localhost','root','','test');

        if($connection) {
            
            $query = "insert into users(username,password) values('$userName','$password')";

            $result = mysqli_query($connection, $query);

            if($result)
                echo "Query Executed and Data saved in DB";
            else
                die("Query failed");
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

    <form action = "34.DbInsertion.php" method="post">
        <pre>
            <input type="text" placeholder = "Enter username" name="username" />

            <input type="password" placeholder = "Enter Passwrod" name="password" />

            <input type="submit" value="SignUp" name="submit"/>
        </pre>
    </form>
</body>
</html>
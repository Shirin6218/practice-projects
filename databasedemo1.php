<html>
    <head>
        <title>
</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

     $conn = new mysqli ($servername,$username,$password); 
        if($conn->connect_error){
            die("connection failed:".$conn->connect_error);
        }
        $sql = "CREATE DATABASE hloo";
        if($conn->query($sql) === TRUE){
            echo"database created sucCessfully";
        } else{
            echo "error creating database:".$conn->error;
        }       
        $conn->close();
    ?>
</body>
</html>
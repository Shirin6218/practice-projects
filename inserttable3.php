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
    $dbname = "teachers";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connection failed:". $conn->connect_error);
    }
    $sql = "INSERT INTO childerens(childeren_id,childeren_name,childeren_class,childeren_age)
    VALUES ('3453','riya','5','10'),
    ('3453','riya','5','10');";
    if ($conn->query($sql) === TRUE) {
        echo "new record created sucessfully";
    }else{
        echo "error:". $sql. "<br>". $conn->error;
    }
    $conn->close();
    ?>
</body>
</html>
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
    $dbname = "orange";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed:" . $conn->connect_error);
    }
    $sql = "DELETE FROM apple WHERE id ='6';";
    $result = $conn->query($sql);
    if($conn->query($sql) == TRUE){
        echo "get data created successfully";
    }else{
        echo "error:" .$sql. "<br>" .$conn->error;
    }
    $conn->close();
    
    ?>
</body>

</html>
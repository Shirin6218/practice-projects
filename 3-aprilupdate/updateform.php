<html>
    <head>
        <title>
</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "orange"; 

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connection failed:" .$conn->connect_error);
    }
    $sql = "UPDATE apple SET email = 'ranjithsai@gmail.com' WHERE id = '22';";
    $result = $conn->query($sql);
    if($reject = $conn->query($sql) == TRUE){
        echo "get data fit sucessfully";
    }else{
        echo "error:" .$sql. "<br>".$conn->error;
    }

    foreach ($result as $item){
        echo $item ['id'];
    }

    $conn->close();
    ?>
</body>
</html>
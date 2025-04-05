<html>
    <head>
        <title>
</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password  = "";
    $dbname  = "college12";

    $conn = new mysqli($servername,$username,$password,$dbname);
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }
    $staffid =  '6342';
    $sql = "DELETE FROM staff WHERE stafidcard   = $staffid ";

    if($conn->query($sql) === TRUE){
    echo "recorded created sucessfully";
    }else{
        echo "error deleting record:". $conn->error;
    }

    $conn->close();

    ?>
</body>
</html>
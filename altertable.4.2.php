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
    $dbname  = "college12";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if(!$conn){
        die("connection failed:" . mysqli_connect_error());
    }
    $sql = "ALTER TABLE staff CHANGE staffid stafidcard BIGINT(30)";

    if($conn->query($sql) === TRUE) {
        echo "column renamed sucessfully";
    }else{
        echo "error: ". $conn-> error;
    }

    $conn->close();
    ?>
</body>
</html>
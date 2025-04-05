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
    $dbname = "college12";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if(!$conn){
        die("connectin failed:". mysqli_connect_error());
    }
    $sql = "UPDATE staff SET staf_salary = '25000' WHERE stafidcard = '4556'";

    if($conn->query($sql) === TRUE){
        echo "record updated sucessfully";
    }else{
        echo "error:". $conn->error;
    }

    $conn->close();
    
    ?>
</body>
</html>
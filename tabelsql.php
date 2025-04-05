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
    $dbname = "asiya";

    $conn =  mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("connection failed:". mysqli_connect_error());
    }
    $sql = "  CREATE TABLE employe (
        employe_id INT AUTO_INCREMENT PRIMARY KEY,
        employe_name VARCHAR(50)NOT NULL,
        employe_address VARCHAR(100)NOT NULL,
        employe_phnum VARCHAR(20)NOT NULL
    )";
    
    if(mysqli_query($conn,$sql)){
        echo "table employes created sucessfully";
    }else{
        echo "Error creating table: ". mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>
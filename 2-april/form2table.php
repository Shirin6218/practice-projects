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
    $dbname = "partner";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("connection failed:". mysqli_connect_error());
    }
    $sql = "CREATE TABLE business(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    mobile VARCHAR (30) NOT NULL,
    address VARCHAR(30) NOT NULL    
    )";
    if(mysqli_query($conn,$sql)){
        echo "table created sucessfully";
    }else{
        echo "Error creating table:" .mysqli_error($conn);
    }
    mysqli_close($conn);


        ?>
</body>
</html>
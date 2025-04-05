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
    $dbname = "myDB";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("connection failed: ". mysqli_connect_error());
    }
    $sql = "CREATE TABLE myDB(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )" ;
    if (mysqli_query( $conn, $sql)) {
        echo "Table myguests created successfully";
      } else {
        echo "Error creating table: " . mysqli_error($conn);
      }

      mysqli_close($conn);
    ?>
</body>
</html>
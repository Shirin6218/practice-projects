<html>
    <head>
        <title>
</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username =   "root";
        $password ="";
        $dbname = "shaik";

        $conn = mysqli_connect($servername,$username,$password,$dbname);
        if(!$conn){
            die("connection failed:".mysqli_connect_error());
        }
        $sql = "CREATE TABLE shirin(
         id INT(6)UNSIGNED AUTO_INCREMENT  PRIMARY KEY,
        Email VARCHAR(30) NOT NULL,
        mobile_num BIGINT,
        PINCODE  BIGINT,
        CITY VARCHAR(30)NOT NULL,
        EDUCATION VARCHAR(30)NOT NULL,
        FATHERNAME VARCHAR(30)NOT NULL,
        MOTHERNAME VARCHAR(30)NOT NULL
        )";
        if(mysqli_query ($conn ,$sql)){
            echo "table shirin created sucessfully" ;
        } else{
            echo "Error creating table:". mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>
</body>
</html>
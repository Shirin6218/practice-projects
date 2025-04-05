<html>
    <head>
        <title>
</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username  = "root";
    $password  = "";
    $dbname = "teachers";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connection failed:". mysqli_connect_error());
    }

    $sql = "CREATE TABLE childerens(
    childeren_id int,
    childeren_name varchar(255),
    childeren_class varchar(255),
    childeren_age int
    )";
    if(mysqli_query($conn,$sql)){
        echo "table teachers created sucessfully";
    }else{
        echo "error creating table:".mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>
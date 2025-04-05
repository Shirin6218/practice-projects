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
     
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connection failed:". $conn->connect_error);
    }
    $sql = "INSERT INTO student3(studentid,student_name,student_rank,student_group)
        VALUES ('123','riya','89%','bsc'),
        ('124','ziya','85%','ba'),
        ('125','priya','92%','b.com'),
        ('126','rahul','95%','bzc'),
        ('127','mahi','90%','mca');";
    
    if($conn->query($sql) === TRUE ){
        echo "new record created successfully";
    }else{
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
    $conn->close();

    ?>
</body>
</html>
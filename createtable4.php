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

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "CREATE TABLE  student3(
        studentid int (30)NOT NULL ,
        student_name varchar(30)NOT NULL,
        student_rank varchar(30)NOT NULL,
        student_group varchar(30)NOT NULL
        )";
    if ($conn->query($sql) === TRUE) {
        echo "table created student sucessfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();
    ?>
</body>

</html>
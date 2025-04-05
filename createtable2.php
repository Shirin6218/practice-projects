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
    $dbname = "lecturer";

    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("connection failed: ". mysqli_connect_error());
    }
    $sql = "CREATE TABLE students(
    studentid int (30)NOT NULL,
    student_name varchar(30)NOT NULL,
    student_address varchar(30)NOT NULL 
    )" ;
    if(mysqli_query($conn, $sql)){
        echo "table  lecturers created sucessfully";
    }else{
        echo "Error creating table:". mysqli_error($conn);

    }

    mysqli_close($conn);
    ?>
</body>
</html>

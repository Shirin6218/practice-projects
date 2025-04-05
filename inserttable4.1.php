<html>
    <head>
        <title>
</title>
</head>
<body>
    <?php
     $servername = "localhost";
     $username  ="root";
     $password = "";
     $dbname = "college12";
 
     $conn = mysqli_connect($servername,$username,$password,$dbname);
     if($conn->connect_error){
         die("connection failed: ". $conn->connect_error);
     }
     $sql = "INSERT INTO teachers1(teachersid,teachers_name,teachers_salary,teacher_subject)
     VALUES ('4538','vikas','15000','english'),
     ('4538','vikas','15000','english');";
     
     
 
     if ($conn->query($sql) === TRUE) {
         echo "New record created successfully";
       } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
       }
       
       $conn->close();
    ?>
</body>
</html>
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
    $sql = "INSERT INTO staff(staffid,staf_name,staf_salary,staf_department)
    VALUES ('4538','vikas','20000','register department'),
    ('6342','rahul','15000','examinor'),
    ('2324','venkat','10000','scholreship'),
    ('4556','rina','20000','fees department');";
    

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
      $conn->close();
    ?>
</body>
</html>
<html>
    <head>
        <title>
</title>
</head>
<body>
    create database
    <?php

       $servername = 'localhost';
       $username = 'root';
       $password = '';
       
       $conn = mysqli_connect($servername, $username, $password);
       
       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }
       
       $value = "CREATE DATABASE IF NOT EXISTS myDB";
       if (mysqli_query($conn, $value)) {
           echo "Database is ready to use!";
       } else {
           echo "Error creating database: " . mysqli_error($conn);
       }
       // Connection close karein
       mysqli_close($conn);       
    ?>
</body>
</html>
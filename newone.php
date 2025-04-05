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
    
    $conn = mysqli_connect($servername,$username,$password);
    if(!$conn){
        die("connection failed:".mysqli_connect_error());
    }
    $value = "CREATE DATABASE shaik";
    if(mysqli_query($conn,$value)){
        echo "database is ready to use!";
    }else{
        echo "Error creating database:". mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>
</html>
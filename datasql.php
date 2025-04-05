<html>
    <head>
        <title>
</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username  = "root";
    $password = '';

    $conn = new mysqli_connect($servername,$username,$password);
    if(!$conn){
        die("connection failed:". mysqli_connect_error());
    }
    $hyy = "CREATE DATABASE asiya";
    if(mysqli_query($conn,$hyy)){
        echo "database is ready to use!";
    }else{
        echo "error creating database:". mysqli_error($conn);
    }

    ?>
</body>
</html>

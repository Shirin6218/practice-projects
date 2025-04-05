<html>
    <head>
        <title>
</title>
</head>
<body>
    <?php
        $servername  = "localhost";
        $username = "root";
        $password = "";

        $conn = new mysqli($servername,$username,$password);

        if($conn->connect_error){
            die("connection failed:" .$conn->connect_error());
        }
        echo "connected sucessfully";
    ?>
</body>
</html>
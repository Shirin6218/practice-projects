<html>
    <head>
        <title>
</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password= "";
        $dbname = "partner";

        $conn = mysqli_connect($servername,$username,$password,$dbname,);
        if($conn->connect_error){
            die("connection failed:" .$conn->connect_error);
        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $r_name = $_POST ["name"];
            $r_email =$_POST ["email"];
            $r_mobile =$_POST ["mobile"];
            $r_address =$_POST ["address"];
            $sql = "INSERT INTO business (name,email,mobile,address)
           VALUES ('$r_name','$r_email','$r_mobile','$r_address');";
           if($conn->query($sql) === TRUE){
            echo "new record created sucessfully";
           }else{
            echo "error: ".$sql. "<br>". $conn->error;
           }
        }
        else{
            echo "error:" . $sql. "<br>" .$conn->error;
        }
        $conn->close();
    ?>
</body>
</html>
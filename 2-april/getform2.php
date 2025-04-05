<html>

<head>
    <title>
    </title>
</head>
<style>
    .hyy{
        height: 40px;
        width:30%;
        background-color:#b4b4b4;
         font-size:20px;
    }
    .hlo{
        background-color: rgb(60, 179, 113);
        font-size: 20px;
    }
</style>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "orange";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed:" . $conn->connect_error);
    }
    $sql = "SELECT * FROM apple;";
    $result = $conn->query($sql);

    // $sql = "INSERT INTO apple (name,email,mobile,address)
    // --  VALUES ('$s_name','$s_email','$s_mobile','$s_address');";
    if ($result->num_rows > 0) {
        echo "<table border 1px><tr class='hyy'><th>id</th><th>name</th><th>email</th><th>mobile</th><th>address</th></tr>";
        foreach ($result as $item) {
    
            echo "<tr class='hlo'><td>". $item["id"] ."</td><td>". $item["name"]."</td><td>".$item["email"]. "</td><td>" .$item["mobile"]. "</td><td>".$item["address"]."</td></tr>";
        }
        echo "</table>";
    } 
    
        
        
    ?>
</body>

</html>
<html>
    <head>
        <title>
</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username  = "root";
    $password = "";
    $dbname  ="asiya";

    $conn  =   mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error){
        die("connection failed:". $conn->connect_error);
        
    }
    $sql = "INSERT INTO employe(employe_name,employe_address,employe_phnum)
    VALUES ('raju','ram nagar','343409329');";
    // $sql = "DELETE  FROM employe WHERE employe_phnum =343409329;";
   $sql .= "INSERT INTO employe(employe_name,employe_address,employe_phnum)
    VALUES ('rajesh','kamala nagar','28323245');";
    // $sql = "UPDATE employe SET employe_address= 'laxmi nagar'  WHERE employe_phnum =28323245;";
   $sql .= "INSERT INTO employe(employe_name,employe_address,employe_phnum)
    VALUES ('niya','old town','203333748');";
   $sql .= "INSERT INTO employe(employe_name,employe_address,employe_phnum)
    VALUES ('yadaYUYGYUv','old town','20333374')";
    $sql .= "INSERT INTO employe(employe_name,employe_address,employe_phnum)
    VALUES ('FHJDSFDSK','old town','8789899');";


    
    if($conn->multi_query( $sql) === TRUE){
        $last_id = $conn->insert_id;
        echo "new record created sucessfully .Last inserted ID is:".$last_id;
    }else{
        echo "error:" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
   ?>
</body>
</html>
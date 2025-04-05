<html>
    <head>
        <title>
</title>
</head>
<body>
    <?php
      $servername = "localhost";
      $username  = "root";
      $password  = "";
      $dbname = "college12";
      
      $conn = mysqli_connect($servername,$username,$password,$dbname);
      if(!$conn){
          die("connection failed:".mysqli_connect_error());
      }
      $sql = "CREATE TABLE  staff(
      staffid int (30)NOT NULL  PRIMARY KEY, 
      staf_name varchar(30)NOT NULL,
      staf_salary varchar(30)NOT NULL,
      staf_department varchar(30)NOT NULL
      )";
      if(mysqli_query($conn,$sql)){
          echo "table created student sucessfully";
      }else{
          echo "error creating table:".mysqli_error($conn);
      }

      mysqli_close($conn);
    ?>

</body>
</html>

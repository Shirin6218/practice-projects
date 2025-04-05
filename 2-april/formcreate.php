<html>
    <head>
        <title>
</title>
</head>
<style>
  .hli{
    
  }
  .hyy{
    height: 40px;
    width:25%;
    margin:7px;
    border-radius:5px;

  }
  .hlo{
    /* background-color:green; */
  }
  .env{
    background-color:pink;
    border-radius:5px;
    height: 27px;
    width:10%;
  }
  </style>
<h4>contact form</h4>
<body>
    <form action= "./forminsert.php"  method="post" >
    <div >
      <input type="text" name="id" placeholder="id" class="hyy"><br>
      <input type="text" name="name" placholder="name"  class="hyy"><br>
      <input type="text" name="email" placeholder="email"  class="hyy"><br>
      <input type="text" name= "mobile" placholder= "mobile"  class="hyy"><br>
      <input type="text" name= "address" placeholder ="address"  class="hyy"><br>
      <button type="submit" class="env">submit</button>
      
    </div>
 </form>

</body>

</html>

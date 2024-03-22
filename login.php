<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome</title>
     <!-- bootstrap 5 cdn link start -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<!-- bootstrap 5 cdn link end -->
<link rel="stylesheet" href="style.css">
<style>
  
    img{
        width: 200px;
        height:200px;
        border-radius: 50%;
      
    }
    .login-form{
    width: 100%;
    min-height:410px;
    background-color:rgb(228, 227, 227);
    margin-top: 3%;
    border-radius: 0.5rem;
    box-sizing: border-box;
    box-shadow: 2px 2px 2px 2px green;
}
.container hr{
    width: 100%;
    height: 30px;
    border: 0;
    border-top: 5px solid blue;
    border-bottom: 5px solid orange;
    background-color: green;
    margin: 1rem 0;
}
.container-fluid h1{
text-shadow: 2px 1px 1px red;
background-color: skyblue;
}
input[type="text"], input[type="password"]{
    background-color: pink;
    color: green;
    font-weight: bold;
    padding: 0.2rem;
    border-radius: 0.4rem;
    border: 2px solid red;
}
</style>
</head>
<body>
  
<?php 
   
 
$connc = mysqli_connect("localhost","root","","file-management");
if(!$connc){
    echo"not connected";
}

$query = "SELECT * FROM crediantials";
$result = mysqli_query($connc, $query);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){ 
        "Database data Data";  
         $database_usr = $row['database_usr'];
       
         $database_pass = $row['database_pass'];     
    }
}
echo "<br><br>";    
 if(isset($_POST['submit'])){ 
    
    $inpt_usr = $_POST['username'];
      
      $inpt_pass = $_POST['password'];

 }

if(!($database_usr == $inpt_usr && $database_pass == $inpt_pass)){
    $invalid = "Invalid Username or Password";    
}else{
    header("Location:index.php");
}



?>

    <div class="container">
        <div class="container-fluid text-center ">
            <h1 class="display-3 fw-bold">German University Bangladesh</h1>
            <h3 class="display-4 fw-bold text-info">Project File Management System</h3>
            <h2 class="fw-bolder text-danger">Department <br><span>OF</span> <br> Bsc Computer Science & Engineering</h2>
        </div><hr>
        <div class="login-form text-center  p-1">
            <img class="text-center p-3 mx-2 " src="images/login.jpeg" class="w-50px">
            <form action="login.php" method="post">
               <label class="fw-bold" for="user">Username: </label>
               <input type="text" name="username" class="username" id="username" required><br><br>
               <label class="fw-bold" for="password">Password: </label>
               <input type="password" name="password" class="password" id="password" required><br><br>
               <button class="btn btn-primary" type="submit" name="submit">Login</button>
               <p id="error" class="text-danger fw-bold"><?php  echo $invalid ?></p>
            </form>
        </div>
    </div>
    <script>
        var usr = document.getElementById("username");
        var pass = document.getElementById("password"); 

        usr.addEventListener("keypress", function(e) {
           console.log(e.target.value) ;
         
        });
    
    const invalid = document.getElementById('error'); 
       setTimeout(function  () {  
         invalid.remove();
         }, 3000);  
      
 

    
</script>
    <!-- <script src="login.js"></script> -->
</body>
</html>
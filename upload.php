<?php  


$connc = mysqli_connect("localhost","root","","file-management");
if(!$connc){
    echo"not connected ".mysqli_connect_error();
}
if(isset($_POST['upload'])){
    $file_name = $_FILES['file']['name']; 
   $file_size = $_FILES['file']['size'];    
   $file_tmp_name = $_FILES['file']['tmp_name']; 
   
   };
   
$destination = "downloads/".$file_name;

move_uploaded_file($file_tmp_name, $destination);
$query = "INSERT INTO files(name,size)VALUES ('$file_name','$file_size')"; 
$result = mysqli_query($connc, $query);
if(!$result){
    echo "not upload ";
}else{
    header("Location:index.php");
}


?>
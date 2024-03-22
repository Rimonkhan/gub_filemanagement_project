<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download system automatically</title>
</head>
<body>
 
    <?php 
    
    if(!empty($_GET['file'])){
         $file_name =basename($_GET['file']);
         $path = "downloads/".$file_name;

        if(!empty($file_name) && file_exists($path)){
              // Set the appropriate headers for the file download
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=$file_name");
    header("Content-Transfer-Encoding: binary");


    // Output the file data
    readfile($path);
    exit;
} else {
    echo "File not found.";
}

        }
        
    
    
    ?>
   

</body>
</html>
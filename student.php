<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
 <style>
    img{
        height: 150px;
    }
 </style>
</head>
<body>
    <h2 class="text-center">Student LIst </h2><hr>
    <label for="search">Search</label> 
    <input class="my-3 " type="search" name="search>
    <?php   
    for ( $i = 0; $i <10; $i++ ) {
        ?>
       
           
            <div class="container-fluid text-center">
           <div class="row">
            <div class="col-lg-3 d-flex justify-content-center">
                <div class="card  campus" style="width: 18rem;">
                    <div class="card-body bg-info">
                        <h5 class="card-title">Rimon Khan</h5>
                        <img src="images/gub.png" class="w-100">
                        <p class="card-text">Id:21-1-01-002</p> 
                        <p class="card-text">Batch: 13th Cse</p> 
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center">
                <div class="card  campus" style="width: 18rem;">
                    <div class="card-body bg-success">
                        <h5 class="card-title">Campus</h5>
                        <img src="images/gub.png" class="w-100">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center">
                <div class="card  campus" style="width: 18rem;">
                    <div class="card-body bg-danger">
                        <h5 class="card-title">Campus</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center">
                <div class="card  campus" style="width: 18rem;">
                    <div class="card-body bg-primary">
                        <h5 class="card-title">Campus</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div><br>
    </div>

    
    
        <?php 
    }
  
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Project File Management</title>
    <!-- bootstrap 5 cdn link start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
<!-- bootstrap 5 cdn link end -->
<!-- gogle font cdn link start -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<!-- google font cdn end -->
<link rel="stylesheet" href="style.css">
<style>
  .logo img{
    height: 100px;
  }
  .col-lg-9 h2{
   font-weight: bolder;
    padding-top: 1.3rem;
    background: linear-gradient(31deg, #202c45  40%, #00f4cc 100%); 
   -webkit-background-clip: text; 
    -webkit-text-fill-color: transparent;
  }
  .col-lg-9 p{
    color: brown; 
    margin-bottom: 0px; 
    margin-right: 10px !important;
    font-weight: bolder;
  }
.slide .carousel-caption{
  margin-bottom: 15%;
}
.slide img{
  width: 100%;
  height: 700px;
}
.footer{
  background-color: gray;
  color: white;
  margin-top: 4%;
}
.upload_file{
  color:red;
  background-color: skyblue;
  text-shadow: 1px 1px 1px red;
}
.upload{
  text-shadow: 1px 1px 1px red;
}
.cards{
  margin-top: -5%;
}
.cards .card{
  height: 300px;
  color:white;
  border-radius: 0.5rem;
  background-color: #2a6da3 ;
  text-align: center;
}
.cards .campus{
 background-color:#0000cd;
}
.cards .upto{
 background-image: url('images/back-2.jpeg');
background-repeat: no-repeat;
}
.university{
  width: 100%;
  height: auto;
  background-color: #F5F5DC;
  color: #101002;
  margin: 0 auto;
 
 
}
.university img{
  width: 100px;
  height: 100px;
  border-radius: 50%;

}

.chancellor{
width: 70%;

}
.chancellor img{
margin:0 0 9% 0;

}
.chancellor .chancellor_text{
background-color: red;
float: right;

 
}
.mission{
  text-align: center;
}
.vission{

  text-align: center;
}


.chan {

  margin-top: -6%;
}
.message img{
  height: 100px;
}
.news img{
  height: 340px;
}
.all_box .hostel{
border-radius: 0.5rem;
box-shadow: -3px -3px 3px gray;
font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
font-style: normal;
color: white;

}

</style>
</head>
<body>

<?php   


   $connc = mysqli_connect("localhost","root","","file-management");
   if(!$connc){
    die("Couldn't connect to Database server".mysqli_connect_error());  

   }

   $query  = "SELECT * FROM files";  
   $result  = mysqli_query($connc,$query);  
   if(mysqli_num_rows($result) > 0){
      while($rows = mysqli_fetch_assoc($result)){
      $name = $rows['name'];
      } 
   };
  
  
  ?>

<div class="header_p d-flex bg-primary justify-content-center py-1">
  <h4 class="p-2 fs-2 text-info">Notics</h4>
<p class="px-3 text-center fs-5 " id="p">German University Bangladesh</p>

</div>
<div class="row logo">
<div class="container text-center ">
  <div class="row">
    <div class="col-lg-1">
    <img src="images/gub.png" class="img-fluid img-thumbnail">
    </div>
    <div class="col-lg-9">
    <h2 class="text-center  display-2 font-monospace">German University Bangladesh </h2>
    <p class="text-danger font-monospace">Approved by the Government and UGC of Bangladesh</p>
    </div>
    <div class="col-lg-2">

      <p><i class="fa-solid fa-phone"></i>+8801782642544</p>
      <p><i class="fa-solid fa-phone"></i>+8801782642544</p>
       <p><i class="fa-solid fa-phone"></i>+8801782642544</p>
    </div>
  </div>
</div>
</div>
  
 
  <!-- navbar start -->
   <nav class="navbar navbar-expand-lg navbar-light  bg-secondary sticky-top fs-2">
  <div class="container-fluid ">
    <a class="navbar-brand fs-2 text-light" href="#">Gub</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  navbar " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item ">
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item text-light">
          <a class="nav-link  text-light" href="#">About</a>
        </li>
        <li class="nav-item text-light">
          <a class="nav-link  text-light" href="student.php">Student</a>
        </li>
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Notice
          </a>
          <ul class="dropdown-menu fs-2" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item " href="download.php?file=<?php echo $name ?>">CSE Regular</a></li>
            <li><a class="dropdown-item" href="download.php?file=<?php echo $name ?>">Food Science</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-light" href="#">Organaization</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- slider start -->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/back-1.jpeg" class=" w-100" alt="...">
      <div class="carousel-caption text">
         <h2 class="text-center display-2">Internation Day of Clean Air for Blue Skies</h2>
         <p class="text-wrap bd-highlight">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Saepe nihil quidem maxime eligendi adipisci inventore eos deserunt vitae
             , accusamus sit consequatur quasi rerum aliquam reprehenderit incidunt
              exercitationem facilis temporibus praesentium repellat quaerat magni ab
               iusto autem? Minima nulla nemo quas ea sed,
             ut harum at numquam fugit quam iste unde?</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/back-2.jpeg" class=" w-100" alt="...">
      <div class="carousel-caption text">
         <h2 class="text-center display-2">Academic BUlding & Hostels </h2>
         <p class="text-wrap bd-highlight">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Saepe nihil quidem maxime eligendi adipisci inventore eos deserunt vitae
             , accusamus sit consequatur quasi rerum aliquam reprehenderit incidunt
              exercitationem facilis temporibus praesentium repellat quaerat magni ab
               iusto autem? Minima nulla nemo quas ea sed,
             ut harum at numquam fugit quam iste unde?</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/back-3.jpeg" class=" w-100" alt="...">
      <div class="carousel-caption text">
         <h2 class="text-center display-2">Orientation Program</h2>
         <p class="text-wrap bd-highlight">Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Saepe nihil quidem maxime eligendi adipisci inventore eos deserunt vitae
             , accusamus sit consequatur quasi rerum aliquam reprehenderit incidunt
              exercitationem facilis temporibus praesentium repellat quaerat magni ab
               iusto autem? Minima nulla nemo quas ea sed,
             ut harum at numquam fugit quam iste unde?</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- slider stop  -->

<div class="container-fluid cards">
  <div class="row">
    <div class="col">
    <div class="card w-100 campus" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Campus</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card w-100 upto" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">upto 100%</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card w-100 teachers" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">Expert Teachers</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
  </div>
</div>


<!-- university start  -->
<div class="container-fluid my-4 university" id="university">
  <div class="row">
    <h4 class="text-dark">Wellcome To</h4>
    <h1 class="text-primary">German University Bangladesh</h1>
    <div class="col-lg-6">
      <div class="d-flex justify-content-center">
        <img src="images/chanchallor.jpg">
          <div class="mx-3">
          <h4>Mission </h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Possimus doloremque aspernatur voluptates eaque explicabo 
           repellat, voluptatem cupiditate aliquam rem! Repellat excepturi 
           inventore, vel magni cum dolore in numquam. Assumenda?</p>
          </div>
    </div>
    <div class="d-flex justify-content-center my-5 ">
        <img src="images/chanchallor.jpg">
          <div class="mx-3">
          <h4>Mission </h4>
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
           Possimus doloremque aspernatur voluptates eaque explicabo 
           repellat, voluptatem cupiditate aliquam rem! Repellat excepturi 
           inventore, vel magni cum dolore in numquam. Assumenda?</p>
          </div>
    </div>
    
    
    </div>
   
    <div class="col-lg-6">
      <div class="multiple-image-uni">
        <div class="chanchallor d-flex justify-content-center ">
        <img src="images/chanchallor.jpg">
          <div class="mx-5">
          <h4 class="">Hamid Khan</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quas est sapiente minima laudantium illo nobis praesentium blanditiis ratione? Quaerat.</p>
          </div>
        </div>
        <div class="chanchallor d-flex justify-content-center my-3">
        <img src="images/1.png" class="">
          <div class="mx-5">
          <h4 class="">Josep Khan</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quas est sapiente minima laudantium illo nobis praesentium blanditiis ratione? Quaerat.</p>
          </div>
        </div>
        <div class="chanchallor d-flex justify-content-center">
        <img src="images/2.jpg">
          <div class="mx-5">
          <h4 class="">Hamid Khan</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quas est sapiente minima laudantium illo nobis praesentium blanditiis ratione? Quaerat.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- university stop point  -->

<div class="container-fluid  all_box">
  <div class="row">
    <div class="col-lg-3  " >
      <div class="library  p-2"id="library">
        <h2>LIbary</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est facere nulla, officiis consequuntur vitae eaque deserunt fugit dolores in soluta nostrum ducimus deleniti repellat animi quis consectetur consequatur doloribus aut obcaecati pariatur veniam atque rem provident. Harum incidunt temporibus nemo eos aspernatur, assumenda tempora impedit iusto unde illum porro autem.</p>
      </div>
    </div>
    <div class="col-lg-3">
    <div class="labrotory bg-info p-2">
        <h2>LIbary</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est facere nulla, officiis consequuntur vitae eaque deserunt fugit dolores in soluta nostrum ducimus deleniti repellat animi quis consectetur consequatur doloribus aut obcaecati pariatur veniam atque rem provident. Harum incidunt temporibus nemo eos aspernatur, assumenda tempora impedit iusto unde illum porro autem.</p>
      </div>
    </div>
    <div class="col-lg-3">
    <div class="hostel bg-primary p-2">
        <h2>LIbary</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est facere nulla, officiis consequuntur vitae eaque deserunt fugit dolores in soluta nostrum ducimus deleniti repellat animi quis consectetur consequatur doloribus aut obcaecati pariatur veniam atque rem provident. Harum incidunt temporibus nemo eos aspernatur, assumenda tempora impedit iusto unde illum porro autem.</p>
      </div>
    </div>
    <div class="col-lg-3">
    <div class="students bg-info p-2">
        <h2>LIbary</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est facere nulla, officiis consequuntur vitae eaque deserunt fugit dolores in soluta nostrum ducimus deleniti repellat animi quis consectetur consequatur doloribus aut obcaecati pariatur veniam atque rem provident. Harum incidunt temporibus nemo eos aspernatur, assumenda tempora impedit iusto unde illum porro autem.</p>
      </div>
    </div>
  </div>
</div>


<!-- messsage start -->
<div class="container-fluid message p-3 mt-2">
  <div class="row">
    <div class="row">
    <div class="col-lg-6">
    <h2>MESSAGE FROM THE Chancellor</h2>
    <div class="d-flex justify-content-end">
    <img src="images/1.png" >
    <p class="p-2" >
It's important to note that the higher education landscape in 
Bangladesh is continuously evolving, with new universities and 
institutions being established and existing ones expanding their programs. The quality of education can vary, so students should research and choose their institutions carefully based on their academic interests and career goals. Additionally, some universities in Bangladesh offer programs in both Bengali and English, so language preference is also a consideration for international students. 
It's impor... </p>
    </div>
    <a href="#">more</a>

    </div>
    <div class="col-lg-6">
    <h2>MESSAGE FROM THE Chancellor</h2>
    <div class="d-flex justify-content-end">
    <img src="images/1.png" >
    <p class="p-2" >
It's important to note that the higher education landscape in 
Bangladesh is continuously evolving, with new universities and 
institutions being established and existing ones expanding their programs. The quality of education can vary, so students should research and choose their institutions carefully based on their academic interests and career goals. Additionally, some universities in Bangladesh offer programs in both Bengali and English, so language preference is also a consideration for international students. 
It's impor... </p>
    </div>
    <a href="#">more</a>

    </div>
    </div>
    
    <div class="row">
    <div class="col-lg-6">
    <h2>MESSAGE FROM THE Chancellor</h2>
    <div class="d-flex justify-content-end">
    <img src="images/1.png" >
    <p class="p-2" >
It's important to note that the higher education landscape in 
Bangladesh is continuously evolving, with new universities and 
institutions being established and existing ones expanding their programs. The quality of education can vary, so students should research and choose their institutions carefully based on their academic interests and career goals. Additionally, some universities in Bangladesh offer programs in both Bengali and English, so language preference is also a consideration for international students. 
It's impor... </p>
    </div>
    <a href="#">more</a>

    </div>
    <div class="col-lg-6">
    <h2>MESSAGE FROM THE Chancellor</h2>
    <div class="d-flex justify-content-end">
    <img src="images/1.png" >
    <p class="p-2" >
It's important to note that the higher education landscape in 
Bangladesh is continuously evolving, with new universities and 
institutions being established and existing ones expanding their programs. The quality of education can vary, so students should research and choose their institutions carefully based on their academic interests and career goals. Additionally, some universities in Bangladesh offer programs in both Bengali and English, so language preference is also a consideration for international students. 
It's impor... </p>
    </div>
    <a href="#">more</a>

    </div>
  </div>
   
  </div>

</div>
<!-- message stop -->
<div class="row mt-4 news">
  <img src="images/back-1.jpeg" class="col-md-6 float-md-start mb-3 ms-md-3" alt="...">
  <div class="col">  
  <div class="notics-text ">
<hr><h1 class="">Latest News</h1>
  <a href="#">chedule (Revised) for Final Examinations of Winter Semester 2023 </a>
   <hr>
   <a href="#">Office Order-Office Timing During Ramadan, 2024 </a>
   <hr>

  <a href="#">chedule (Revised) for Final Examinations of Winter Semester 2023 </a>
   <hr>
   <a href="#">Office Order-Office Timing During Ramadan, 2024 </a>
   <hr>
   <button class="float-center w-100">View All Notices</button>
</div>
  </div>


</div>








   <!-- navbar stop -->
    <div class="file-management bg-warning  fs-4  p-3 text-center">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="upload" class="upload">Upload File</label>
      <input class="upload_file" type="file" name="file" required>
      <button class="btn btn-primary" type="submit" name="upload">Uploads</button>

    </form>
    </div>

    

<div class="container-fluid p-3 text-center footer">
  <div class="row">
    <div class="col-lg-6">
     <h1>German University Bangladesh</h1>
     <p>38 T & T Road,Telepara,Chandna Chowrasta,,Joydebpur,Gazipur - 1702. Bangladesh</p>
     <p><i class="fa-solid fa-phone"></i>01782642544</p>
     <p><i class="fa-regular fa-envelope"></i>remonkhan998@gmail.com</p>
     <p><i class="fa-solid fa-globe"></i>www.allinone.shop</p>
    </div>
    <div class="col-lg-3">
     <h3>Usefull LInks</h3>
     <ul>
      <li>UGC</li>
      <li>IGUB</li>
      <li>BAC</li>
      <li>UGC</li>
     </ul>
    </div>
    <div class="col-lg-3">
     <h3>Opening Hours</h3>
     <table>
      <theader>
        <tr>
          <td>Monday</td>
          <td>Monday</td>
          <td>Monday</td>
        </tr>
      </theader>
      <tbody>
        <tr>
          <td>6.00-8.00</td>
          <td>6.00-8.00</td>
          <td>6.00-8.00</td>
        </tr>
      </tbody>
     </table>
</div>
  
  </div>
 
</div>




   
    <!-- cdn link bootstrap 5 start -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>

    <!-- cdn link bootstrap 5 end -->
    <script src="index.js"></script>
</body>
</html>
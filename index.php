<!DOCTYPE html>
<html lang="en">

<head>
    <title>Photo gallery</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Photo Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"  data-bs-toggle="collapse" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#nature">Nature</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#architecture">Architechture</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#street">Street</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div id="carouselExampleFade" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/nature2.jpg" class="d-block w-100" alt="Nature Photography">
    </div>
    <div class="carousel-item">
      <img src="images/architecture1.jpg" class="d-block w-100" alt="Architecture Photography">
    </div>
    <div class="carousel-item">
      <img src="images/street2.jpg" class="d-block w-100" alt="Street Photography">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<a id="nature">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Nature Photography</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature2.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/nature3.jpg" class="img-fluid" alt="">
    </div>
</section>
</a>

<a id="architecture">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Architecture Photography</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture1.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture2.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/architecture3.jpg" class="img-fluid" alt="">
    </div>
</section>
</a>
<a id="street">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">street Photography</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/street1.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/street2.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src="images/street3.jpg" class="img-fluid" alt="">
    </div>
</section>
</a>
<a id="contact">
<section class="y-4">
    <div class="py-4">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="about.php" method="post" >
            <div class="for-group">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="for-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="for-group">
                <label>Mobile</label>
                <input type="text" name="mobile" class="form-control">
            </div>
            <button type="Submit" class="btn btn-success mt-5 my-5">Submit</button>
        </form>
    </div>
</section>
</a>
<a id="about">
<section class="y-4">
    <div class="py-4">
        <h2 class="text-center">About</h2>
    </div>
    <div class="container-fluid">
        <h3 class="text-center">MEH</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, minima provident! Quibusdam voluptate veniam quidem nisi, perspiciatis fugit harum illo aliquid consequuntur assumenda magnam sequi vitae? Saepe enim dicta aspernatur.</p>
    </div>
</section>
    <a id="contact"></a>



    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>



</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Accueil</title>
</head>
<body>
<?php   

include("./includes/header.php");
?>
<!--Navbar-->

     
<!--Main Navigation-->

<!--Main layout-->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img_ephad.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img_ephad.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img_ephad.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    <!--Section: Best Features-->
    <section id="best-features" class="text-center">

        <!-- Heading -->
        <h2 class="mb-5 font-weight-bold"></h2>

        <!--Grid row-->
        <div class="row d-flex justify-content-center mb-4">

            <!--Grid column-->
            <div class="col-md-8">

                <!-- Description -->
                <p class="grey-text">Presentation de l'EHPAD.</p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-4 mb-5">
                <i class="fa fa-camera-retro fa-4x orange-text"></i>
                <h4 class="my-4 font-weight-bold">case 1</h4>
                <p class="grey-text">text text text  .</p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-1">
                <i class="fa fa-heart fa-4x orange-text"></i>
                <h4 class="my-4 font-weight-bold">case 2 </h4>
                <p class="grey-text">text text text </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-4 mb-1">
                <i class="fa fa-bicycle fa-4x orange-text"></i>
                <h4 class="my-4 font-weight-bold">case 3 </h4>
                <p class="grey-text">text text text </p>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </section>
    <!--Section: Best Features-->

    <div class="organigramme">
        <img src="organigramme.png" class="img-fluid" alt="">
    </div>
    <!--Section: Examples-->
    


</div>

<!--Main layout-->
<?php include("./includes/footer.php") ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>
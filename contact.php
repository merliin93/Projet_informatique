<?php 
require_once('./includes/header.php')


?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <div class="col-lg-5 col-md-12">
        <!-- Form contact -->
        <form class="p-5 grey-text">
            <div class="md-form form-sm"> <i class="fa fa-user prefix"></i>
                <input type="text" id="form3" class="form-control form-control-sm">
                <label for="form3">Votre NOM Prénom</label>
            </div>
            <div class="md-form form-sm"> <i class="fa fa-envelope prefix"></i>
                <input type="text" id="form2" class="form-control form-control-sm">
                <label for="form2">Votre email</label>
            </div>
            <div class="md-form form-sm"> <i class="fa fa-pencil prefix"></i>
                <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4"></textarea>
                <label for="form8">Votre message</label>
            </div>
            <div class="text-center mt-4">
                <button class="btn btn-primary">Envoyer <i class="fa fa-paper-plane-o ml-1"></i></button>
            </div>
        </form>
        <!-- Form contact -->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7 col-md-12">

        <!--Grid row-->
        <div class="row text-center">

            <!--Grid column-->
            <div class="col-lg-4 col-md-12 mb-3">

                <p><i class="fa fa-map fa-1x mr-2 grey-text"></i>16 Chem. de venteuilh, 47430 Le Mas-d'Agenais</p>

            </div>               
            
            <!--Grid column-->
            <div class="col-lg-4 col-md-6 mb-3">

                <p><i class="fa fa-phone fa-1x mr-2 grey-text"></i>tel: 05 53 89 57 57</p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <iframe width="100%" height="300px" frameborder="0" allowfullscreen src="https://framacarte.org/fr/map/carte-sans-nom_125526?scaleControl=false&miniMap=false&scrollWheelZoom=false&zoomControl=true&allowEdit=false&moreControl=false&searchControl=null&tilelayersControl=null&embedControl=null&datalayersControl=false&onLoadPanel=undefined&captionBar=false"></iframe>

    </div>
    <!--Grid column-->

    <?php include("./includes/footer.php") ?>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

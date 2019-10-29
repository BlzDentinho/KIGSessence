<!DOCTYPE html>
<html>

<head>
    <title>KIGSessence</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <?php include("includes/header.php"); ?>
    <style>
        .linha {
            border: solid 1px red;
        }

        .linha-palco {
            margin-top: 50px;
        }

        .linha-palco1 {
            height: 270px;
        }

        .borda-w {
            border: solid 1px white;
        }
    </style>
</head>

<body>



    <?php
    include('includes/menu.php');
    ?>

    <div class="container text-center">

    </div>
    </div>

    <div class="container">
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-interval="10000">
                    <img src="assets\images\Perfumehome2.png" class="d-block" width="1100" height="520" alt="...">
                </div>
                <div class="carousel-item" data-interval="2000">
                    <img src="assets\images\Perfumehome3.png" class="d-block " width="1100" height="520" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets\images\Perfume.jpg" class="d-block" width="1100" height="520" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>





    <div class="container linha-palco text-center">
        <div class="row">
            <div class="col-sm-4 linha linha-palco1">Perfumes
            </div>

            <div class="col-sm-4 linha borda-w">Marcas</div>
            <div class="col-sm-4 linha linha-palco1">Ranking</div>
            
        </div>

        <div class="row">
            <div class="col-sm-12 col-sm-12 linha linha-palco1 borda-w"></div>
        </div>

        <div class="row">
            <div class="col-sm-2 linha linha-palco1">Linha 1</div>
            <div class="col-sm-4 linha borda-w">Linha 2</div>
            <div class="col-sm-2 linha linha-palco1">Linha 3</div>
            <div class="col-sm-4 linha borda-w">Linha 4</div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-sm-12 linha linha-palco1 borda-w"></div>
        </div>

    
    </div>

    <div class="embed-responsive embed-responsive-16by9 container padding">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wCozFRta-jk" allowfullscreen></iframe>
</div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
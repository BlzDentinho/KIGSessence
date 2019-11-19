<!DOCTYPE html>
<html>

<head>
    <title>KIGSessence</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">


    <?php include("includes/header.php"); ?>

    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                interval: 6000
            })
        });
    </script>
</head>

<body>

    <?php
    include('includes/menu.php');
    ?>
    <div class="container">

        <h1 class="text-center mt-5" style="font-size:30">Top 10 - Perfumes mais votados</h1>
        <div class="mt-5">
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">

                        <div class="card-deck">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="assets\images\Perfume4.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title cor1"><img src="assets\images\Nota1.png"> - Black Orchid</h5>
                                    <p class="card-text cor1">Tom Ford<br>Perfume Feminino</p>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <a href="telaperfume.php"><img class="card-img-top" src="assets\images\Perfume1.jpg"></a>
                                <div class="card-body">
                                    <h5 class="card-title cor1"><img src="assets\images\Nota2.png"> - Olympéa Intense</h5>
                                    <p class="card-text cor1">Paco Rabanne<br>Perfume Feminino</p>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="assets\images\Perfume2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title cor1"><img src="assets\images\Nota3.png"> - L'interdit Parfum</h5>
                                    <p class="card-text cor1">Givenchy<br>Perfume Feminino</p>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="assets\images\Perfume3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title cor1"><img src="assets\images\Nota3.png"> - Light Blue</h5>
                                    <p class="card-text cor1">Dolce & Gabbana<br>Perfume Feminino</p>

                                </div>
                            </div>
                        </div>

                    </div>


                    <div class="carousel-item cor1" data-interval="2000">
                        <div class="card-deck">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="assets\images\Perfume44.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="assets\images\Nota1.png"> - Uomo Intense</h5>
                                    <p class="card-text">Valentino<br>Perfume Masculino</p>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="assets\images\Perfume11.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="assets\images\Nota3.png"> - The One</h5>
                                    <p class="card-text">Dolce & Gabbana<br>Perfume Masculino</p>
                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="assets\images\Perfume22.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="assets\images\Nota4.png"> - Armani Code</h5>
                                    <p class="card-text">Giorgio Armani<br>Perfume Masculino</p>

                                </div>
                            </div>
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top" src="assets\images\Perfume33.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title"><img src="assets\images\Nota5.png"> - Sauvage</h5>
                                    <p class="card-text">Dior<br>Perfume Masculino</p>

                                </div>
                            </div>
                        </div>

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






        <h1 class="text-center mt-5" style="font-size:30">Perfumes masculinos mais votados</h1>
            <div class="mt-5">
                <div id="carouselExampleInterval1" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="10000">

                            <div class="card-deck">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="assets\images\212vip.png" style="width: 230px" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title cor1"><img src="assets\images\Nota1.png"> - 212 VIP</h5>
                                        <p class="card-text cor1">Carolina Herrera<br>Perfume Masculino</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <a href="telaperfume.php"><img class="card-img-top" src="assets\images\tomfordM.png" style="width: 190px"></a>
                                    <div class="card-body">
                                        <h5 class="card-title cor1"><img src="assets\images\Nota3.png"> - Tabaco Vanille</h5>
                                        <p class="card-text cor1">Tom Ford<br>Perfume Masculino</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="assets\images\malbecverl.png" style="width: 230px" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title cor1"><img src="assets\images\Nota4.png"> - Malbec Colonia Verl</h5>
                                        <p class="card-text cor1">Boticário<br>Perfume Maculino</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="assets\images\aventuscreed.png" style="width: 190px" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title cor1"><img src="assets\images\Nota5.png">Aventus by Creed</h5>
                                        <p class="card-text cor1">Eau de Parfum<br>Perfume Masculino</p>

                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="carousel-item cor1" data-interval="2000">
                            <div class="card-deck">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="assets\images\Perfume44.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><img src="assets\images\Nota1.png"> - Uomo Intense</h5>
                                        <p class="card-text">Valentino<br>Perfume Masculino</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="assets\images\Perfume11.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><img src="assets\images\Nota3.png"> - The One</h5>
                                        <p class="card-text">Dolce & Gabbana<br>Perfume Masculino</p>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="assets\images\Perfume22.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><img src="assets\images\Nota4.png"> - Armani Code</h5>
                                        <p class="card-text">Giorgio Armani<br>Perfume Masculino</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="assets\images\Perfume33.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><img src="assets\images\Nota5.png"> - Sauvage</h5>
                                        <p class="card-text">Dior<br>Perfume Masculino</p>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleInterval1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleInterval1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>







            <h1 class="text-center mt-5" style="font-size:30">Perfumes femininos mais votados</h1>
                <div class="mt-5">
                    <div id="carouselExampleInterval2" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="10000">

                                <div class="card-deck">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="assets\images\Perfume4.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title cor1"><img src="assets\images\Nota1.png"> - Black Orchid</h5>
                                            <p class="card-text cor1">Tom Ford<br>Perfume Feminino</p>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <a href="telaperfume.php"><img class="card-img-top" src="assets\images\Perfume1.jpg"></a>
                                        <div class="card-body">
                                            <h5 class="card-title cor1"><img src="assets\images\Nota2.png"> - Olympéa Intense</h5>
                                            <p class="card-text cor1">Paco Rabanne<br>Perfume Feminino</p>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="assets\images\Perfume2.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title cor1"><img src="assets\images\Nota3.png"> - L'interdit Parfum</h5>
                                            <p class="card-text cor1">Givenchy<br>Perfume Feminino</p>

                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="assets\images\Perfume3.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title cor1"><img src="assets\images\Nota3.png"> - Light Blue</h5>
                                            <p class="card-text cor1">Dolce & Gabbana<br>Perfume Feminino</p>

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="carousel-item cor1" data-interval="2000">
                                <div class="card-deck">
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="assets\images\Perfume44.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><img src="assets\images\Nota1.png"> - Uomo Intense</h5>
                                            <p class="card-text">Valentino<br>Perfume Masculino</p>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="assets\images\Perfume11.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><img src="assets\images\Nota3.png"> - The One</h5>
                                            <p class="card-text">Dolce & Gabbana<br>Perfume Masculino</p>
                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="assets\images\Perfume22.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><img src="assets\images\Nota4.png"> - Armani Code</h5>
                                            <p class="card-text">Giorgio Armani<br>Perfume Masculino</p>

                                        </div>
                                    </div>
                                    <div class="card" style="width: 18rem;">
                                        <img class="card-img-top" src="assets\images\Perfume33.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><img src="assets\images\Nota5.png"> - Sauvage</h5>
                                            <p class="card-text">Dior<br>Perfume Masculino</p>

                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>





    </div>





    <?php include("includes/footer.php"); ?>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>

</html>
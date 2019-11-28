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

<body style="overflow-x:hidden">

    <?php
    include('includes/menu.php');
    ?>

    <div class="container-fluid">

        <div class="row">
            <div class="col-10">

                <div class="container linha-palco cor1">
                    <div class="row">
                        <div class="col-sm-12 text-center linha-palco1">
                            <h1>Missão</h1>
                            <p>"Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>

                        <div class="col-sm-12 text-center linha-palco1">
                            <h1>Sobre o Site KIGSessence</h1>
                            <p>Augue neque gravida in fermentum et sollicitudin ac orci phasellus. Laoreet sit amet cursus sit amet dictum sit amet justo. Pharetra diam sit amet nisl suscipit. Ipsum dolor sit amet consectetur adipiscing elit ut aliquam. Vitae tempus quam pellentesque nec nam. Aliquam eleifend mi in nulla posuere. Facilisi morbi tempus iaculis urna id volutpat lacus laoreet non. Quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor. Odio tempor orci dapibus ultrices in iaculis nunc. Feugiat nisl pretium fusce id velit ut tortor pretium. Et netus et malesuada fames ac turpis egestas integer. Scelerisque varius morbi enim nunc faucibus.</p>
                        </div>

                        <div class="col-sm-12 text-center linha-palco1">
                            <h1>KIGSessence - Nosso Time</h1>
                            <div class="card float-left" style="width: 17rem;">
                                <img src="assets/images/pessoa1.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Sandro paulo</b></h5>
                                    <p class="card-text">Sobre Sandro paulo</p>
                                </div>
                            </div>
                            <div class="card float-left" style="width: 17rem;">
                                <img src="assets/images/pessoa1.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Ivan Carlos</b></h5>
                                    <p class="card-text">Sobre Ivan Carlos</p>
                                </div>
                            </div>
                            <div class="card float-left" style="width: 17rem;">
                                <img src="assets/images/pessoa1.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Gabriel Ricardo</b></h5>
                                    <p class="card-text">Sobre Gabriel Ricardo</p>
                                </div>
                            </div>
                            <div class="card float-left" style="width: 17rem;">
                                <img src="assets/images/pessoa1.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Gabriel Maccari</b></h5>
                                    <p class="card-text">Sobre Gabriel Maccari</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

            <div class="col-2">

                <div class="sidebar-item">
                    <div class="make-me-sticky">
                        <img alt="" class="i-amphtml-fill-content i-amphtml-replaced-content" decoding="async" img src="assets\images\propaganda1.png">
                    </div>
                </div>

            </div>

        </div>
    </div>


    <?php include("includes/footer.php"); ?>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
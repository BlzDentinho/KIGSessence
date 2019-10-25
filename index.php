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


    <div class="container linha-palco text-center">
        <div class="row">
            <div class="col-sm-2 linha linha-palco1">Linha 1
            </div>

            <div class="col-sm-4 linha borda-w">Linha 2</div>
            <div class="col-sm-2 linha linha-palco1">Linha 3</div>
            <div class="col-sm-4 linha borda-w">Linha 4</div>

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

        <div class="row">
            <div class="col-sm-2 linha linha-palco1">Linha 1</div>
            <div class="col-sm-4 linha borda-w">Linha 2</div>
            <div class="col-sm-2 linha linha-palco1">Linha 3</div>
            <div class="col-sm-4 linha borda-w">Linha 4</div>
        </div>
    </div>

</body>

</html>
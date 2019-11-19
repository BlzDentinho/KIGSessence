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

    <div>
        <h1 class=".rank mt-5">Top 10 - Perfumes mais votados</h1>



    </div>
    <div>
    <h2 class=".rank mt-5">Perfumes masculinos mais votados</h1>
  



    </div>
    <div>
    <h3 class=".rank mt-5">Perfumes femininos mais votados</h1>
  



    </div>





    <?php include("includes/footer.php"); ?>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




</body>

</html>
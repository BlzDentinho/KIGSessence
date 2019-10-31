<!DOCTYPE php>
<html>


<head>
    <title>formulário</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/popup.css">


</head>

<body>
    <form id="form-id" action="../../includes/executaform.php" method="post">
        <div class="topmenu text-center">
            <div class="margin">Nome <input type="text" name="nome" class="color-text1"></div>
            <div class="margin">Sobrenome <input type="text" name="snome" class="color-text1"></div>
            <div class="margin">E-mail <input type="text" name="email" class="color-text1"><br></div>
            <div class="margin">Senha <input type="text" name="senha" class="color-text1"><br></div>
            <div class="margin">Confirmar Senha <input type="text" name="csenha" class="color-text1"><br></div>
            <a href="#" onclick="document.getElementById('form-id').submit();" class="btn btn-primary btn-lg" role="button">Salvar</a><br>
            <img src="../../assets/images/logo.png" class="img-fundo text-center">
        </div>
    </form>



    <script src="assets/js/generic.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>




</html>
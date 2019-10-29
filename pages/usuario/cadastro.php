<!DOCTYPE php>

<html>

<head>
    <title>Pagina pop up</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/popup.css">


</head>

<body>
    <form action="executaform.php" method="post">
        <div class="text-center color-text">
            <div class="text-center margin text-center">Login <input type="text" name="login" class="color-text"><br></div>
            <div class="text-center margin text-center">Senha <input type="text" name="senha" class="color-text"><br></div>
            <div class="text-center margin text-center">Confirmar Senha <input type="text" name="csenha" class="color-text"><br></div>
            <div class="text-center margin text-center">E-mail <input type="text" name="email" class="color-text"><br></div>
            <a href="#" onclick="" class="btn btn-primary btn-lg text-center" role="button">Salvar</a><br>

        </div>
    </form>
    <script src="assets/js/generic.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>

</html>
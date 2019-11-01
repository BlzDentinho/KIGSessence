<!DOCTYPE php>
<html>


<head>
    <title>formulário</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/popup.css">

</head>

<body>
    <div>
        <form id="form-id" action="../../includes/executaform.php" method="post">
            <div class="row margin1">
                <div class="col-md-2 color-text1">Nome <input type="text" name="nome"></div>
                <div class="col-md-2 color-text1">Sobrenome <input type="text" name="snome"></div>
                <div class="col-md-4 color-text1"></div>
                <div class="col-md-4 color-text1"></div>
            </div>
            <div class="row margin1">
                <div class="col-md-4 color-text1">E-mail <input type="text" name="email"></div>
                <div class="col-md-3 color-text1"></div>
                <div class="col-md-3 color-text1"></div>
                <div class="col-md-2 color-text1"></div>
            </div>
            <div class="row margin1">
                <div class="col-md-3 color-text1">Senha <input type="text" name="senha"></div>
                <div class="col-md-3 color-text1">Confirmar Senha <input type="text" name="csenha"></div>
                <div class="col-md-3 color-text1"></div>
                <div class="col-md-3 color-text1"></div>
            </div>
            <div class="row">
                <div><a href="#" onclick="document.getElementById('form-id').submit();" class="col-md-12 btn btn-primary btn-lg" role="button">Salvar</a><br></div>
            </div>
            <div class="row">
                <div class="col-md-3 color-text1">
                    <img src="../../assets/images/logo.png" class="img-fundo">
                </div>
                
            </div>
    </div>
    </form>



    <script src="assets/js/generic.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</body>




</html>
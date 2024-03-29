<!--    Made by Erik Terwan    -->
<!--   24th of November 2015   -->
<!--        MIT License        -->

<head>
    <link href="../assets/css/popup.css">

    <script>
        function abrir() {
            href = "pages/usuario/pop.php";
            window.open(href, 'janela', 'width=660, height=510, top=100, left=699,scrollbars=yes, status=no, toolbar=no, location=no, menubar=no, resizable=no, fullscreen=no')
        }

        function abrir1() {
            href = "cadastro.php"
            window.open(href, 'janela', 'width=660, height=510, top=100, left=699,scrollbars=yes, status=no, toolbar=no, location=no, menubar=no, resizable=no, fullscreen=no')
        }
    </script>
</head>
<nav role="navigation">

    <div class="cor-fundo">
        <div class="row no-gutters">
            <div class="col-md-2 linha borda-w text-center">
                <a href="http://localhost/KIGSessence/#"><img src="\kigsessence\assets\images\logo.png" width="150" height="150" class="d-inline-block align-top tamanho-fundo" alt=""></a>
            </div>
            <div class="col-md-8 linha borda-w">
                <form class="margin1">
                    <div class="form-group">
                        <input type="text" class="form-control" id="" aria-describedby="" placeholder="Pesquisa">
                    </div>
                </form>
            </div>
            <div class="col-md-2 linha borda-w margin2">
                <button type="button" class="btn btn-success" onclick="abrir()">Login</button>
            </div>
        </div>
    </div>

    <div id="menuToggle">
        <!--
      A fake / hidden checkbox is used as click reciever,
      so you can use the :checked selector on it.
      -->
        <input type="checkbox" />

        <!--
      Some spans to act as a hamburger.
      
      They are acting like a real hamburger,
      not that McDonalds stuff.
      -->
        <span></span>
        <span></span>
        <span></span>

        <!--
      Too bad the menu has to be inside of the button
      but hey, it's pure CSS magic.
      -->
        <ul id="menu">
            
            <a href="#">
                <div class="dropdown-open2 menu-item">
                <a href="marcas.php"><li>Marcas</li></a>
                
                </div>
            </a>
            <a href="novidades.php">
                <div class="dropdown-open1 menu-item">
                    <li>Novidades</li>
                </div>
            </a>
            <a href="#">
                <div class="dropdown-open menu-item">
                <a href="ranking.php"><li>Melhores perfumes</li></a>
                </div>
            </a>
            <a href="sobre.php" target="_self">
                <li>Sobre nós</li>
            </a>
        </ul>
    </div>
</nav>
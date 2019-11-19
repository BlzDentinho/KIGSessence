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
                <div class="dropdown-open3 menu-item">
                    <li>Perfumes</li>
                    <ul class="dropdown-menu3" style="display:none">
                        <a href="../busca.php">
                            <li>Perfume 1</li>
                        </a>
                        <a href="#">
                            <li>Perfume 2</li>
                        </a>
                        <a href="#">
                            <li>Perfume 3</li>
                        </a>
                    </ul>
                </div>
            </a>
            <a href="#">
                <div class="dropdown-open2 menu-item">
                    <li>Marcas</li>
                    <ul class="dropdown-menu2" style="display:none">
                        <a href="#">
                            <li>Marca 1</li>
                        </a>
                        <a href="#">
                            <li>Marca 2</li>
                        </a>
                        <a href="#">
                            <li>Marca 3</li>
                        </a>
                    </ul>
                </div>
            </a>
            <a href="#">
                <div class="dropdown-open1 menu-item">
                    <li>Relevaâncias mais vendidas</li>
                    <ul class="dropdown-menu1" style="display:none">
                        <a href="#">
                            <li>Perfume relevante 1</li>
                        </a>
                        <a href="#">
                            <li>Perfume relevante 2</li>
                        </a>
                        <a href="#">
                            <li>Perfume relevante 3</li>
                        </a>
                    </ul>
                </div>
            </a>
            <a href="#">
                <div class="dropdown-open menu-item">
                    <li>Melhores perfumes</li>
                    <ul class="dropdown-menu4" style="display:none">
                        <a href="#">
                            <li>Perfume relevante 1</li>
                        </a>
                        <a href="#">
                            <li>Perfume relevante 2</li>
                        </a>
                        <a href="#">
                            <li>Perfume relevante 3</li>
                        </a>
                    </ul>
                </div>
            </a>
            <a href="" target="_blank">
                <li>Sobre nós</li>
            </a>
        </ul>
    </div>
</nav>
<!--    Made by Erik Terwan    -->
<!--   24th of November 2015   -->
<!--        MIT License        -->

<head>

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



    <div class="row">
        <div class="col-md-2 linha borda-w">
            <img src="assets\images\logo.png" width="150" height="150" class="d-inline-block align-top text-center" alt="">
        </div>
        <div class="col-md-8 linha borda-w">
            <form class="margin1">
                <div class="form-group">
                    <label>Pesquisa</label>
                    <input type="text" class="form-control tamanho" id="" aria-describedby="" placeholder="Pesquisa">
                </div>
            </form>
        </div>
        <div class="col-md-2 linha borda-w margin2">
            <button type="button" onclick="abrir()" class="btn btn-primary">Login</button>
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
                    <li>Perfumes <img src="../assets/images/flecha.svg" width="15px" height="15px" /> </li>
                    <ul class="dropdown-menu3" style="display:none">
                        <a href="#">
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
                    <li>Marcas <img src="../assets/images/flecha.svg" width="15px" height="15px" /> </li>
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
                    <li>Relevaâncias mais vendidas <img src="../assets/images/flecha.svg" width="15px" height="15px" /> </li>
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
                    <li>Melhores perfumes<img src="../assets/images/flecha.svg" width="15px" height="15px" /> </li>
                    <ul class="dropdown-menu" style="display:none">
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
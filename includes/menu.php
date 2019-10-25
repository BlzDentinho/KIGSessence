



    <!--    Made by Erik Terwan    -->
    <!--   24th of November 2015   -->
    <!--        MIT License        -->
    <nav role="navigation">


    <a class="navbar-brand" href="#">
            <img src="assets\images\logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            KIGSessence
        </a>

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
                    <div class="dropdown-open3">
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
                    <div class="dropdown-open2">
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
                    <div class="dropdown-open1">
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
                    <div class="dropdown-open">
                        <li>Lançamentos <img src="../assets/images/flecha.svg" width="15px" height="15px" /> </li>
                        <ul class="dropdown-menu" style="display:none">
                            <a href="#">
                                <li>Lançamento 1</li>
                            </a>
                            <a href="#">
                                <li>Lançamento 2</li>
                            </a>
                            <a href="#">
                                <li>Lançamento 3</li>
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


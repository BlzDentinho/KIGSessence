<!DOCTYPE html>
<html>

<head>
    <title>Aula 23-09</title>
    <meta charset="utf-8">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO">
    <link rel="stylesheet" href="../assets/css/menu.css">
    

    <script>
        $(document).ready(function() {
            debugger;
            $(".dropdown-open").hover(function() {

                debugger;
                $(".dropdown-menu").fadeIn();

            }, function() {

                $(".dropdown-menu").fadeOut();

            })


        });
        $(document).ready(function() {
            debugger;
            $(".dropdown-open1").hover(function() {

                debugger;
                $(".dropdown-menu1").fadeIn();

            }, function() {

                $(".dropdown-menu1").fadeOut();

            })


        });
        $(document).ready(function() {
            debugger;
            $(".dropdown-open2").hover(function() {

                debugger;
                $(".dropdown-menu2").fadeIn();

            }, function() {

                $(".dropdown-menu2").fadeOut();

            })


        });
        $(document).ready(function() {
            debugger;
            $(".dropdown-open3").hover(function() {

                debugger;
                $(".dropdown-menu3").fadeIn();

            }, function() {

                $(".dropdown-menu3").fadeOut();

            })


        });
    </script>

</head>

<body>

    <!--    Made by Erik Terwan    -->
    <!--   24th of November 2015   -->
    <!--        MIT License        -->
    <nav role="navigation">
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
                        <li>Perfumes</li>
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
                        <li>Marcas</li>
                        <ul class="dropdown-menu2" style="display:none">
                            <a href="#">
                                <li>AHDHUSADSA</li>
                            </a>
                            <a href="#">
                                <li>DSADSA</li>
                            </a>
                            <a href="#">
                                <li>DASDSA</li>
                            </a>
                        </ul>
                    </div>
                </a>
                <a href="#">
                    <div class="dropdown-open1">
                        <li>Relevaâncias mais vendidas</li>
                        <ul class="dropdown-menu1" style="display:none">
                            <a href="#">
                                <li>AHDHUSADSA</li>
                            </a>
                            <a href="#">
                                <li>DSADSA</li>
                            </a>
                            <a href="#">
                                <li>DASDSA</li>
                            </a>
                        </ul>
                    </div>
                </a>
                <a href="#">
                    <div class="dropdown-open">
                        <li>Lançamentos > </li>
                        <ul class="dropdown-menu" style="display:none">
                            <a href="#">
                                <li>AHDHUSADSA</li>
                            </a>
                            <a href="#">
                                <li>DSADSA</li>
                            </a>
                            <a href="#">
                                <li>DASDSA</li>
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

</body>

</html>
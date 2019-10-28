<link rel="stylesheet" href="assets/css/popup.css">
<link rel="stylesheet" href="assets/css/menu.css">

<script src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
<link rel="stylesheet" href="../assets/css/menu.css">
<link rel="stylesheet" href="..assets/css/home.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400|Open+Sans:300,400" rel="stylesheet">
<link rel="stylesheet" href="assets/css/menu.css">

<script>
    $(document).ready(function() {

        console.log('ready');
        $('.menu-item').hover(function(){
            console.log('Hover aqui');
            $(this).find('ul').fadeIn();
        }, function(){
            console.log('Hover out aqui');
            $(this).find('ul').fadeOut();
        });

        // jQuery(".dropdown-open").hover(function() {

        //     jQuery(".dropdown-menu4").fadeIn('slow');

        // }, function() {

        //     jQuery(".dropdown-menu4").fadeOut();

        // })


        // $(".dropdown-open1").hover(function() {

        //     $(".dropdown-menu1").fadeIn();

        // }, function() {

        //     $(".dropdown-menu1").fadeOut();

        // })


        // $(".dropdown-open2").hover(function() {


        //     $(".dropdown-menu2").fadeIn();

        // }, function() {

        //     $(".dropdown-menu2").fadeOut();

        // })


        // $(".dropdown-open3").hover(function() {


        //     $(".dropdown-menu3").fadeIn('slow');

        // }, function() {

        //     $(".dropdown-menu3").fadeOut();

        // })


    });
</script>
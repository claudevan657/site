<?php include 'config.php';?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>estilo/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css "   rel="stylesheet"  >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <meta name="description" content="descrição do meu site">
    <title>web site</title>
</head>

<body>
    <?php
$url = isset($_GET['url']) ? $_GET['url'] : 'home';

switch ($url) {
    case 'depoimentos':
        echo '<target target="depoimentos" />';
        break;

    case 'servicos':
        echo '<target target="servicos" />';
        break;
};

?>

    

    <header>
        <div class="center">
            <div class="logo left"><a href="">logomarca</a></div>
            <!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contatos</a></li>
                </ul>
            </nav>
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?> sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?> servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?> contato">Contatos</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
        <!--center-->
    </header>

    <?php

        if (file_exists('pages/' . $url . '.php')) {
            include 'pages/' . $url . '.php';
        } else {
            //erro
            if ($url != 'depoimentos' && $url != 'servicos') {
                include 'pages/erro-404.php';
            } else {
                include 'pages/home.php';
            }

        }

?>

    <footer>
        <p><?php echo date("Y"); ?> Todos os direitos reservados</p>
    </footer>

    <script src="<?php echo INCLUDE_PATH; ?>js/jquery-migrate-3.1.0.min.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/scripts.js"> </script>
    <?php
        if ($url == 'home' || $url == '') {
    ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/slides.js"></script>
     <?php }?>


   <!-- <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4'></script> -->
   <!--- <script src=" js/map.js"></script> --->


</body>

</html>
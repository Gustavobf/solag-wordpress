<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Domine&family=Roboto+Slab:wght@300&display=swap"
        rel="stylesheet">
		<?php wp_head(); ?>
</head>

<body>

    <header>
        <div class="p-3 border bg-light shadow-sm" id="cabecalho">
            <a href="/solag"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/solag.png" class="position-absolute mt-1 ml-2" alt="Logo Solag"> </a> 
            <ul class="nav justify-content-end offset-9">
                <li class="nav-item pr-3"><a class="item-menu text-decoration-none" href="/solag/sobre">Sobre</a></li>
                <li class="nav-item pr-3"><a class="item-menu text-decoration-none" href="/solag/contato">Contato</a></li>
                <li class="nav-item pr-3"><a class="item-menu text-decoration-none" href="/solag">Home</a></li>
            </ul>
        </div>
    </header>
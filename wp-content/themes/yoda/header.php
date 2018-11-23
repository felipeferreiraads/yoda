<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/assets/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri();?>/assets/img/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#5bbad5">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_template_directory_uri();?>/assets/css/style.min.css" />
</head>
<body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=253811747993905&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <header class="main">
        <div class="container">
            <div class="grid">
                <nav class="menu">
                    <div>
                        <a href="<?php echo site_url('/'); ?>">Home</a>
                        <a href="<?php echo site_url('/carreira/'); ?>">Carreira</a>
                        <div class="dropdown">
                            Produtos
                            <div class="menu-dropdown">
                                <a href="https://www.2amgaming.com/yoda" target="_blank">YoPC/YoNote </a>
                                <a href="https://www.2amgaming.com/yoda" target="_blank">YoAcessorios</a>
                                <a href="https://www.kalunga.com.br/prod/caderno-universitario-capa-dura-10x1-200-fls-red-canids-19878-spiral-red/130686/?menuID=28" target="_blank">YoEscolar</a>
                                <a href="https://atletasdemarca.com.br/marca/felipe-yoda/" target="_blank">YoVestuários - Atletas de marca / YoDa</a>
                                <a href="https://www.uselolja.com.br/yoda_qO31654309XtOcxSM" target="_blank"> LoLja/YoDa</a>
                            </div>
                        </div>
                        <a href="<?php echo site_url('/marca/'); ?>">Marca</a>
                        <a href="<?php echo site_url('/midia/'); ?>">Mídia</a>
                    </div>
                </nav>
                <?php if(is_page(['home', 'midia', 'criacao-de-conteudo']) or wp_is_mobile()): ?>
                <nav class="social">
                    <a href="https://www.facebook.com/Stoneyoda/" target="_blank"><span class="fa fa-facebook-square"></span></a>
                    <a href="https://www.twitch.tv/Yoda/" target="_blank"><span class="fa fa-twitch"></span></a>
                    <a href="https://www.instagram.com/stonedyoda/" target="_blank"><span class="fa fa-instagram"></span></a>
                    <a href="https://twitter.com/stonedyooda" target="_blank"><span class="fa fa-twitter"></span></a>
                    <a href="https://www.youtube.com/channel/UCuhVlANZXUATGv1dRmwcUzA" target="_blank"><span class="fa fa-youtube-play"></span></a>
                </nav>
                <?php endif; ?>
                <div class="toggle">
                    <span class="fa fa-bars"></span>
                </div>
            </div>
        </div>
    </header>
<!doctype html>
<html class="no-js" lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <title>MAXX - Marketing Multinível</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- FAVICON E TOUCH ICON IN THE ROOT DIRECTORY -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <!-- CSS -->
        <link rel="stylesheet" href="dist/css/styles.combined.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- HUMANS -->
        <link type="text/plain" rel="author" href="humans.txt" />

        <!-- OPEN GRAPH -->
        <meta property='og:title' content='Título do site' />
        <meta property='og:description' content='Um breve resumo da descrição do site' />
        <meta property='og:url' content='http://url-do-site' />
        <meta property='og:image' content='http://url-do-site/img/img-og-facebook-200x200.png'/>
        <meta property='og:type' content='website' />
        <meta property='og:site_name' content='Nome do site' />

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <header class="header">

            <div class="header__topbar">
                <div class="wrap">
                    <nav class="header__topbar__icons">
                        <a href=""><i class="fa fa-archive"></i></a>
                        <a href=""><i class="fa fa-refresh"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                        <a href=""><i class="fa fa-power-off"></i></a>
                    </nav>
                </div>
            </div><!-- /.header__topbar -->

            <div class="logo"><img src="dist/images/logo.png" alt=""></div>

            <div class="menu">
                <div class="wrap">
                    <a href="#" class="menu__link">masculino</a>
                    <a href="#" class="menu__link">feminino</a>
                    <a href="#" class="menu__link">calçados</a>
                    <a href="#" class="menu__link">acessorios</a>
                </div>
            </div><!-- /.menu -->

        </header>


        <section class="section-cta">
            <div class="wrap">
                <div class="section-cta__column">
                    <img src="http://dummyimage.com/800x600/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                </div>
                <div class="section-cta__column">
                    <img src="http://dummyimage.com/800x600/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                    <img src="http://dummyimage.com/800x600/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                </div>
            </div>
        </section><!-- /.section-cta -->



        <section class="highlights">
            <div class="wrap">
                <h2 class="section-title">destaques</h2>
                <dl class="showcase" data-carousel="product">
                    <?php for ($i=0; $i < 8; $i++):?>
                    <dt class="showcase__product">
                        <figure class="showcase__product__image">
                            <img src="http://dummyimage.com/800x600/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
                        </figure>
                        <div class="showcase__product__details">
                            <div class="showcase__product__details__column">
                                <h3 class="showcase__product__title">colar triangulo</h3>
                                <span class="showcase__product__category">Acessórios</span>
                            </div>
                            <div class="showcase__product__details__column">
                                <strong class="showcase__product__points">30 <small>pts</small></strong>
                                <div class="showcase__product__price">
                                    <span class="old">R$1.200,00</span>
                                    <span class="new">R$1.000,00</span>
                                </div>
                            </div>
                        </div><!-- /.showcase__product__details -->
                    </dt><!-- ./showcase__product -->
                <?php endfor; ?>
                </dl><!-- /.showcase -->
            </div>
        </section><!-- /.highlights -->


        <!-- JS -->
        <script src="dist/js/scripts.combined.min.js" async ></script>
    </body>
</html>

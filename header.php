<?php wp_head(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title> <?php bloginfo( 'title' ); ?> </title>

        <meta name="description" content="">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="style.css">

    </head>
        <div class="container">
            <header>
                <div class="content">
                    <div class="logo">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/logopurali.png">
                    </div>
                    <div class="menu">
                        <nav>
                            <ul>
                                <li><a>A PURALI</a></li>
                                <li><a>PRODUTOS</a></li>
                                <li><a>RECEITAS</a></li>
                                <li><a>CONTATO</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="social">
                        <ul>
                            <li><a>Facebook</a></li>
                            <li><a>Twitter</a></li>
                            <li><a>Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </header>
        </div>
    <body>
        
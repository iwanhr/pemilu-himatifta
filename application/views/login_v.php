<?= doctype('xhtml1-trans'); ?>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pemilu Raya Apps Ver 1.0 (BEM-FT Untag Sby)</title>
        <script src="<?= base_url(); ?>global/app/js/modernizr.js"></script>
        <!--[if (gt IE 8) | (IEMobile)]><!-->
        <link rel="stylesheet" href="<?= base_url(); ?>global/app/css/style.css">
        <!--<link rel="stylesheet" href="<?= base_url(); ?>global/css/style.css">-->
        <link rel="stylesheet" href="<?= base_url(); ?>global/app/css/idangerous.swiper.css">
        <!--<link rel="stylesheet" href="<?= base_url(); ?>global/css/idangerous.swiper.css">-->
        <!--<![endif]-->
        <!--[if (lt IE 9) & (!IEMobile)]>
        <link rel="stylesheet" href="css/ie.css">
        <![endif]-->
        <link href="style.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="outer-wrap">
            <div id="inner-wrap">
                <header id="top" role="banner" class="login">
                    <div class="block">
                        <h1 class="icon-shoop">Pemilu Raya BEM-FT 2015</h1>
                    </div>
                </header>
                <div class="clear"></div>
                <div id="main" role="main" class="
                    <form name="loginform" id="loginform" action="<?php echo base_url('auth/login_pemilih'); ?>" method="post"> 
                        <article class="block prose">
                            <?php
                            if (isset($message))
                            {
                                if ($message == 'error')
                                {
                                    echo "<div id='message'>" . validation_errors() . "</div>";
                                }
                                else
                                {
                                    echo "<div id='message'>" . $message . "</div>";
                                }
                            }
                            ?>
                            <fieldset>
                                <label><h3 align="center"><strong>LOGIN PEMILIH</strong></h3></label><br>
                                <label for="">Nomer Induk Mahasiswa</label>
                                <input type="text" name="email" id=""><br>
                                <label for="">Key (*Chase Sensitive)</label>
                                <input type="text" name="password" id=""><br>
                                <div class="clear"></div>
                            </fieldset>
                        </article>

                        <section>
<!--                            <section class="halflog">
                                <a href="<?php echo base_url('auth/register/') ?>" class="con-register centert">Register</a>
                            </section>-->
                            <section class="">
                                <input type="hidden" name="key" id="key" value="<?=$key;?>"/>
                                <input type="submit" name="submit" id="wp-submit" class="tombol-login" value="Log In" tabindex="100" style=""/>
                            </section>
                        </section>
                    </form>
                </div>

            </div>
            <!--/#inner-wrap-->
        
        <!--/#outer-wrap-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="<?= base_url(); ?>global/app/js/main.jquery.js"></script>
        <script src="<?= base_url(); ?>global/app/js/idangerous.swiper-2.1.min.js"></script>
        
    </body>
</html>
<?= doctype('xhtml1-trans'); ?>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pemilu Apps Ver 1.0 (Fakultas Teknologi Informasi)</title>
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
    </head>
    <body>
        <div id="outer-wrap">
            <div id="inner-wrap">
                <header id="top" role="banner" class="login">
                    <div class="block">
                        <h1 class=" icon-shoop">Shoop</h1>
                    </div>
                </header>
                <div class="clear"></div>
                <div id="main" role="main" class="login">

                    <article class="block prose">
                        <div align="center">Selamat, Pilihan Suara anda telah berhasil di simpan.</div>
                        <div align="center">
            <a href="<?php echo base_url('auth/logout_pemilih'); ?>">Logout</a>
        </div>
                    </article>
                </div>
            </div>
            <!--/#inner-wrap-->
        </div>
        <!--/#outer-wrap-->
    </body>
</html>
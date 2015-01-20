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
                        <h1 class=" icon-shoop">HMTI</h1>
                    </div>
                </header>
                <div class="clear"></div>
                <br>
                <h2 align="center">
                    SILAHKAN TENTUKAN PILIHAN ANDA!
                </h2>
                <?php
                if (!empty($kandidat))
                {
                    ?>
                    <div class="pilih" id="pilih">
                        <?php
                        foreach ($kandidat as $v => $c)
                        {
                            ?>
                            <article>
                                <fieldset>
                                    <div align="center">
                                        <img src="<?php echo base_url('global/app/img/candidate'); ?>/<?= $c['foto']; ?>" width="150px" heigh="250px" align="center"/>
                                    </div>
                                    <br>

                                    <div align="center">
                                        <h2>
                                        <?= $c['nama']; ?>
                                        </h2>
                                        <?= $c['nbi']; ?><br><br>
                                        Visi :<br>
                                        <?= $c['visi']; ?><br><br>
                                        Misi :<br>
                                        <?php
                                        $cetak = explode(",", $c['misi']);
                                        foreach ($cetak as $k)
                                        {
                                            echo "- <strong>" . $k . "</strong><br>";
                                        }
                                        ?><br>
                                    </div>
                                    <div class="clear"></div>
                                    <a href="<?php echo base_url('pilih') . "/coblos/" . $c['id_candidate']; ?>">
                                <input type="button" name="submit" id="wp-submit" class="tombol-coblos" value="Pilih" tabindex="100" /> 
                                    </a>
                                </fieldset>
                                    <br><!--<input type="submit" id="coblos" name="coblos" value="Pilih"/>-->
                            </article>
                        <?php
                    }
                    ?>
                    </div>
                    <?php
                }
                else
                {
                    ?>
                <br><br><br><div align='center'><h2>Anda Sudah Mencoblos</h2></div><br><br>
                <div align="center">
            <a href="<?php echo base_url('auth/logout_pemilih'); ?>">Logout</a>
        </div>
                <?php
//                    echo "<br><br><br><div align='center'><h2>Anda Sudah Mencoblos</h2></div><br><br>";
                }
                ?>
            </div>
</div>
<!--        <br><br>
        <div align="center">
            <a href="<?php echo base_url('auth/logout_pemilih'); ?>">Logout</a>
        </div>-->
        <!--/#inner-wrap-->
        <!--/#outer-wrap-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="<?= base_url(); ?>global/app/js/main.jquery.js"></script>
        <script src="<?= base_url(); ?>global/app/js/idangerous.swiper-2.1.min.js"></script>
    </body>
</html>
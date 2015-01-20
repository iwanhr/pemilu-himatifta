<header id="top" role="banner">
    <div class="block">
        <h1 class="block-title icon-shoop">Shoop</h1>
        <a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
        <div class="profile">
            <section class="img"><a href=""><img src="<?php if($_SESSION['shoop_user']['avatar'] != null) { ?><?= base_url(); ?>global/img/user/<?php echo $_SESSION['shoop_user']['avatar'] ?><?php }else{ ?><?= base_url(); ?>global/img/default-avatar.gif<?php } ?>" alt=""></a></section>
            <section class="name">
                <section><?php echo $_SESSION['shoop_user']['name'] ?></section>
                <?php
                if ($_SESSION['shoop_user']['status'] == 1)
                {
                    ?>
                    <section class="grey">Premium User ( <a href="">Make More Now</a> )</section>
                    <?php
                }
                else
                {
                    ?>
                    <section class="grey">Free User ( <a href="">Upgrade now</a> )</section>
                    <?php
                }
                ?>
            </section>
            <section class="dd">
                <section class="dd-menu" >
                    <a href="<?php echo base_url('app/user/edit/' . $_SESSION['shoop_user']['id_user']) ?>">Edit Profile <i class="icon-pencil pull-right"></i></a>
                    <a href="<?php echo base_url('app/auth/logout/') ?>">Log Out <i class="icon-off pull-right"></i></a>
                </section>
            </section>
        </div>
    </div>
</header>

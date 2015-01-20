<nav id="nav" role="navigation">
    <div class="block">
        <ul>
            <li <?php echo (isset($navleft['dashboard'])) ? $navleft['dashboard'] : '' ?>>
                <a href="<?php echo base_url('app') ?>" class="icon-dashboard">Dashboard</a>
            </li>
            <li <?php echo (isset($navleft['products'])) ? $navleft['products'] : '' ?>>
                <a href="<?php echo base_url('app/product/') ?>" class="icon-product">Product</a>
            </li>
            <li <?php echo (isset($navleft['stores'])) ? $navleft['stores'] : '' ?>>
                <a href="<?php echo base_url('app/store/') ?>" class="icon-stores">Stores</a>
            </li>
            <li <?php echo (isset($navleft['friends'])) ? $navleft['friends'] : '' ?>>
                <a href="<?php echo base_url('app/friend/') ?>" class="icon-friend">Friends</a>
            </li>
            <li <?php echo (isset($navleft['setting'])) ? $navleft['setting'] : '' ?>>
                <a href="<?php echo base_url('app/setting/') ?>" class="icon-setting">Setting</a>
            </li>
        </ul>
        <p class="copyright">Copyright 2012 © <br> Firzil Tech Indonesia</p>
        <a class="close-btn" id="nav-close-btn" href="#top">Back</a>
    </div>
</nav>
<div class="clear"></div>
<div class="widenav-wrap">
    <div class="widenav">
        <div class="scroller_anchor"></div>
        <section class="scroller">
            <ul>
            <li <?php echo (isset($navleft['dashboard'])) ? $navleft['dashboard'] : '' ?>>
                <a href="<?php echo base_url('app') ?>" class="icon-dashboard">Dashboard</a>
            </li>
            <li <?php echo (isset($navleft['products'])) ? $navleft['products'] : '' ?>>
                <a href="<?php echo base_url('app/product/') ?>" class="icon-product">Product</a>
            </li>
            <li <?php echo (isset($navleft['stores'])) ? $navleft['stores'] : '' ?>>
                <a href="<?php echo base_url('app/store/') ?>" class="icon-stores">Stores</a>
            </li>
            <li <?php echo (isset($navleft['friends'])) ? $navleft['friends'] : '' ?>>
                <a href="<?php echo base_url('app/friend/') ?>" class="icon-friend">Friends</a>
            </li>
            <li <?php echo (isset($navleft['setting'])) ? $navleft['setting'] : '' ?>>
                <a href="<?php echo base_url('app/setting/') ?>" class="icon-setting">Setting</a>
            </li>
        </ul>
            <p class="copyright">Copyright 2012 © <br> Firzil Tech Indonesia</p>
        </section>
        <div class="clear"></div>
    </div>
</div>
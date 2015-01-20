        
        <div align="center" style="color:#FFFFFF">
           You re login use <strong><u><?php echo $_SESSION['admin'][0]['username'];?></u></strong> as <?php echo $_SESSION['admin'][0]['id_jabatan']==1?"Superadministrator":"Administrator";?>
        </div>
        <footer id="footer">
            <a href="<?= base_url(); ?>admin" title="Home">Home</a> | 
            <a href="<?= base_url(); ?>admin/register" title="Register">Register Pemilih</a>
        </footer>
        <!-- JavaScript at the bottom for fast page loading -->
        <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
        
        <!--script>window.jQuery || document.write('<script src="<?=base_url();?>global/admin/js/libs/jquery-1.7.1.min.js"><\/script>')</script-->
        <!-- scripts concatenated and minified via build script -->
        <script defer src="<?=base_url();?>global/admin/js/script.js"></script>
        <script defer src="<?=base_url();?>global/admin/js/libs/superfish.js"></script>
        <script defer src="<?=base_url();?>global/admin/js/libs/cookie.js"></script>
        
        <!-- end scripts -->
        <!--[if lt IE 7 ]>
        <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
        <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
        <![endif]-->
    </body>
</html>

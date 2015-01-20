<!doctype html> 
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!-- Use the .htaccess and remove these lines to avoid edge case issues.
        More info: h5bp.com/b/378 -->
		<title>Pemilu Admin</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <!-- Mobile viewport optimized: h5bp.com/viewport -->
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
        <link rel="stylesheet" href="<?=base_url();?>global/admin/css/reset.css">
        <link rel="stylesheet" href="<?=base_url();?>global/admin/css/ui/ui.base.css">
        <link rel="stylesheet" href="<?=base_url();?>global/admin/css/style.css">
        <link rel="stylesheet" href="<?=base_url();?>global/admin/css/form.css">
        
        <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->
        <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
        Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects;
        for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
        <script src="<?=base_url();?>global/admin/js/libs/modernizr-2.0.6.min.js"></script>
        <script src="<?=base_url();?>global/admin/js/libs/jquery-1.8.2.js"></script>
        <script src="<?=base_url();?>global/admin/js/libs/jquery-ui-1.9.1.js"></script>
        
    </head>
    <body>
        <header>
            <h4 id="perusahaan">ADMIN PEMILU HIMATIFTA</h4>
            <?php $this->load->view("admin/nav");?>
            <a href="<?=base_url();?>admin/logout"><span id="profil">Logout</span></a>
        </header>
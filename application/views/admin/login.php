<?= doctype('xhtml1-trans'); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>    
        <?php
        $meta = array(
            array('name' => 'robots', 'content' => 'no-cache'),
            array('name' => 'description', 'content' => 'Sistem Informasi Ekspedisi'),
            array('name' => 'keywords', 'content' => 'ekspedisi, sistem informasi, SI'),
            array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
        );
        echo meta($meta);
        ?>
        <title>
            Pemilu Apps Admin
        </title>
        <?= link_tag('global/admin/css/login.css'); ?>
    </head>
    <body class="login"> 
        <div id="login"><h1><a href="#" title="Login Pemilu Himatifta Apps"><span class="hide">PEMILU APPS</span></a></h1> 

            <form name="loginform" id="loginform" action="<?= base_url('auth/login_admin'); ?>" method="post"> 
                <?php
                $message = $this->session->flashdata('message');
                echo $message ? "<div id='message'>" . $message . "</div>" : '';
                ?>
                <p> 
                    <label>Username<br /> 
                        <input type="text" name="username" id="user_login" class="input" value="" size="20" tabindex="10" /></label> 
                </p> 
                <p> 
                    <label>Password<br /> 
                        <input type="password" name="password" id="user_pass" class="input" value="" size="20" tabindex="20" /></label> 
                </p> 
                <!--p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="rememberme" value="forever" tabindex="90" /> Remember Me</label></p--> 
                <p class="submit"> 
                    <input type="submit" name="submit" id="wp-submit" class="button-primary" value="Log In" tabindex="100" /> 
                </p> 

            </form> 
        </div>
    </body>
</html>

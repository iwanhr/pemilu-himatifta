<?php $this->load->view("admin/header"); ?>
<section id="page-title">
    <h1><?=$judul;?></h1>
    <span><?=$deskripsi;?></span>
</section>
<section id="content">
    <div id="page-content">
        <?php $this->load->view($content); ?>
        <br>
        <?php if(isset($content2)){ 
            $this->load->view($content2);
        } ?>
        <div class="clear"></div>
        <?php $this->load->view("admin/sidebar"); ?>
    </div>
</section>
<div class="clear"></div>
<?php $this->load->view("admin/footer"); ?>
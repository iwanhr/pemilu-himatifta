<ul id="nav">
    <li><a href="<?=base_url();?>admin/pemilih">Pemilih</a></li>
    <li><a href="<?=base_url();?>admin/kandidat">Kandidat</a></li>
    <li><a href="<?=base_url();?>admin/register">Register Pemilih</a></li>
    <?php
    if($_SESSION['admin'][0]['id_jabatan']==1){
    ?>
    <li><a href="<?=base_url();?>admin/hasil">Hasil</a></li>
    <li><a href="<?=base_url();?>admin/laporan">Report</a></li>
    <?php
    }
    ?>
</ul>
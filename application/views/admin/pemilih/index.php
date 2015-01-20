
<div id="page-content-wrapper">    
    <div class="inner-page-title">
        <h2>Tambah Pemilih</h2>
        <span>Form Tambah Calon Pemilih.</span>
        <?= $this->session->flashdata('message'); ?>
    </div>

    <div class="column-content-box">
        <div class="content-box content-box-header ui-corner-all">
            <div class="ui-state-default ui-corner-top ui-box-header">
                
            </div>
            <div class="content-box-wrapper">
                <form class="forms" id="signupForm" method="post" action="<?= base_url('admin/add_pemilih');?>">
                    <div class="float-left column31">
                        <label class="desc" for="expired_date">NBI</label>
                        <input type="text" id="nbi" class="field text full" name="nbi" value="" />
                        <br />
                        <label class="desc" for="expired_date">Nama Lengkap</label>
                        <input type="text" id="nama" class="field text full" name="nama" />
                        <br />
                        <label class="desc" for="expired_date">Phone</label>
                        <input type="text" id="phone" class="field text full" name="phone" />
                        <label class="desc" for="expired_date">Key</label>
                        <input type="text" id="reg_key" class="field text full" name="reg_key"  value="<?=$reg_key;?>" readonly=""/>
                    </div>
                    <div class="clear"></div>
                    <div class="buttonwrapper">
                        <input type="submit" id="submit" value="Tambah" />
                        <input type="submit" id="reset" value="Reset" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>

    
</div>
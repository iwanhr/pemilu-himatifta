
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
                <form class="forms" id="signupForm" method="post" action="<?= base_url('admin/add_kandidat');?>" enctype="multipart/form-data">
                    <div class="float-left column31">
                        <label class="desc" for="expired_date">Nama Lengkap</label>
                        <input type="text" id="nama" class="field text full" name="nama" placeholder="Wajib Di isi"/>
                        <br />
                        <label class="desc" for="expired_date">NBI</label>
                        <input type="text" id="nbi" class="field text full" name="nbi" value="46" placeholder="Wajib Di isi"/>
                        <br />
                        <label class="desc" for="expired_date">Visi</label><br>
                        <textarea id="visi" name="visi" rows="10" cols="78"></textarea>
                        <br />
                        <label class="desc" for="expired_date">Misi</label>
                        <?php
                        $index=1;
                        for($i=0;$i<=4;$i++){
                            ?>
                        <input type="text" id="misi[]" class="field text full" name="misi[]" placeholder="<?=$index;?> . Misi Anda......."/>
                            <?php
                            $index++;
                        }
                        ?>
                        <!--<textarea id="misi" name="misi" rows="10" cols="78"></textarea><br>-->
                        <label class="desc" for="expired_date">Foto</label>
                        <input type="file" name="foto" id="foto" placeholder="No chosen image" class="select-file"><br>
                    </div>
                    <div class="clear"></div>
                    <br>
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
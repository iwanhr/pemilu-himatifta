<div id="page-content-wrapper">
    <div class="inner-page-title">
        <h2>List Kandidat</h2>
        <span></span>
        <?= $this->session->flashdata('message'); ?>
    </div>
    <!--    <div class="column-content-box">
            <a href="<?= base_url(); ?>admin/user/download_csv" style="float:left; margin-right: 20px; margin-bottom: 20px"><button class="ui-state-default ui-corner-all float-right ui-state-hover">Import CSV</button></a>
            <form action="<?= base_url(); ?>admin/user/index" method="post" style="float:left">
                <input type="text" name="filter" id="filter" placeholder="Find Something..." value="<?= $filter; ?>" />
                <input type="submit" value="Search" />
            </form>
        </div>-->
    <a href="<?= base_url('admin/register_kandidat'); ?>"><input type="button" value="Tambah Kandidat" /></a>
    <br>
    <br>
    <table cellspacing="0">
        <thead>
            <tr>
                <th class="tableheader">No</th>
                <th class="tableheader">Foto</th>
                <th class="tableheader">Nama</th>
                <th class="tableheader">NBI</th>
                <th class="tableheader">Visi</th>
                <th class="tableheader">Misi</th>
                <th class="tableheader">Status</th>
                <th class="tableheader">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $index = 1;
            foreach ($user as $data):
                ?>
                <tr> 
                    <td class="tableheader">
    <?= $index; ?>
                    </td>	  	
                    <td class="tablecell">
                        <div align="center">
                            <img src="<?= base_url('global/app/img/candidate/'); ?>/<?= $data['foto']; ?>" width="150px" heigh="200px"/>
                        </div>
                    </td>
                    <td class="tablecell">
    <?= $data['nama']; ?>
                    </td>
                    <td class="tablecell">
    <?= $data['nbi']; ?>
                    </td>
                    <td class="tablecell">
    <?= $data['visi']; ?>
                    </td>
                    <td class="tablecell">
    <?= $data['misi']; ?>
                    </td>
                    <td class="tablecell">
    <?= $data['status']; ?> 
                    </td>
                    <td class="tablecell">
                        <a href="<?= base_url('admin/delete_kandidat') . "/" . $data['id_candidate']; ?>">delete</a>
                    </td>
                </tr>
                <?php
                $index++;
            endforeach;
            ?>
        </tbody>
    </table>
    <?php echo $this->pagination->create_links(); ?>&nbsp;<span class="goto">Go to page: <select id="page-select" name="page"><?php
    for ($i = 1; $i <= $num; $i++)
    {
        echo "<option " . ((int) $this->uri->segment(4) == $i ? 'selected=selected' : '') . " value='$i'>$i</option>";
    }
    ?></select></span>
</div>

<div style="display: none;" id="dialog-confirm" title="Hapus Data Bengkel">
    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Data Bengkel</p>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $("select#page-select").change(function() {
            var page = $("select#page-select").val();
            window.location = "<?= base_url(); ?>admin/user/index/" + page;
        });
    });
</script>
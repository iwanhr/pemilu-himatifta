<div id="page-content-wrapper">
    <div class="inner-page-title">
        <h2>List Pemilih</h2>
        <span></span>
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="column-content-box">
        <a href="<?= base_url(); ?>admin/cetak_laporan" style="float:left; margin-right: 20px; margin-bottom: 20px"><button class="ui-state-default ui-corner-all float-right ui-state-hover">Export To Excel</button></a>
<!--            <form action="<?= base_url(); ?>admin/user/index" method="post" style="float:left">
            <input type="text" name="filter" id="filter" placeholder="Find Something..." value="" />
            <input type="submit" value="Search" />
        </form>-->
    </div>
    <table cellspacing="0">
        <thead>
            <tr>
                <th class="tableheader"><div align="center">No</div></th>
        <th class="tableheader">Nama</th>
        <th class="tableheader"><div align="center">NBI</div></th>
        <th class="tableheader"><div align="center">Key</div></th>
        <th class="tableheader"><div align="center">Date</div></th>
        <th class="tableheader"><div align="center">Time</div></th>
        </tr>
        </thead>
        <tbody>
            <?php
            $index = 1;
            foreach ($user as $data):
                ?>
                <tr> 
                    <td class="tableheader"><div align="center">
                            <?= $index; ?>
                        </div>
                    </td>	  	
                    <td class="tablecell">
                        <?= $data['nama']; ?>
                    </td>
                    <td class="tablecell">
                        <div align="center">
                            <?= $data['nbi']; ?>
                        </div>
                    </td>
                    <td class="tablecell">
                        <div align="center">
                            <?= $data['key']; ?>
                        </div>
                    </td>
                    <td class="tablecell">
                        <div align="center">
                            <?= substr($data['last_login'], 0, 10); ?>
                        </div>
                    <td class="tablecell">
                        <div align="center">
                            <?= substr($data['last_login'], 11, 8); ?>
                        </div>
                    </td>
                </tr>
                <?php
                $index++;
            endforeach;
            ?>
        </tbody>
    </table>
</div>
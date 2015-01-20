<div id="page-content-wrapper">

    <div class="inner-page-title">

        <h2>List Pemilih</h2>

        <span></span>

        <?= $this->session->flashdata('message'); ?>

    </div>

<!--    <div class="column-content-box">

        <a href="<?=base_url();?>admin/user/download_csv" style="float:left; margin-right: 20px; margin-bottom: 20px"><button class="ui-state-default ui-corner-all float-right ui-state-hover">Import CSV</button></a>

        <form action="<?=base_url();?>admin/user/index" method="post" style="float:left">

            <input type="text" name="filter" id="filter" placeholder="Find Something..." value="<?=$filter;?>" />

            <input type="submit" value="Search" />

        </form>

    </div>-->

    <table cellspacing="0">

        <thead>

            <tr>

                <th class="tableheader"><div align='center'>No</div></th>

                <th class="tableheader">Nama</th>

                <th class="tableheader">NBI</th>

                <th class="tableheader">Key</th>

                <th class="tableheader">Phone</th>

                <th class="tableheader">Register Time</th>

                <th class="tableheader">Status</th>

                <!-- <th class="tableheader">Action</th> -->

            </tr>

        </thead>

        <tbody>

            <?php 

            if ($segment == 0)
            {
                $index = 1;
            }
            elseif ($segment == 1)
            {
                $index = 31;
            }
            elseif ($segment == 2)
            {

                $index = 61;
            }
            elseif ($segment == 3)
            {
                $index = 91;
            }
            elseif ($segment == 4)
            {
                $index = 121;
            }
            elseif ($segment == 5)
            {

                $index = 151;
            }
            elseif ($segment == 6)
            {
                $index = 181;
            }
            elseif ($segment == 7)
            {

                $index = 211;
            }
            else
            {
                $index = 241;
            }

            foreach($user as $data):?>

            <tr> 

                <td class="tableheader">

                    <div align='center'><?=$index;?></div>

                </td>	  	

                <td class="tablecell">

                    <?=$data['nama'];?>

                </td>

                <td class="tablecell">

                    <?=$data['nbi'];?>

                </td>

                <td class="tablecell">

                    <?=$data['key'];?>

                </td>

                <td class="tablecell">

                    <?=$data['phone'];?>

                </td>

                <td class="tablecell">

                    <?=$data['register_time'];?> 

                </td>

                <td class="tablecell">

                    <?=$coblos[$data['id_chooser']]==1?"Sudah Coblos":"Belum Coblos";?> 

                </td>

                 <!-- <td class="tablecell">

                     <a href="<?= base_url('admin/delete_pemilih')."/".$data['id_chooser'];?>">delete</a>

                </td> -->

            </tr>

            <?php 

            $index++;

            endforeach;?>

        </tbody>

    </table>

    <?php echo $this->pagination->create_links();?>&nbsp;<span class="goto">Go to page: <select id="page-select" name="page"><?php 

        for($i = 1; $i <= $num; $i++)

        {

            echo "<option " . ((int) $this->uri->segment(4) == $i ? 'selected=selected' : '') . " value='$i'>$i</option>";

        }

    ?></select></span>

</div>



<div style="display: none;" id="dialog-confirm" title="Hapus Data Bengkel">

    <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;"></span>Data Bengkel</p>

</div>



<script type="text/javascript">

$(document).ready(function(){

    $("select#page-select").change(function(){

        var page =  $("select#page-select").val();

        window.location = "<?=base_url();?>admin/pemilih/" + page; 

    });

});

</script>
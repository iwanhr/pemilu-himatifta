<div id="page-content-wrapper">

    <div class="inner-page-title">

        <h2>List Kandidat</h2>

        <span></span>

        <?= $this->session->flashdata('message'); ?>

    </div>

    <br>

    <table cellspacing="0">

        <thead>

            <tr>

                <th class="tableheader" width="20px"><div align="center">No</div></th>

                <th class="tableheader"><div align="center">Foto</div></th>

                <th class="tableheader"><div align="center">Total Hasil</div></th>

            </tr>

        </thead>

        <tbody>

            <?php

            $index = 1;

            foreach ($user as $data):

                ?>

                <tr> 

                    <td class="tableheader">

                        <div align="center">

                        <?= $index; ?>

                        </div>

                    </td>	  	

                    <td class="tablecell">

                        <div align="center">

                            <img src="<?= base_url('global/app/img/candidate/'); ?>/<?= $data['foto']; ?>" width="75px" heigh="180px"/>

                        </div>

                    </td>

                    <td class="tablecell">

                        <div align="center">

                        <h2>

                            <?= $data['hasil']; ?>



                        </h2>

                            </div>

                    </td>

                </tr>

                <?php

                $index++;

            endforeach;

            ?>

        </tbody>

    </table>

    <br>

    <strong>

        Total Suara ::

    </strong>

    <br>

    <?php

    echo "Total Pemilih Terdaftar :: " . $total_pemilih;

    echo "<br>";

    echo "Total Suara :: " . $total_pencoblos;

    echo "<br>";

    $golput = $total_pemilih - $total_pencoblos;

    echo "Total Golput :: " . $golput;

    echo "<br>";

    ?>

     <strong>

        Hasil Suara ::

    </strong>

    <?php var_dump($user);?>

    <?php

    echo "<br>";

    foreach ($user as $d):

        $nilai = $d['hasil'];

        echo $d['nama']." : ".@ceil($nilai / $total_pencoblos * 100)."%";

        echo "<br>";

    endforeach;

    ?>

</div>


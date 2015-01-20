<?php
 header("Content-type: application/octet-stream");
 header("Content-Disposition: attachment; filename=LaporanDataPemilu.xls");
 header("Pragma: no-cache");
 header("Expires: 0");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Pembuatan Laporan Pemilih</title>
    </head>

    <body>
        <div>
            Data Pemilih
            <table>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>NBI</td>
                    <td>Key</td>
                    <td>Tanggal Coblos</td>
                    <td>Waktu Coblos</td>
                </tr>
                <?php
                $index=1;
                foreach ($user as $v)
                {
                    ?>
                    <tr>
                        <td><?=$index;?></td>
                        <td><?=$v['nama'];?></td>
                        <td><?= $v['nbi']; ?></td>
                        <td><?= $v['key']; ?></td>
                        <td><?= substr($v['last_login'],0,10); ?></td>
                        <td><?= substr($v['last_login'],11,8); ?></td>
                    </tr>
                    <?php
                    $index++;
                }
                ?>
            </table>
        </div> 
    </body>
</html>
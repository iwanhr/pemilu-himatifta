<div id="page-content-wrapper">
    <div class="inner-page-title">
        <h2>Report User Shoop</h2>
        <span></span>
        <?= $this->session->flashdata('message'); ?>
    </div>
    <div class="column-content-box">
        <div class="content-box content-box-header ui-corner-all">
            <div class="ui-state-default ui-corner-top ui-box-header">
                Search User by Email
            </div>
            <div class="content-box-wrapper">
                <form class="forms" id="signupForm" method="post" action="<?= base_url(); ?>admin/report/search">
                    <div class="float-left column31">
                        <label class="desc" for="expired_date">Expired Date</label>
                        <input type="text" id="expired_date" class="datepicker field text full" name="expired_date" readonly="readonly" />
                        <br />
                        <label class="desc" for="email">Email</label>
                        <input type="text" id="email" class="field text full" name="email" />
                        <br />
                    </div>
                    <div class="clear"></div>
                    <div class="buttonwrapper">
                        <input type="submit" id="submit" value="Submit" />
                        <input type="submit" id="reset" value="Reset" />
                    </div>
                </form>
            </div>
        </div>
        <?php
        if (isset($det_user))
        {
            ?>
            <div class="content-box content-box-header ui-corner-all">
                <div class="ui-state-default ui-corner-top ui-box-header">
                    Detail User
                </div>
                <div class="content-box-wrapper">
                    <label>Name : <?= $det_user['name']; ?></label><br>
                    <label>Email : <?= $det_user['email']; ?></label><br>
                    <label>Phone : <?= $det_user['phone']; ?></label><br>
                    <label>Premium End : <?= $det_user['premium_end']; ?></label><br>
                    <label>Join Date : <?= $det_user['joined_date']; ?></label><br>
                </div>
                <br>
            </div>
            <?php
        }
        else
        {
            ?>
            <div class="content-box content-box-header ui-corner-all">
                <div class="ui-state-default ui-corner-top ui-box-header">
                    Detail User
                </div>
                <div class="content-box-wrapper">
                    Your email is not available.
                </div>
            </div>
            <?php
        }
        ?>
        <?php
        if (isset($det_prod))
        {
            ?>
            <table cellspacing="0">
                <thead>
                    <tr>
                        <th class="tableheader">No. </th>
                        <th class="tableheader">Id Product</th>
                        <th class="tableheader">Nama</th>
                        <th class="tableheader">Harga</th>
                        <th class="tableheader">Time</th>
                        <th class="tableheader">Publish</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $index=1;
                    foreach ($det_prod as $d){ ?>
                        <tr> 
                            <td class="tablecell">
                                <?= $index; ?>
                            </td>
                            <td class="tablecell">
                                <?= $d['id_product']; ?>
                            </td>	  	
                            <td class="tablecell">
                                <?= $d['prod_title']; ?>
                            </td>
                            <td class="tablecell">
                                <?= $d['prod_price']; ?>
                            </td>
                            <td class="tablecell">
                                <?= $d['prod_time']; ?>
                            </td>
                            <td class="tablecell">
                                <?php
                                // echo count($data[$d['id_product']]);
                                foreach ($data[$d['id_product']] as $v)
                                {
                                    if (isset($v['id_store']))
                                    {
                                        echo $v['store_name'];
                                        echo "<br>";
                                    }
                                }
                                ?>
                            </td>
                        </tr>
                    <?php 
                    $index++;
                   }
                   ?>
                </tbody>
            </table>
            <?php
        }
        ?>
    </div>
    <div class="clear"></div>
</div>
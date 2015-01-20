<?php $this->load->view("admin/header"); ?>
<section id="page-title">
    <h1>Shoop Platform</h1>    
</section>
<section id="content">
    <div id="page-content">
		
		<div id="page-content-wrapper" style="float:left;width:95%">
			<div class="inner-page-title">
				<h2>Platform Status</h2>
				<span></span>				
			</div>
			
			<table cellspacing="0">
				<thead>
					<tr valign='top'>
                        <th class="tableheader" width='5%'><div align="center"><b>Platform ID</b></div></th>
						<th class="tableheader" width='12%'><div align="center"><b>Nama Platform</b></div></th>
						<th class="tableheader" width='20%'><div align="center"><b>Deskripsi</b></div></th>
						<th class="tableheader" width='5%'><div align="center">Status</div></th>					
						<th class="tableheader" width='8%'><div align="center">Register User</div></th>					
						<th class="tableheader" width='8%'><div align="center">Analitycs Product</div></th>					
						<th class="tableheader" width='8%'><div align="center">Multiple Image Product</div></th>					
						<th class="tableheader" width='8%'><div align="center">Promotion Product</div></th>					
						<th class="tableheader" width='8%'><div align="center">Editable Product</div></th>					
						<th class="tableheader" width='8%'><div align="center">Super Categories</div></th>					
						<th class="tableheader" width='8%'><div align="center">Super Location</div></th>					
						<th class="tableheader" width='8%'><div align="center">Super Nego</div></th>					
						<th class="tableheader" width='8%'><div align="center">Super New</div></th>					
					</tr>
				</thead>
				<tbody>
					<?php
						if(!empty($platforms)){
							foreach($platforms as $plat){
								echo "<tr>".
										"<td class='tablecell'><div align='center'><b>".$plat->id_platform."</b></div></td>".
										"<td class='tablecell'><div align='center'>".$plat->platform_name."</div></td>".
										"<td class='tablecell'><div align='center'>".$plat->platform_desc."</div></td>".
										"<td class='tablecell'><div align='center'>".$plat->status."</div></td>".
										"<td class='tablecell'><div align='center'>".$plat->register_status."</div></td>".
										"<td class='tablecell'><div align='center'>".$plat->analitycs_status."</div></td>".
										"<td class='tablecell'><div align='center'>".$plat->multiple_image_status."</div></td>".
										"<td class='tablecell'><div align='center'>".$plat->promotion_status."</div></td>".
										"<td class='tablecell'><div align='center'>".$plat->edit_product_status."</div></td>".
										"<td class='tablecell'><div align='center'>".$plat->supercat."</div></td>".
										"<td class='tablecell'><div align='center'>".$plat->superlocation."</div></td>".
										"<td class='tablecell'><div align='center'>".$plat->supernego."</div></td>".
										"<td class='tablecell'><div align='center'>".$plat->supernew."</div></td>".
									 "</tr>";
							}
						
						}
					?>
				</tbody>
                <thead>
					<tr valign='top'>
                        <th class="tableheader" width='5%' colspan="4"><div align="center"><b>Total</b></div></th>
						<th class="tableheader" width='8%'><div align="center"><?php echo $hitung['register'];?></div></th>					
						<th class="tableheader" width='8%'><div align="center"><?php echo $hitung['analitycs'];?></div></th>					
						<th class="tableheader" width='8%'><div align="center"><?php echo $hitung['multiple'];?></div></th>					
						<th class="tableheader" width='8%'><div align="center"><?php echo $hitung['promotion'];?></div></th>					
						<th class="tableheader" width='8%'><div align="center"><?php echo $hitung['edit'];?></div></th>					
						<th class="tableheader" width='8%'><div align="center"><?php echo $hitung['supercat'];?></div></th>					
						<th class="tableheader" width='8%'><div align="center"><?php echo $hitung['superlocation'];?></div></th>					
						<th class="tableheader" width='8%'><div align="center"><?php echo $hitung['supernego'];?></div></th>					
						<th class="tableheader" width='8%'><div align="center"><?php echo $hitung['supernew'];?></div></th>					
					</tr>
				</thead>
			</table>
			
		</div>
		
        <div class="clear"></div>
        <?php $this->load->view("admin/sidebar"); ?>
    </div>
</section>
<div class="clear"></div>
<?php $this->load->view("admin/footer"); ?>
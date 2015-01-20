<?php $this->load->view("admin/header"); ?>
<section id="page-title">
    <h1>Shoop Log</h1>    
</section>
<section id="content">
    <div id="page-content">
		
		<div id="page-content-wrapper" style="float:left;width:95%">
			<div class="inner-page-title">
				<h2>Log</h2>
				<span></span>				
			</div>
			
			<table cellspacing="0">
				<thead>
					<tr valign='top'>
						<th class="tableheader" width='2%'>ID</th>
						<th class="tableheader" width='10%'>Date</th>
						<th class="tableheader" width='10%'>Jenis</th>
						<th class="tableheader" width='80%'>Message</th>					
					</tr>
				</thead>
				<tbody>
					<?php
						if(!empty($logs)){
							foreach($logs as $log){
								echo "<tr>".
										"<td class='tablecell'>".$log->idlog."</td>".
										"<td class='tablecell'>".strftime("%d-%m-%Y %H:%M:%S",strtotime($log->thedate))."</td>".
										"<td class='tablecell'>".$log->jenis."</td>".
										"<td class='tablecell'>".nl2br($log->message)."</td>".
									 "</tr>";
							}
						
						}
					?>
				
				</tbody>
			</table>
			
		</div>
		
        <div class="clear"></div>
        <?php $this->load->view("admin/sidebar"); ?>
    </div>
</section>
<div class="clear"></div>
<?php $this->load->view("admin/footer"); ?>
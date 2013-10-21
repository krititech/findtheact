<style>
table th{

text-align:left;

}



</style>
<div style="width:100%;height:auto;float:left; background: #ffffff;">	
	<table width="700" class="table border" style="font-size: 14px;">

				    <tr class=" tr_head">

						<td colspan="3" style="padding-left:8px;">Existing Acts </td>

						

				    </tr>
					<tr><th>Proffessional Name</th>
					<th>Act Holder Name</th>
					<th>Email</th>
					<th>Action</th>
					</tr>

				

				<?php 
				
				
 foreach($allacts as $row):
 
?>
				<tr class="tr" id="<?php echo $row->id?>">

				<td style="padding-left: 8px;"><?php echo $row->professionalname?></td>
				<td><?php echo $row->fname." ".$row->lname?></td>
				<td><?php echo $row->email?></td>
				<td><a href="<?php echo base_url()?>index.php/viewact/updateact/<?php echo $row->id;?>" style="color:#000000;"><img src="<?php echo base_url()?>images/edit.png"></a></td>

				</tr>

				<?php endforeach;?>


				</table>
</div>
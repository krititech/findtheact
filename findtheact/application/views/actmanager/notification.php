<div style="width:100%;height:auto;float:left; background: #ffffff;">
 <table width="100%">
		  		<tr><th>Contact Person</th>
					<th>Contact Number</th>
					<th>EmailId</th>
					<th>Contact Ondate</th>
					
				</tr>
<?php 
foreach($results as $row)
{
//$dateval=date('d-M-Y', strtotime($row->datetime));
?>
<tr><td><?php echo $row->full_name;?></td>
<td><?php echo $row->contact_no;?></td>
<td><?php echo $row->email?></td>
<td><?php echo $row->datetime;?></td>
</tr>
<?php
}
?>
</table>
</div>


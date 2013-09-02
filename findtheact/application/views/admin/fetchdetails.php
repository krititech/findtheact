<style>	
table th{
text-align:left;

}


</style>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
function deleterecord(val)
{
		

					$.post('<?php echo base_url()?>index.php/home/deleteval',
     						 { 'idd':val },

    
      						function(result) {
														
							alert("successfully deleted");
							$('#'+val).remove();
							  }
							 );

}
</script>
<div style="width:100%;height:auto;float:left; background: #ffffff;">
		<div style=" width: 100%; height:auto; margin: auto; ">
			<div class="addform">
						<span style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#999999;">View Skills</span>
						<table style="width:80%; margin:auto; height:auto;">
						<tr><th>Slno</th>
						<th>Skill name</th>
						<th>Action</th>
						</tr>
						 <?php foreach($query as $s): ?>
						<tr id="<?php echo $s['id']?>"><td><?php echo $s['id']?></td>
						<td><?php echo $s['skillname']?></td>
						
						<td><a href="<?php echo base_url()?>index.php/home/updateskill/<?php echo $s['id'];?>" style="color:#000000;">Edit</a> &nbsp; &nbsp; &nbsp; &nbsp;
						<a onclick="deleterecord(<?php echo $s['id']?>);" style="color:#000000;">Delete</a></td>
						</tr>
						<?php endforeach;?>
						</table>
			</div>
		</div>
	</div>

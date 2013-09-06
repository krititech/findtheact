<style>	
table th{
text-align:left;

}


</style>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.3.2.min.js"></script>
<h3>Update Event</h3>

	
			
						 <?php echo form_open('eventupdate/save')?>
						<table width="700" height="80" border="0" class="table">
						<tr>
										<?php
										foreach($query as $q): ?>
										
						<td><input type="hidden" value="<?php echo $q['slno']?>" name="hiden"/></td>
						<td>Event Name</td>
						<td><input type="text" value="<?php echo $q['eventname']?>" name="name" class="form2"/></td>
										<?php endforeach;?>
						</tr>
						<tr><td colspan="2"><input type="submit" name="submit" value="Update" class="submit"  /></td></tr>
						</table>
						
						<?php
						echo form_close();
						?>
			
		


<style>	
table th{
text-align:left;

}


</style>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.3.2.min.js"></script>
<div style="width:100%;height:auto;float:left; background: #ffffff;">
		<div style=" width: 100%; height:auto; margin: auto; ">
			<div class="addform">
						<span style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#999999;">Update Skills</span>
						 <?php echo form_open('skillupdate/save')?>
						<table style="width:80%; height:auto;">
						<tr>
										<?php
										foreach($query as $q): ?>
										
						<td><input type="hidden" value="<?php echo $q['slno']?>" name="hiden"/></td>
						<td>Skill Name</td>
						<td><input type="text" value="<?php echo $q['skillname']?>" name="name"/></td>
										<?php endforeach;?>
						</tr>
						<tr><td colspan="2"><input type="submit" name="submit" value="Update"  /></td></tr>
						</table>
						
						<?php
						echo form_close();
						?>
			</div>
		</div>
	</div>

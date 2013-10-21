<style>	
table th{
text-align:left;

}


</style>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.3.2.min.js"></script>
<div style="width:100%;height:auto;float:left; background: #ffffff;">
		<div style=" width: 100%; height:auto; margin: auto; ">
			<div class="addform">
						<span style="text-align:center; font-family:Arial, Helvetica, sans-serif; font-size:16px; color:#999999;">Update Types</span>
						 <?php echo form_open('typeupdate/save')?>
						<table style="width:80%; height:auto;">
						<tr>
										<?php
										foreach($query as $q): ?>
										
						<td><input type="hidden" value="<?php echo $q['slno']?>" name="hiden"/></td>
						</tr>
                        <tr>
                        <td>Type Name</td>
						<td><input type="text" value="<?php echo $q['name']?>" name="name"/></td>
                        </tr>
                        <tr>
                        <td>Priority</td>
   					    <td><input type="text" value="<?php echo $q['priority']?>" name="priority"/></td>
                        </tr>
                        <tr>
                        <td>Image</td>
   					    <td><input type="file" value="<?php echo $q['image']?>" name="userfile"/><div style="height: 50px; width: 50px;"><img src="<?php echo base_url();?>uploads/<?php echo $q['image']?>"/></div></td>
                        
                        </tr>
                        
										<?php endforeach;?>
			
						<tr><td colspan="2"><input type="submit" name="submit" value="Update"  /></td></tr>
						</table>
						
						<?php
						echo form_close();
						?>
			</div>
		</div>
	</div>

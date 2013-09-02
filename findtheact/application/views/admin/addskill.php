<div style="width:100%;height:auto;float:left; background: #ffffff;">
		<div style=" width: 100%; height:auto; margin: auto; ">
			<div class="addform">
						<h3>Add Skill</h3>
						 <?php echo form_open('addskill/save')?>
							<table>
							<tr>
						         <td>Skill Name</td>
							<td><input type="text" name="name" />
							</td>
							</tr>
							<tr><td colspan="2"><input type="submit" name="submit" value="Add"  /></td></tr>
						</table>
						
						<?php
						echo form_close();
						?>
						

			</div>
		</div>
	</div>

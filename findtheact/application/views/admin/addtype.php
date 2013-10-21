<style>

	    .tr{

			border-bottom: 1px solid #cccccc;

			border-collapse: collapse;

			height: 35px;

	    }

	    

	    .tr:hover{

			background: #f5f5f5;

	    }

	    

	    .border{

			border: 1px solid #00b6e8;

			border-collapse: collapse;

	    }

	    

	    .tr_head{

			background:#00b6e8;

			color: #ffffff;

			height: 40px;

	    }

 </style>
 <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
function deleterecord(val)
{
		

					$.post('<?php echo base_url()?>index.php/home/deletetype',
     						 { 'iiidd':val },

    
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
						<h3>Create Type</h3>
						 <?php echo form_open_multipart('addtype/save')?>
							<table width="700" height="80" border="0" class="table">
							<tr>
						         <td>Name</td>
							<td><input type="text" name="name" class="form2" required />
							</td>
							</tr>
                            <tr>
						         <td>Priority</td>
							<td><input type="text" name="priority" class="form2" required />
							</td>
							</tr>
							<tr><td>Image</td>
							<td><input type="file" name="userfile"  class="form2"/>  </td></tr>
                            
                            <tr>
				    <td>&nbsp;</td>
							<td><input type="submit" name="submit" class="submit" value="Submit"/>
                            <input type="reset" name="reset"  value="Cancel"  class="submit"/></td></tr>
						</table>
						
						<?php
						echo form_close();
						?>
						

			</div>
		</div>
	</div>
	
<div style="width:100%;height:auto;float:left; background: #ffffff;">	
	<table width="700" class="table border" style="font-size: 14px;">

				    <tr class=" tr_head">

						<td colspan="3" style="padding-left:8px;">Existing Type </td>

						

				    </tr>

				

				<?php 
				
				
 foreach($typeval as $row):
 
?>
				<tr class="tr" id="<?php echo $row->slno?>">

				<td style="padding-left: 8px;"><?php echo $row->name?></td>
				<td><a onclick="deleterecord(<?php echo $row->slno?>);" style="color:#000000;"><img src="<?php echo base_url()?>images/delet.png"></a></td>
				<td><a href="<?php echo base_url()?>index.php/home/updatetype/<?php echo $row->slno;?>" style="color:#000000;"><img src="<?php echo base_url()?>images/edit.png"></a></td></td>

				</tr>

				<?php endforeach;?>


				</table>
</div>
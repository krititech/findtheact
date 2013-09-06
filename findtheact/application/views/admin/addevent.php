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
function deleterecords(val)
{
		

					$.post('<?php echo base_url()?>index.php/home/deletevalue',
     						 { 'iddd':val },

    
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
						<h3>Create Event</h3>
						 <?php echo form_open('addevent/save')?>
							<table width="700" height="80" border="0" class="table">
							<tr>
						         <td>Event Name</td>
							<td><input type="text" name="name" class="form2" />
							</td>
							</tr>
							<tr>
                            <td>&nbsp;</td>
                            <td colspan="2"><input type="submit" name="submit" value="Add" class="submit"  />
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

						<td colspan="3" style="padding-left:8px;">Existing Event </td>

						

				    </tr>

				

				<?php 
				
				
 foreach($events as $row):
 
?>
				<tr class="tr" id="<?php echo $row->slno?>">

				<td style="padding-left: 8px;"><?php echo $row->eventname?></td>
				<td><a onclick="deleterecords(<?php echo $row->slno?>);" style="color:#000000;"><img src="<?php echo base_url()?>images/delet.png"></a></td>
				<td><a href="<?php echo base_url()?>index.php/home/updateevent/<?php echo $row->slno;?>" style="color:#000000;"><img src="<?php echo base_url()?>images/edit.png"></a></td></td>

				</tr>

				<?php endforeach;?>


				</table>
</div>
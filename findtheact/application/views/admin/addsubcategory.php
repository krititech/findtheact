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
function deleter(val)
{
		
//alert(val);


					$.post('<?php echo base_url()?>index.php/home/deletesubcat',
     						 { 'iidd':val },

    
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
						<h3>Create Sub Catagory</h3>
						 <?php echo form_open('addsubskill/save')?>
							<table width="700" height="80" border="0" class="table">
							
							
							<tr>
						         <td>Catagory Name</td>
							<td>
                            <select class="textbox" name="cat" id="category">
                                <option value="">Select</option>
                               <?php
                              foreach($skills as $q):
                               
                               ?>
                               <option value="<?php echo $q->slno?>"><?php echo $q->skillname?></option>
                                <?php endforeach;?>
                                
                                    
                                    
                                </select>
                            
                            
                            
							</td>
							</tr>
                            <tr>
						         <td>Sub Catagory Name</td>
							<td><input type="text" name="subname" class="form2" required />
							</td>
							</tr>
                            <tr>
						         <td>Sub Catagory Descp</td>
							<td><textarea name="descp" class="form2" required /></textarea>
							</td>
							</tr>
                            
                            
                            
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

						<td colspan="4" style="padding-left:8px;">Existing Sub Catagory </td>

						

				    </tr>

				

				<?php 
				
	//var_dump($subskills);			
 foreach($subskills as $row):
 
?>
				<tr class="tr" id="<?php echo $row->id ?>">
<?php
$id=$row->category_id;
$qsk=mysql_query("select `skillname` from `skill` where `slno`='$id'");
$rsk=mysql_fetch_array($qsk);
?>

				<td style="padding-left: 8px;"><?php echo $rsk['skillname'];?></td>
                <td style="padding-left: 8px;"><?php echo $row->sub_category_name ?></td>
				<td><a onclick="deleter(<?php echo $row->id?>);" style="color:#000000;"><img src="<?php echo base_url()?>images/delet.png"></a></td>
				<td><a href="<?php echo base_url()?>index.php/home/updateskill/<?php echo $row->id ?>" style="color:#000000;"><img src="<?php echo base_url()?>images/edit.png"></a></td></td>

				</tr>

				<?php endforeach;?>


				</table>	
    
    
    
    
</div>





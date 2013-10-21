<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
function getsubskill(val)
{
	//alert(val);
    $.post('<?php echo base_url()?>index.php/pages/subcategory',
	{ 'id':val},
	function(result) {
//alert(result);
	$('#profile_subcategory').html(result);
	//alert(4);
	}
	);
}
    

</script>

<style>
.contact{
            float: left;
              margin-top: 5px;
            background-color: #CB4486;
text-shadow: 0 1px 0 #73264C;
padding: 10px;
 font-family: arial;
 font-size: 14px;
 color: #fff;
 margin-left: 10px;
  border-radius: 3px;
        }
		</style>


<div id="showsearch" style="width: 980px; height: auto;">
<div style="width: 480px; height: auto; float: left;">

		    <?php echo form_open_multipart('profileupdate/save'); ?>
                            <table style="width:460px; height:650px;font-family: arial; font-size: 14px; padding: 10px; color: #005c91;">
                                <tr>
                                    <td colspan="2">
                                       <h10>About your act or business:</h10>
                                    </td>
                                </tr>
								<?php 
								
								foreach($query as $resval):
								
								
								?>
								<tr><td>Email:</br>
					<input type="text" name="email" class="textbox" style="width: 200px;" value="<?php echo $resval['email']?>"/>
					<input type="hidden" value="<?php echo $resval['id']?>" name="hiden"/>
					</br>
					<span style="font-size: 12px; color: #bfbfbf;">Type carefully, this is where your leads will be sent. Please read our privacy policy.</span></td>
					
					</tr>
                                <tr>
                                    <td colspan="2">
                                        Professional Name:</br>
                                        <input type="text" name="pname" class="textbox" size="60px" value="<?php echo $resval['professionalname']?>"/>
										
										</br>
					<span style="font-size: 12px; color: #bfbfbf;">What is your act or business name?
Examples: "The Moondance Band", "Elite Catering"</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Your Main Category:</br>
                                        <select class="textbox" name="category" style="width: 220px;"  onchange="getsubskill(this.value);">
                                <option value="">Click to browse Categories</option>
                                <?php
					foreach($skills as $row)
											
					{
					?>
					echo <option value="<?php echo $row->slno?>" <?php if($row->slno==$resval['category']){?> selected="selected" <?php } ?>><?php echo $row->skillname?></option>
					<?php
					}
				?>
                                
                                    
					
					</select></br>
					<span style="font-size: 12px; color: #bfbfbf;">Once you get signed up, you can add additional categories.</span>
					
				    </td>
				    <td>
					<select class="textbox" name="subcategory" style="width: 170px;" id="profile_subcategory">
					
					</select>
					</br>
					<span style="font-size: 12px; color: #bfbfbf;">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
					
                                        City or Zip Code :</br>
                                        <input type="text" name="zip" class="textbox" value="<?php echo $resval['zip']?>"/></br>
					<span style="font-size: 12px; color: #bfbfbf;">Example: "65804" or "Springfield" (US and Canada only)</span>
                                    </td>
                                </tr>
								 </tr>
								<tr>
									<td>Minimum Cost:<br/>
									<input type="text" name="mincost" class="textbox" value="<?php echo $resval['mincost']?>" />
								
									</td>
									</tr>
									<tr>
									
								<td>Maximum Cost:<br/>
									<input type="text" name="maxcost" class="textbox" value="<?php echo $resval['maxcost']?>"/>
								
									</td>
								
								
								</tr>
                                <tr>
                                    <td colspan="2">
                                        Describe your services:</br>
					<span style="font-size: 12px; color: #bfbfbf;">
						Here's your chance to sell! Provide an accurate summary of the services you provide.
Please do not put phone numbers or web addresses in this area, and for Heaven's
sake... please avoid typing in all caps.</span></br>
                                        <textarea class="textbox" name="service" style="height: 150px;"><?php echo $resval['service']?></textarea>
                                    </td>
                                </tr>
                               <tr>
				<td colspan="2">Add Image:<br />
					<input type="file" name="userfile" class="textbox" />
					<div style="width:80px; height:50px;"><img src="<?php echo base_url()?>/uploads/<?php echo $resval['image']?>" style="height:50px; width:80px;"  /></div>
				</td>
			       </tr>
                                
                            </table>
                        
</div>

<div style="width: 480px; height: auto; float: left;margin-left: 20px;">
                            <table style="width:460px; height:650px;font-family: arial; font-size: 14px; padding: 10px; color: #005c91;">
                                <tr>
                                    <td colspan="2">
                                       <h10>About Act:</h10>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        First Name:</br>
					<input type="text" name="fname" class="textbox" style="width: 200px;" value="<?php echo $resval['fname']?>"/>
                                    </td>
				    <td>
                                        Last Name:</br>
					<input type="text" name="lname" class="textbox" style="width: 200px;" value="<?php echo $resval['lname']?>"/>
                                    </td>
                                </tr>
                                <tr>
                                   <td colspan="2">
                                        Your street address:</br>
                                        <input type="text" name="address" class="textbox" value="<?php echo $resval['address']?>"/></br>
					<span style="font-size: 12px; color: #bfbfbf;">For verification purposes. Will not be published.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Phone:</br>
					<input type="text" name="phone" class="textbox" style="width: 200px;" value="<?php echo $resval['phone']?>"/></br>
					<span style="font-size: 12px; color: #bfbfbf;">Example: 417-889-9909 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                    </td>
				    <td>&nbsp;
                                        
                                    </td>
                               </tr>
							
                               <tr>
                                    <td colspan="2">
                                       
					<input type="text" name="a" class="textbox" value="<?php echo $resval['aboutus']?>"/></br>
					<span style="font-size: 12px; color: #bfbfbf;">Specifically, how did you hear about us? (optional)</span>
                                    </td>
                                </tr>
			       <tr>
				<td colspan="2">
					<input type="checkbox" name="check"/> &nbsp;
					 I have read and agree to Gig Salad's terms of use.
				</td>
			       </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" name="submit" value="Update" class="contact" style="border: none;"/>
                                    </td>
                                    
                                </tr>
								<?php endforeach;?>
                            </table>
			      <?php echo form_close(); ?>
			
                        </div>
						</div>
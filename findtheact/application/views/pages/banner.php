  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
      <script type="text/javascript">
function getsubcategory(val)
{
 var len=val.length;
	if (len>3) {
	    $.post('<?php echo base_url()?>index.php/pages/subcategory1',
		{ 'name':val},
		function(result) {
		//alert(result);
		$('#subcat').show();
		$('#subcat1').html(result);
		}
		);	
	}
   
}

 function getval(val1)
 {
    $('#subcat').hide();
    
    $('#skill').val(val1);
 }

</script>  
        
<div id="banner">
            <div id="banner_content">
                <div id="banner_left">
                    <h3>Search For Entertainers<br/>
                   <span style="font-size: 18px; color: #005c91;">The World's largest online entertainment booking agency.
Live bands for hire throughout the UK.</span>  </h3>
                    <?php
                    
							$attributes = array('class' => '', 'id' => '');
							echo form_open('pages/search/', $attributes); ?>
			              <table style="width:440px; height: 250px; font-family: arial; font-size: 16px; color: #005c91;">
                        <!--<tr>
                            <td>Event Type</td>
                            <td colspan="4">
                                <select class="textbox" name="event">
                                <option value="">Select</option>
                                <?php
											//foreach($events as $ro => $row)
											
											//{
											//	echo "<option value='".$row->slno."'>". $row->eventname."</option>";
											//}
									?>
                                
                                    
                                    
                                </select>
                                
                                </td>
                        </tr>-->
			
			 <tr>
                            <td>My City:</td>
                            <td colspan="4">
				<input list="eventname1" name="location" id="location" class="textbox" value="City" onClick="if(this.value=='City') this.value='';" onBlur=" if(this.value=='') this.value='City';" autocomplete="off" />
			 <datalist id="eventname1">
			     <?php
											foreach($locations as $row)
											{
											?>
			   <option value="<?php echo $row->loc ?>">
			   <?php
			   }
			   ?>
			 </datalist>
                            </td>
                        </tr>
			 
                        <tr>
                            <td>My Event Date :</br> (Optional)</td>
                            <td><select class="textbox" style="width:59px;">
                                    <option value="">Sat</option>
                                    <option value="">Fri</option>
                                    <option value="">Thu</option>
                                </select></td>
                            <td><select class="textbox" style="width:59px;">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select></td>
                            <td><select class="textbox" style="width:59px;">
                                    <option value="">Jan</option>
                                    <option value="">Feb</option>
                                    <option value="">Mar</option>
                                </select></td>
                            <td><select class="textbox" style="width:82px;">
                                    <option value="">2013</option>
                                    <option value="">2012</option>
                                    <option value="">2011</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td>I'm looking for:</td>
                            <td colspan="4">
				<input list="eventname" name="skill" id="skill" class="textbox" onKeyPress="return getsubcategory(this.value);" value="Photography, Acrobat, Quartet ..." onClick="if(this.value=='Photography, Acrobat, Quartet ...') this.value='';" onBlur=" if(this.value=='') this.value='Photography, Acrobat, Quartet ...';" autocomplete="off" />
			 <!--<datalist id="eventname">
			     //<?php
				//foreach($skills as $row)
				//{?>
			   <option value="<?php echo $row->skillname ?>">
			  // <?php
			  //}
			  // ?>
			 </datalist>-->
			 <div id="subcat" style="margin-top: 1px; border-radius:2px; background: #fff;width: 298px; height: 150px; float: left; display: none; border: 1px solid #036;">
			    <table id="subcat1"></table>
			 </div>
                                </td>
                        </tr>
                       
                        <tr>
                            <td>Max Budget</td>
                            <td colspan="4">
                                <select class="textbox" name="price">
                                    <option value="100">Up to $100</option>
                                    <option value="300">Up to $300</option>
                                    <option value="500">Up to $500</option>
                                    <option value="1000">Up to $1000</option>
                                    <option value="1500">Up to $1500</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td colspan="4"><input type="submit" name="submit" value="Search" class="search"></td>
                        </tr>
                    </table>
                    </form>
                    
                </div>
                <div id="banner_right">
                    <img src="<? echo base_url();?>images/funkybg.png"  style="margin-top: 80px;" />
                </div>
            </div>
       </div>
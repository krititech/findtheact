<link rel="stylesheet"  href="<?php echo base_url()?>css/style11.css" />

<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-ui.js"></script>
<script>
$(function() {
var currentYear = ((new Date).getFullYear()-0)+1;
$( "#slider-range" ).slider({
range: true,
min: 0,


max: 200000,
//alert(min);
values: [ 500, 20000 ],
slide: function( event, ui ) {
$( "#min" ).val(  ui.values[ 0 ] );
$( "#max" ).val(  ui.values[ 1 ] );

}
});
$( "#min" ).val(  $( "#slider-range" ).slider( "values", 0 )); 
$( "#max" ).val(  $( "#slider-range" ).slider( "values", 1 ));

});
</script>						

<h3>Add act</h3>
						<?php
        echo form_open_multipart('addact/save');    
    ?>
	
						
							<table width="700" height="400" class="table">
                                                            <tr>
                                                                <td>ACT NAME </td>
                                                                <td><input type="text" name="name" class="form2" /></td>
                                                              </tr>
                                                          <tr><td>EVENT TYPE</td>
					 <td><select name="eventname" class="form1 form2" style="padding:3px;">
                                                           <?php foreach($events as $row): ?>
								    
								    <option value="<?php echo $row->slno?>"><?php echo $row->eventname?></option>
					                   <?php endforeach;?>
				  
								  </select></td> 
				  
				  
				  
				  </tr>
				  <tr>
					<td>SKILL </td>
				  <td>
				  <?php foreach($skills as $q): ?>
					<input type="checkbox" name="checklist[]"  value="<?php echo $q->slno?>" id="cbox"><?php echo $q->skillname?><br />
				 <?php endforeach;?>
				  </td>
				    </tr>   
				  <tr>
					<td>MIN COST </td>
					<td><input type="text" name="cost1" id="min" class="form2" /></td>
				  <td>MAX COST </td>
					<td><input type="text" name="cost2"  id="max" class="form2" /></td>
				      </tr>

<tr>
<td>
<p>
<label for="amount">Range:</label></p></td>
<td><div id="slider-range"></div></td>
</tr>



				  <tr>
					<td>LOCATION</td>
					<td><input type="text" name="location"  class="form2" /></td>
				      </tr>
				      <tr>
					<td>Description</td>
					<td><textarea name="descp"  class="form2" style="height:70px;"/></textarea></td>
				      </tr>
				      <tr>
				      <td >Act Image</td>
				      <td >
					<input type="file" name="userfile"  class="form2"/>  </td>
				    </tr>
				      
					  
				      <tr>
					<td colspan="2" align="right"><input type="submit" name="Submit" value="Submit" class="submit" /></td>
				      </tr>
				  
				  
				  
				  
						</table>
						
						<?php
						echo form_close();
						?>
						

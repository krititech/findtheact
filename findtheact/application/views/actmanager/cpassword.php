<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
function deleterecord()
{
    var pass=$('#npass').val();
    var cpass=$('#rnpass').val();
    var cpass1=$('#cpass').val();
    var email=$('#cemail').val();
    if (pass=='') {
        alert("New Password Cannot Be Blank.");
    }
    else{
    if (pass!=cpass) {
       alert("New Password & Confirm Password Are Not Identical");
     }
	else{
					    $.post('<?php echo base_url()?>index.php/userlogin/cpassword',
						     { 'email':email,'pass':pass ,'cpass':cpass1},
    
	
						    function(result) {
														    
							    alert(result);
							    
							      }
							     );
	}
    }
}
</script>                                             
                                                
                                                <h3> Change Password </h3>	
						
						 <table width="700" height="200" class="table">
						  
						  <tr>
						    <td>Current Password<input type="hidden" id="cemail" name="hideemail" value="<?php echo $email;?>"/></td>
						    <td><input type="password" name="currentpwd" id="cpass" class="form2" /></td>
						  </tr>
						  <tr>
						    <td>New Password </td> 
						    <td><input type="password" name="newpwd" id="npass" class="form2" /></td>
						  </tr>
						  <tr>
						    <td>Re-Type New Password </td>
						    <td><input type="password" name="retypepwd" id="rnpass" class="form2" /></td>
						  </tr>
						  <tr> 
							<td>&nbsp;</td>
						    <td ><input type="button" name="Submit" onclick="deleterecord();" value="Save Changes"  class="button submit" style="width: 100px;"/></td>
						    
						  </tr>
						</table>
						
						
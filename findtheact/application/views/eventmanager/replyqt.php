<?php
$userID = $this->uri->segment(3);
$query=mysql_query("select `email` from `contact_details` where `slno`='$userID'");
$res=mysql_fetch_array($query);
?>
<div style="width:100%;height:auto;float:left; background: #ffffff;">	
<?php echo form_open('replyquoat/send')?>
	<table width="700" class="table border" style="font-size: 14px;">

				  <tr><td colspan="2">Reply Request</td></tr>
				  <tr>
				  <td>To:</td>
				  <td><input type="text" name="to" readonly="" value="<?php echo $res['email'];?>"  /></td>
				  </tr>
				  <tr>
				  <td>From:</td>
				  <td><input type="text" name="from" value="<?php echo $emailvalue?>" readonly=""  /></td>
				  </tr>
				  <tr>
				  <td>Subject:</td>
				  <td><input type="text" name="sub"  /></td>
				  </tr>
				  <tr>
				  <td>Message:</td>
				  <td><input type="text" name="msg"  /></td>
				  </tr>
				  <tr><td colspan="2"><input type="submit" name="submit" value="Send"  /></td></tr>
				

				</table>
				</form>
</div>
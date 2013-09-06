		     <h3>Add Act Manager</h3>
			     <?php echo form_open('addactman/save'); ?>
                                           <table width="700" height="200" class="table">
                           <tr>
                            <td>User Name</td>
                            <td><input type="text" name="username" class="textbox form2"/></td>
                           </tr>
                           <tr>
                            <td>password</td>
                            <td><input type="password" name="pwd" class="textbox form2"/></td>
                           </tr>
                           <tr>
                            <td>Email Address</td>
                            <td><input type="text" name="email" class="textbox form2"/></td>
                           </tr>
                             <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="submit" value="Add Act Manager" class="submit" style="width:130px;" /></td>
                           </tr>
                         </table>
                           <?php
						echo form_close();
						?>
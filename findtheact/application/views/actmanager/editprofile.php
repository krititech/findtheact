<h3>Editprofile</h3>
			     <?php echo form_open('editprofile/save'); ?>
                                            <table width="700" height="140" class="table">
                                            
                                            <tr>
                                            <td>
                                            User Name
                                            </td>
                                            <td>
                                            <input type="text" name="user" value="<?php echo $username;?>" class="form2" />
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                            Email
                                            </td>
                                            <td>
                                            <input type="text" name="email" value="<?php echo $email;?>" class="form2" readonly />
                                            
                                            </td>
                                            </tr>
                                            <tr>
                                            <td>
                                            <input type="submit" name="submit" value="submit" class="submit">
                                            </td>
                                            </tr>
                                            </table>
                           <?php
						echo form_close();
						?>
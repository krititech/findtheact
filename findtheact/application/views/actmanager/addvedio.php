<div style="width: 480px; height: auto; float: left;">

		    <?php echo form_open_multipart('addvideo/add_video'); ?>
                            <table style="width:460px; height:200px;font-family: arial; font-size: 14px; padding: 10px; color: #005c91;">
                                <tr>
                                    <td colspan="2">
                                       <h10>Add Your Video/Songs</h10>
                                    </td>
                                </tr>
                                
                                <tr>
				<td colspan="2">Add Video/songs:<br />
					<input type="file" name="video" id="video" class="textbox" />
					<input type="hidden" name="addedby" value="<?php echo $emailvalue?>"  />
				</td>
			       </tr>
			       
			       <tr>
				<td colspan="2">Add Video/songs from youtube:<br />
					<input type="textbox" name="userfile" class="textbox" />
				</td>
			       </tr>
                                 <tr>
                                    <td colspan="2">
                                        <input type="submit" name="submit" value="ADD VIDEO" class="contact" style="border: none;"/>
                                    </td>
                                    
                                </tr>
                            </table>
			      <?php echo form_close(); ?>
			
                        </div>
                                

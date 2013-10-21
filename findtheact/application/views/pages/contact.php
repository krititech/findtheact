<div id="showsearch" style="width:980px;">
 <?php echo form_open_multipart('contact/save')?>
                            <table style="width:960px; height:auto; padding: 10px; font-family: arial; font-size: 14px; color: #005c91;">
                                <tr>
                                    <td colspan="3">
                                        What type of event are you planning?</br>
                                        <select class="textbox" name="eventname">
                                            <option>Click to browse Categories</option>
											<?php
											foreach($events as $event)
											{
											
											?>
											<option value="<?php echo $event->slno;?>"><?php echo $event->eventname;?></option>
                                            <?php
											}
											?>
                                        </select>
                                    </td>
                                   
                                </tr>
								<tr>
								<td colspan="3">
								When is your event?
								 </td>
								</tr>
								<tr>
								<td colspan="3">Do you know the event’s date?&nbsp; &nbsp; &nbsp;
								 <input type="radio" name="eventtime" checked="checked">Yes &nbsp; &nbsp; &nbsp;
                                        <input type="radio" name="eventtime">No
								
								</td>
								</tr>
								
								<tr>
                                    <td>
                                       Event Date</br>
                                        <input type="text" class="textbox" name="eventdate"/>
                                    </td>
                                    
                                </tr>
								
								<tr>
                                    <td>
                                       Starting at</br>
                                        <select class="textbox" name="timing">
                                           <option value="0" selected="selected">7:00am</option>
											<option value="1">7:30am</option>
											<option value="2">8:00am</option>
											<option value="3">8:30am</option>
											<option value="4">9:00am</option>
											<option value="5">9:30am</option>
											<option value="6">10:00am</option>
											<option value="7">10:30am</option>
											<option value="8">11:00am</option>
											<option value="9">11:30am</option>
											<option value="10">12:00pm (Noon)</option>
											<option value="11">12:30pm</option>
											<option value="12">1:00pm</option>
											<option value="13">1:30pm</option>
											<option value="14">2:00pm</option>
											<option value="15">2:30pm</option>
											<option value="16">3:00pm</option>
											<option value="17">3:30pm</option>
											<option value="18">4:00pm</option>
											<option value="19">4:30pm</option>
											<option value="20">5:00pm</option>
											<option value="21">5:30pm</option>
											<option value="22">6:00pm</option>
											<option value="23">6:30pm</option>
											<option value="24">7:00pm</option>
											<option value="25">7:30pm</option>
											<option value="26">8:00pm</option>
											<option value="27">8:30pm</option>
											<option value="28">9:00pm</option>
											<option value="29">9:30pm</option>
											<option value="30">10:00pm</option>
											<option value="31">10:30pm</option>
											<option value="32">11:00pm</option>
											<option value="33">11:30pm</option>
											<option value="34">12:00am (Midnight)</option>
											<option value="35">12:30am</option>
											<option value="36">1:00am</option>
											<option value="37">1:30am</option>
											<option value="38">2:00am</option>
											<option value="39">2:30am</option>
											<option value="40">3:00am</option>
											<option value="41">3:30am</option>
											<option value="42">4:00am</option>
											<option value="43">4:30am</option>
											<option value="44">5:00am</option>
											<option value="45">5:30am</option>
											<option value="46">6:00am</option>
											<option value="47">6:30am</option>
                                        </select>
                                    </td>
                                    <td>
                                        Duration</br>
                                        <select class="textbox" name="duration">
											<option class="grey" value="">Event Length</option>
											<option value="0">15 minutes</option>
											<option value="1">30 minutes</option>
											<option value="2">45 minutes</option>
											<option value="3">1 hour</option>
											<option value="4">1 hour 30 minutes</option>
											<option value="5">2 hours</option>
											<option value="6">2 hours 30 minutes</option>
											<option value="7">3 hours</option>
											<option value="8">3 hours 30 minutes</option>
											<option value="9">4 hours</option>
											<option value="10">4 hours 30 minutes</option>
											<option value="11">5 hours</option>
											<option value="12">5 hours 30 minutes</option>
											<option value="13">6 hours</option>
											<option value="14">6 hours 30 minutes</option>
											<option value="15">7 hours</option>
											<option value="16">7 hours 30 minutes</option>
											<option value="17">8 hours</option>
											<option value="18">8 hours 30 minutes</option>
											<option value="19">9 hours</option>
											<option value="20">9 hours 30 minutes</option>
											<option value="21">10 hours</option>
											<option value="22">10 hours 30 minutes</option>
											<option value="23">11 hours</option>
											<option value="24">11 hours 30 minutes</option>
											<option value="25">12 hours</option>
                                        </select>
                                    </td>
                                </tr>
								<tr>
									<td>Where is your event?</td>
								</tr>
								<tr>
									<td>City</br>
									<input type="text" name="city" class="textbox" />
									</td>
									<td>State</br>
									<input type="text" name="state" class="textbox" />
									</td>
									
									<td>Zip/PostalCode</br>
									<input type="text" name="zip" class="textbox" />
									</td>
								
								</tr>
								
								<tr>
									<td colspan="3">
									<?php
									$q1=mysql_query("select `image`,`id` from `profile` where `id`='$slno'");
									$r1=mysql_fetch_array($q1);
									$image=$r1['image'];
									?>
									<img src="<? echo base_url();?>uploads/<?php echo $image?>" style=" border-radius: 8px;width: 50px;height: 50px;"/><br/>
									<input type="checkbox" name="imag" checked="checked" value="<?php echo $r1['id'];?>" />
									
									</td>
								</tr>
								
								<tr>
									<td colspan="3">
									Get free quotes from our professionals?
									</td>
								</tr>
								<tr>
									<td colspan="3">
									<input type="radio" name="contact_other_acts" value="5" />
									Yes, up to 5 additional quotes
									</td>
								</tr>
								<tr>
									<td colspan="3">
									<input type="radio" name="contact_other_acts" value="10" />
									Yes, up to 10 additional quotes
									</td>
								</tr>
								<tr>
									<td colspan="3">
									<input type="radio" name="contact_other_acts" value="0" />
										Not at this time
									</td>
								</tr>
								
								
								
								<tr>
									<td colspan="3">
										Which styles/services are needed for your event? (check all that apply)
									</td>
								</tr>
								<tr>
									`	<td>
									<?php
				
				 $skill=str_replace('%20',' ',$skill);
				 
			     $qsubskill=mysql_query("SELECT * FROM `subskill` WHERE `category_id`=(select `category_id` from `subskill` where `sub_category_name`='$skill')") or die(mysql_error());
			     while($rsubskill=mysql_fetch_array($qsubskill))
				{
				?>
				<input type="checkbox" name="type[]" value="<?php echo $rsubskill['id']?>" <?php if( $skill==$rsubskill['sub_category_name']){?> checked="checked" <?php } ?> /><?php echo $rsubskill['sub_category_name']?><br />
				<?php
				}
				?>
 									
										</td>
										
								</tr>
								
								
								<tr>
                                    <td>
                                        Your Budget: <span style="font-size: 12px; color: #bfbfbf;">(Optional)</span></br>
                                        <input type="text" class="textbox" name="budget"/>
                                    </td>
                                    <td>&nbsp;
                                        
                                    </td>
                                </tr>
								
								<tr>
                                    <td>
                                        Your Full Name:</br>
                                        <input type="text" class="textbox" name="username"/>
                                    </td>
                                    <td>
  										Company (if applicable):</br>
                                        <input type="text" class="textbox" name="cname"/>
                                    </td>
                                </tr>
								
								<tr>
                                    <td>
                                        Your Email:</br>
                                        <input type="text" class="textbox" name="email"/>
                                    </td>
                                    <td>
  										Your Phone Number:</br>
                                        <input type="text" class="textbox" name="contact"/>
                                    </td>
                                </tr>
								
								<tr>
                                    <td>
                                        Create a password:</br>
                                        <input type="text" class="textbox" name="password"/><br />
										 Or, enter your password if you already have an account.

                                    </td>
                                    <td>
  										&nbsp;
                                    </td>
                                </tr>
								
								
                                <tr>
                                    <td>
                                        <input type="submit" name="submit" value="Send Request" class="search" style="width:180px;"/>
                                    </td>
                                    <td>&nbsp;
                                        
                                    </td>
                                </tr>
                            </table>
							<?php
						echo form_close();
						?>
                        </div>
                 
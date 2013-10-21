<html>
    <head>
        <title>Find The Act</title>
        <link rel="stylesheet" href="<? echo base_url();?>css/style.css" type="text/css" media="screen" />
        	
			<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.9.1.min.js" ></script>
		<script type="text/javascript">
		
		function getsubcat1(vall)
{

if(vall!='')
{
    var len=vall.length;
	if (len>2) {
	    $.post('<?php echo base_url()?>index.php/pages/searchsubcategory',
		{ 'name1':vall},
		function(result) {
		//alert(result);
		$('#searchsubcat').show();
		$('#searchsubcat1').html(result);
		}
		);	
	}
	}
else
{
	$('#searchsubcat').hide();
}




}

function searchgetval(getvalue)
{

 $('#searchsubcat').hide();
    
    $('#skillval').val(getvalue);

}
		
		
		
		
		
		
		
		
		</script>
    
    </head>
    
<body>
    
    <div id="topbar">
            <div id="topbar_content">
                <div id="socialbar">
		    <div id="socialbar_leftbox">
			<a href="<? echo site_url();?>/pages/profile" style="text-decoration:none;">
			<div class="socialbarbox1" style="background: #8ad6ff;">		    
			    Join
			</div>
			</a>
			<a href="<? echo site_url();?>/userlogin" style="text-decoration:none;">
			<div class="socialbarbox1" style="font-size: 16px;">		    
			    Login
			</div>
			</a>
			<div class="socialbarbox1" style="font-size: 16px; width:100px;">		    
			    How It Works
			</div>
		    </div>
		    <div id="socialbartextbox">
			<div id="socialbartextbox1">
			<?php
			$attributes = array('class' => '', 'id' => '');
			 echo form_open('pages/topbarsearch/', $attributes); ?>
			<input list="eventname" name="skillval" id="skillval" class="textbox1"  onKeyUp="return getsubcat1(this.value);" value="" placeholder="Photography, Acrobat, Quartet ..." autocomplete="off" />
			
			 <div id="searchsubcat" style="margin-top: 1px; border-radius:2px; background: #fff;width: 298px; height: 150px; float: left; display: none; border: 1px solid #036;">
			    <table id="searchsubcat1"></table>
			 </div>
			
			 
			</div>
			<div id="socialbartextbox2">
			   <input type="submit" name="submit" value="" style="width:37px; height:30px;border:none; background:url(<? echo base_url();?>images/search.png); margin-left: 3px; margin-top: 3px;">
			</div>
			 </form>
		    </div>
                  </div>
                </div>
            </div>
        </div>
        
        
        <div id="menubar">
            <div id="menubar_content">
                <div id="logo">
                    <img src="<? echo base_url();?>images/logo.png" style="margin-top: -30px;"/>
                </div>
                <div id="menubar1">
                     <img src="<? echo base_url();?>images/planning_label.gif" style="margin-top:10px; margin-left: 5px; float: left;">
			<p class="text" style="color:rgb(119, 119, 119); margin-left:60px; float: left;">Save any vendor, and <br />
			they'll appear right here!</p>
			
			<p class="text" style="color:rgb(119, 119, 119); margin-left: 50px; float: left; margin-bottom: 0px;">Or, request a
			</p>
			<div class="quick">Quick Quote</div>
                </div>
            </div>
        </div>
    <div id="tabbar">
        <div id="tabbar_content">
            <a href="<? echo site_url();?>/pages/entertain" style="text-decoration:none;">
            <div class="tab" style="margin-left: 260px;">
                Entertainment 
            </div>
			</a>
			<a href="<? echo site_url();?>/pages/eventservices" style="text-decoration:none;">
            <div class="tab">
                Event Services 
            </div>
			</a>
            <div class="tab">
                Party Ideas 
            </div>
        </div>
    </div>
    
    <div id="profilecontainer">
        <div id="profile_content">
            <div id="profilecontent">
                <div id="profilehead">
                     <p class="text" style="background:url(<? echo base_url();?>images/headimg.png) no-repeat; text-align: center; font-size: 17px; padding-top: 5px; padding-left:15px; margin-left: 15px; width:180px; height:45px; float: left; background-size:100% 100%;">
		YOU ARE HERE</p>
                </div>
                <div id="profilehead1">
                    <div id="profilehead1left">
                        
                        <h10>
                        
                          Hire <?php echo $skill;?> </br>
                           
                        near <?php echo $location;?></h10></br>
                        <p class="text5">Find a <span style="color:#00c2fc;">specific type</span> or try <span style="color:#00c2fc;">another location</span></p>
                    </div>
                    <div id="profilehead1right">
                        <p class="text5"><span style="font-weight: bold;">We make hiring Singers in Hilton Head Island SC a snap!</span>
                        Browse and book the perfect Hilton Head Island Singers for your wedding, corporate event or private party on Gig Salad, the event planner's booking destination.</p>
                    </div>
                </div>
        
                <div id="profilec">
                    <div id="profilec_left">
                        <div class="divider">
                            <p class="text5" style="font-size: 9px; margin-top: 4px;">Browse and compare 206 Hilton Head Island Singers (and those who serve Hilton Head Island, South Carolina)</p>
                        </div>
                        <div style="width: 660px; height: auto; float: left;">
                          
                        <?php $i=0; foreach($results as $row): ?>
                        
                        <div class="profilepart" style="margin-left:<?php if($i==0){?> 0px; <?php } else {?> 30px; <?php }?>">
                            <div class="profilepartimg">
                                <img src="<? echo base_url();?>uploads/<?php echo $row->image?>" style=" border-radius: 8px;width: 200px;height: 200px;"/>
                            </div>
                            <div class="act">
                                <img src="<? echo base_url();?>images/starp.png">
                                <img src="<? echo base_url();?>images/starp1.png">
                                <img src="<? echo base_url();?>images/starp1.png">    
                                <img src="<? echo base_url();?>images/starp1.png">    
                            </div>
                            <div class="profiledesc">
                                <div style="width: 200px; height: auto; float: left;">
                                <span style="float: left;font-size: 14px; color: #00c2fc; font-weight: bold;">
                                    <?php echo $row->fname." ".$row->lname?></br>
                                    <span style="float: left;font-size: 9px; font-weight: normal;"><?php echo $row->address?></span></br>
                                </span>
                                <span style="float: left;font-size: 9px; color: #C2BBB1;"> 13 miles from Hilton Head Island</span>
                                </div>
                                <div class="save">
                                    Save
                                </div>
								<a href="<? echo site_url();?>/pages/contact/<?php echo $row->id;?>/<?php echo $skill?>" style="text-decoration:none;">
                                <div class="contact">
                                    Contact Now
                                </div>
								</a>
                                <p class="text5" style="float: left;  color: #949188;"><span style=" color: #555;font-weight: bold;"><?php echo $row->professionalname?></span></br>
                                   <?php $text=$row->service; echo substr($text,0,250); ?></p>
                                    
                            </div>
                            
                        </div>
                <?php $i++; endforeach;
                ?>
                       
                        </div>
                        
                        
                      
                        
                        
                      <div class="divider" style="float: left;">
                        </div>  
                        
                         <div class="button_gry">
                            Show me more!
                        </div>
                        
                        <div id="showsearch">
                            <table style="width:640px; height:auto; padding: 10px; font-family: arial; font-size: 14px; color: #005c91;">
                                <tr>
                                    <td>
                                        Category you'd like to book:</br>
                                        <select class="textbox">
                                            <option>Click to browse Categories</option>
                                            <option>Actors & Models</option>
                                            <option>Bands & Groups</option>
                                            <option>Circus & Acrobatic</option>
                                            <option>Classical Music</option>
                                            <option>Comedians</option>
                                        </select>
                                    </td>
                                    <td>
                                         <select class="textbox">
                                            <option>Now, Select Main Category</option>
                                            <option>Actors & Models</option>
                                            <option>Bands & Groups</option>
                                            <option>Circus & Acrobatic</option>
                                            <option>Classical Music</option>
                                            <option>Comedians</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Entertainment Type:</br>
                                        <select class="textbox">
                                            <option>Click to browse Categories</option>
                                            <option>Actors & Models</option>
                                            <option>Bands & Groups</option>
                                            <option>Circus & Acrobatic</option>
                                            <option>Classical Music</option>
                                            <option>Comedians</option>
                                        </select>
                                    </td>
                                    <td>&nbsp;
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Event City:</br>
                                        <input type="text" value="Hilton Head Island" class="textbox"/>
                                    </td>
                                    <td>
                                        Event State/Province:</br>
                                        <select class="textbox">
                                            <option>Now, Select Main Category</option>
                                            <option>Actors & Models</option>
                                            <option>Bands & Groups</option>
                                            <option>Circus & Acrobatic</option>
                                            <option>Classical Music</option>
                                            <option>Comedians</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        Do you know the venue name or street address for this event?
                                        <input type="radio">Yes &nbsp; &nbsp; &nbsp;
                                        <input type="radio">Not Yet
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Venue Name:</br>
                                        <input type="text" class="textbox"/></br>
                                        <span style="font-size: 12px; color: #bfbfbf;">Examples: Dixie Grill, My Home</span>
                                    </td>
                                    <td>
                                        Venue Street Address:</br>
                                        <input type="text" class="textbox"/></br>
                                        <span style="font-size: 12px; color: #bfbfbf;">Example: 123 West Main St.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Venue Zip/Postal Code:</br>
                                        <input type="text" class="textbox"/>
                                    </td>
                                    <td>&nbsp;
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Your Budget: <span style="font-size: 12px; color: #bfbfbf;">(Optional)</span></br>
                                        <input type="text" class="textbox"/>
                                    </td>
                                    <td>&nbsp;
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Do you know the event's date?</br>
                                        <input type="radio">Yes &nbsp; &nbsp; &nbsp;
                                        <input type="radio">Not Yet
                                    </td>
                                    <td>&nbsp;
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        When is your event?</br>
                                        <input type="text" class="textbox"/>
                                    </td>
                                    <td>&nbsp;
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        What Time?</br>
                                        <select class="textbox">
                                            <option>12:00-1:00</option>
                                            <option>1:00-2:00</option>
                                            <option>2:00-3:00</option>
                                            <option>3:00-4:00</option>
                                            <option>4:00-5:00</option>
                                            <option>5:00-6:00</option>
                                        </select>
                                    </td>
                                    <td>
                                        How long will it be?</br>
                                        <select class="textbox">
                                            <option>15 minute</option>
                                            <option>30 minute</option>
                                            <option>45 minute</option>
                                            <option>1 hour</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Your Name:</br>
                                        <input type="text" class="textbox"/>
                                    </td>
                                    <td>
                                        Your Phone Number:</br>
                                        <input type="text" class="textbox"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Your Email:</br>
                                        <input type="text" class="textbox"/>
                                    </td>
                                    <td>&nbsp;
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        Event Details:</br>
                                        <input type="text" class="textbox" style="width:500px; height: 80px;"/>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Create a login password:</br>
                                         <input type="text" class="textbox"/></br>
                                         <span style="font-size: 12px; color: #bfbfbf;">Or, enter your password if you already have an account.</span>
                                    </td>
                                    <td>&nbsp;
                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="button" value="Get Quotes Now!" class="search" style="width:180px;"/>
                                    </td>
                                    <td>&nbsp;
                                        
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div> 
                   
                    
                    <div class="profilec_right">
                         <p class="text" style=" margin-bottom:0px;background:url(<? echo base_url();?>images/headimg.png) no-repeat; margin-top: 30px; text-align: center; font-size: 17px; padding-top: 5px; padding-left:15px; margin-left: 15px; width:250px; height:45px; float: left; background-size:100% 100%;">
		YOU MIGHT ALSO LIKE</p>
                         
                         <ul style="float: left;">
			     <?php
				 
			     $qsubskill=mysql_query("SELECT * FROM `subskill` WHERE `category_id`=(select `category_id` from `subskill` where `sub_category_name`='$skill')") or die(mysql_error());
			     while($rsubskill=mysql_fetch_array($qsubskill))
				{
				?>
			    <a href="<?php echo base_url()?>index.php/pages/getsubcat/<?php echo $rsubskill['id'];?>" style="color:#000000; text-decoration:none;"><li class="list"><?php echo $rsubskill['sub_category_name']; ?></li></a>
			<?php
			   }
			   ?>
			</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
  <div id="footer1">
	    <div id="footer1_box">
		<div class="footer1_box1">
		    <ul style=" font-family: Arial, Helvetica sans-serif; font-size: 15px;  float: left; color:#555555; line-height: 1.6; list-style-type: none;">
			<li style="font-weight: bold; font-size: 18px; list-style: none; color:#006796;">About Us</li>
			<li>Classical Ensembles</li>
			<li>DJs</li>
			<li>Guitarists</li>
			<li>Jazz Bands</li>
		    </ul>
		</div>
		
		<div class="footer1_box1">
		    <ul style=" font-family: Arial, Helvetica sans-serif; font-size: 15px;  float: left; color:#555555; line-height: 1.6; list-style-type: none;">
			<li style="font-weight: bold; font-size: 18px; list-style: none; color:#006796;">Members</li>
			<li>Classical Ensembles</li>
			<li>DJs</li>
			<li>Guitarists</li>
			<li>Jazz Bands</li>
		    </ul>
		</div>
		
		<div class="footer1_box1">
		    <ul style=" font-family: Arial, Helvetica sans-serif; font-size: 15px;  float: left; color:#555555; line-height: 1.6; list-style-type: none;">
			<li style="font-weight: bold; font-size: 18px; list-style: none; color:#006796;">Connect</li>
			<li>Classical Ensembles</li>
			<li>DJs</li>
			<li>Guitarists</li>
			<li>Jazz Bands</li>
		    </ul>
		</div>
		
		<div class="footer1_box1">
		    <ul style=" font-family: Arial, Helvetica sans-serif; font-size: 15px;  float: left; color:#555555; line-height: 1.6; list-style-type: none;">
			<li style="font-weight: bold; font-size: 18px; list-style: none;">&nbsp;</li>
			<li>Classical Ensembles</li>
			<li>DJs</li>
			<li>Guitarists</li>
			<li>Jazz Bands</li>
		    </ul>
		</div>
	    </div>
       </div>
      
       
       <div id="separator">
        
       </div>
       <div id="footer">
            <div id="footer_content"  style="position: relative;">
                &copy; Copyright All Rights Reserved
                 <div style="width:131px; height: 142px; position: absolute; bottom:0;float: left; right: 0;  z-index:99;">
                <img src="<? echo base_url();?>images/event12.png" />
            </div>
            </div>
           
       </div>
    </body>
</html>

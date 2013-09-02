<?php
/*
 * Created on Sep 1, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<html>
    <head>
        <title>Find The Act</title>
        <link rel="stylesheet" href="<? echo base_url();?>css/style.css" type="text/css" media="screen" />
        
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/pfold.css" />
        <link rel="stylesheet" type="text/css" href="<? echo base_url();?>css/custom2.css" />
		<script type="text/javascript" src="<? echo base_url();?>js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]><style>.support-note .note-ie{display:block;}</style><![endif]-->
    </head>
    
    <body>
        <div id="topbar">
            <div id="topbar_content">
                <div id="socialbar">
		    <div id="socialbar_leftbox">
			<div class="socialbarbox1" style="background: #8ad6ff;">		    
			    Join
			</div>
			<div class="socialbarbox1" style="font-size: 16px;">		    
			    Login
			</div>
			<div class="socialbarbox1" style="font-size: 16px; width:100px;">		    
			    How It Works
			</div>
		    </div>
		    <div id="socialbartextbox">
			<div id="socialbartextbox1">
			    <input type="text" name="" id="textbox1">
			</div>
			<div id="socialbartextbox2">
			    <img src="<? echo base_url();?>images/search.png" style="margin-left: 3px; margin-top: 3px;">
			</div>
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
        
       <div id="banner">
            <div id="banner_content">
                <div id="banner_left">
                    <h3>Search For Entertainers<br/>
                   <span style="font-size: 18px; color: #005c91;">The World's largest online entertainment booking agency.
Live bands for hire throughout the UK.</span>  </h3>
                    <?php
                    
							$attributes = array('class' => '', 'id' => '');
							echo form_open('pages/search/', $attributes); ?>
			              <table style="width:440px; height: 280px; font-family: arial; font-size: 16px; color: #005c91;">
                        <tr>
                            <td>Event Type</td>
                            <td colspan="4">
                                <select class="textbox" name="event">
                                <option value="">Select</option>
                                <?php
											foreach($events as $ro => $row)
											
											{
												echo "<option value='".$row->slno."'>". $row->eventname."</option>";
											}
									?>
                                
                                    
                                    
                                </select>
                                
                                </td>
                        </tr>
                        <tr>
                            <td>Event Date</td>
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
                            <td>Entertainment</td>
                            <td colspan="4">
                                <select class="textbox" name="skill">
                                    <option value="">Select</option>
                                    <?php
											foreach($skills as $row)
											{
												echo "<option value='".$row->slno."'>".$row->skillname."</option>";
											}
									?>
                                
                                </select></td>
                        </tr>
                        <tr>
                            <td>Event Location</td>
                            <td colspan="4">
                                <select class="textbox" name="location">
                                    <option value="">Select</option>
                                    <?php
											foreach($locations as $row)
											{
												echo "<option value='".$row->loc."'>". $row->loc."</option>";
											}
									?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Max Budget</td>
                            <td colspan="4">
                                <select class="textbox">
                                    <option value="">Up to $100</option>
                                    <option value="">Up to $1000</option>
                                    <option value="">Up to $1200</option>
                                    <option value="">Up to $1500</option>
                                    <option value="">Up to $2000</option>
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
<div id="content2">
    <div id="content2_box">
	<div id="content2_head">
	    <p class="text" style="<? echo base_url();?><? echo base_url();?>images/headimg.png) no-repeat; text-align: center; font-size: 17px; padding-top: 5px; padding-left:15px; width:250px; height:45px; float: left; background-size:100% 100%;">
		What?s Happening Now:</p>
	    <p class="text" style="float: left; margin-left: 30px; margin-top:20px; font-size: 18px; color:rgb(0, 194, 252);">
		Airbrush Artist requested for Wedding Reception in Wayne
	    </p>
	</div>
	<div id="content2_box4">
	    <div class="content2_box3">
		<div class="content2_imgbox" style="<? echo base_url();?>images/img10.jpg) no-repeat;">
		    <div class="rating">
			<img src="<? echo base_url();?>images/star1.png" style="margin-top:170px;">
		    </div>
		</div>
		<h2 class="head3" style="font-weight: bold; margin-bottom: 0px; color: #006796; ">Live Music</h2>
		<ul style=" font-family: Arial, Helvetica sans-serif; font-size: 15px; font-weight: bold; float: left; color:#006796; line-height: 1.6;">
		    <li class="list">Cover Bands</li>
		    <li class="list">Classical Ensembles</li>
		    <li class="list">DJs</li>
		    <li class="list">Guitarists</li>
		    <li class="list">Jazz Bands</li>
		    <li class="list">Pianists</li>
		    <li class="list">Singers</li>
		    <li class="list">Tribute Bands</li>
		    <li class="list">Wedding Bands</li>
		</ul>
		<div class="quick" style="width: 200px; height:30px; margin-left:10px; margin-top: 0px; color: #ffffff; font-size: 20px;">Browse Live Music</div>
		<p class="text" style="margin-left:15px; font-size: 15px; margin-top: 10px; float: left; color: #333333;">Book bands, musicians,singers & ensembles.</p>
	    </div>
	    
	    
	    
	    <div class="content2_box3">
		<div class="content2_imgbox" style="<? echo base_url();?>images/img11.jpg) no-repeat;">
		    <div class="rating">
			<img src="<? echo base_url();?>images/star1.png" style="margin-top:170px;">
		    </div>
		</div>
		<h2 class="head3" style="font-weight: bold; margin-bottom: 0px; color: #006796; ">Live Music</h2>
		<ul style=" font-family: Arial, Helvetica sans-serif; font-size: 15px; font-weight: bold; float: left; color:#006796; line-height: 1.6;">
		    <li class="list">Cover Bands</li>
		    <li class="list">Classical Ensembles</li>
		    <li class="list">DJs</li>
		    <li class="list">Guitarists</li>
		    <li class="list">Jazz Bands</li>
		    <li class="list">Pianists</li>
		    <li class="list">Singers</li>
		    <li class="list">Tribute Bands</li>
		    <li class="list">Wedding Bands</li>
		</ul>
		<div class="quick" style="width: 200px; height:30px; margin-left:10px; margin-top: 0px; color: #ffffff; font-size: 20px;">Browse Live Music</div>
		<p class="text" style="margin-left:15px; font-size: 15px; margin-top: 10px; float: left; color: #333333;">Book bands, musicians,singers & ensembles.</p>
	    </div>
	    
	    <div class="content2_box3">
		<div class="content2_imgbox" style="<? echo base_url();?>images/img12.jpg) no-repeat;">
		    <div class="rating">
			<img src="<? echo base_url();?>images/star1.png" style="margin-top:170px;">
		    </div>
		</div>
		<h2 class="head3" style="font-weight: bold; margin-bottom: 0px; color: #006796; ">Live Music</h2>
		<ul style=" font-family: Arial, Helvetica sans-serif; font-size: 15px; font-weight: bold; float: left; color:#006796; line-height: 1.6;">
		    <li class="list">Cover Bands</li>
		    <li class="list">Classical Ensembles</li>
		    <li class="list">DJs</li>
		    <li class="list">Guitarists</li>
		    <li class="list">Jazz Bands</li>
		    <li class="list">Pianists</li>
		    <li class="list">Singers</li>
		    <li class="list">Tribute Bands</li>
		    <li class="list">Wedding Bands</li>
		</ul>
		<div class="quick" style="width: 200px; height:30px; margin-left:10px; margin-top: 0px; color: #ffffff; font-size: 20px;">Browse Live Music</div>
		<p class="text" style="margin-left:15px; font-size: 15px; margin-top: 10px; float: left; color: #333333;">Book bands, musicians,singers & ensembles.</p>
	    </div>
	    
	    
	    <div class="content2_box3">
		<div class="content2_imgbox" style="<? echo base_url();?>images/img10.jpg) no-repeat;">
		    <div class="rating">
			<img src="<? echo base_url();?>images/star1.png" style="margin-top:170px;">
		    </div>
		</div>
		<h2 class="head3" style="font-weight: bold; margin-bottom: 0px; color: #006796; ">Live Music</h2>
		<ul style=" font-family: Arial, Helvetica sans-serif; font-size: 15px; font-weight: bold; float: left; color:#006796; line-height: 1.6;">
		    <li class="list">Cover Bands</li>
		    <li class="list">Classical Ensembles</li>
		    <li class="list">DJs</li>
		    <li class="list">Guitarists</li>
		    <li class="list">Jazz Bands</li>
		    <li class="list">Pianists</li>
		    <li class="list">Singers</li>
		    <li class="list">Tribute Bands</li>
		    <li class="list">Wedding Bands</li>
		</ul>
		<div class="quick" style="width: 200px; height:30px; margin-left:10px; margin-top: 0px; color: #ffffff; font-size: 20px;">Browse Live Music</div>
		<p class="text" style="margin-left:15px; font-size: 15px; margin-top: 10px; float: left; color: #333333;">Book bands, musicians,singers & ensembles.</p>
	    </div>
	</div>
    </div>
</div>
        <div id="middletext">
            <div id="middletext_box">
                
                            <img src="<? echo base_url();?>images/welcome.png">
                            <h1 class="text2" style="color:#333333;">Your project deserves time,<br />
                            dedication, and love</h1>
                            
                            <p class="text1">Find The Act gives event planners a fast and easy way to browse, contact, and hire entertainers and event vendors that can make any event a success. Whether you're a first-timer or professional event planner, follow these 3 simple steps and you'll be on your way to event planning paradise!
                            <br />
                            <br />
                            Let's team up! Meet with creative strategists who can bring your vision to life. From design and programming to marketing and distribution, our team can carry your project from start to finish and deliver results you will be proud of. Talk to us about your latest idea - whether you're thinking of a website, an online store, or a print project, we?re excited to pair you up with the designers and marketers who can make it happen.
                            </p>
            </div>
  </div>
       
       <section class="main demo-2">
				
				<div id="grid" class="grid clearfix" style="width:1000px;">
				
					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="<? echo base_url();?>images/thumbs/3.jpg" alt="image03" />
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="<? echo base_url();?>images/large/3.jpg" alt="image03-large" />
							<div class="title"><h4>Angry Nerd Blofeld</h4> by Dan Matutina <a href="http://drbl.in/eLEa" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>
					</div><!-- / uc-container -->

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="<? echo base_url();?>images/thumbs/1.jpg" alt="image01" />
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="<? echo base_url();?>images/large/1.jpg" alt="image01-large" width="460" height="360" />
							<div class="title"><h4>The Professor</h4> by Dan Matutina <a href="http://drbl.in/dMLS" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>
					</div><!-- / uc-container -->

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="<? echo base_url();?>images/thumbs/2.jpg" alt="image02" />
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="<? echo base_url();?>images/large/2.jpg" alt="image02-large" />
							<div class="title"><h4>Planet</h4> by Dan Matutina <a href="http://drbl.in/eZoL" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>
					</div><!-- / uc-container -->

					<div class="uc-container">
						<div class="uc-initial-content">
							<img src="<? echo base_url();?>images/thumbs/4.jpg" alt="image04" />
							<span class="icon-eye"></span>
						</div>
						<div class="uc-final-content">
							<img src="<? echo base_url();?>images/large/4.jpg" alt="image04-large" />
							<div class="title"><h4>Ero Senin</h4> by Dan Matutina <a href="http://drbl.in/dJfK" class="icon-link"></a></div>
							<span class="icon-cancel"></span>
						</div>
					</div><!-- / uc-container -->

				</div><!-- / grid -->
				
			</section>
       
       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script type="text/javascript" src="<? echo base_url();?>js/jquery.pfold.js"></script>
		<script type="text/javascript">
			$(function() {

				// say we want to have only one item opened at one moment
				var opened = false;

				$( '#grid > div.uc-container' ).each( function( i ) {

					var $item = $( this ), direction;

					switch( i ) {
						case 0 : direction = ['right','bottom']; break;
						case 1 : direction = ['left','bottom']; break;
						case 2 : direction = ['right','top']; break;
						case 3 : direction = ['left','top']; break;
					}
					
					var pfold = $item.pfold( {
						folddirection : direction,
						speed : 300,
						onEndFolding : function() { opened = false; },
						centered : true
					} );

					$item.find( 'span.icon-eye' ).on( 'click', function() {

						if( !opened ) {
							opened = true;
							pfold.unfold();
						}


					} ).end().find( 'span.icon-cancel' ).on( 'click', function() {

						pfold.fold();

					} );

				} );
				
			});
		</script>
      
       <div id="logosection">
            <div id="logosection_content">
                <img src="<? echo base_url();?>images/logo2.png" style=" float: left;margin-top: 15px; margin-left: 5px;" />
                 <img src="<? echo base_url();?>images/logo3.png" style="float: left;margin-top: 15px;margin-left: 30px;" />
                  <img src="<? echo base_url();?>images/logo4.png" style="float: left;margin-top: 15px;margin-left: 30px;" />
                   <img src="<? echo base_url();?>images/logo5.png" style="float: left; margin-top: 15px;margin-left: 30px;" />
                    <img src="<? echo base_url();?>images/logo3.png" style="float: left;margin-top: 15px;margin-left: 30px;" />
                  <img src="<? echo base_url();?>images/logo2.png" style="float: left;margin-top: 15px;margin-left: 30px;" />
                  
                 
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
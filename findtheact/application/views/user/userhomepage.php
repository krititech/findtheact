<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"

    "http://www.w3.org/TR/html4/strict.dtd"

    >

<html lang="en">

<head>

    <title>Find The Act</title>

        <link rel="stylesheet" href="<?php echo base_url()?>css/style.css" type="text/css" media="screen" />

    <style>

       

       

        tr{

          height: 48px;

          font-size: 13px;

          font-family: arial;

          color: #404040;

        }

        

    </style>

<script src="<?php echo base_url()?>js/jquery-1.9.1.min.js">

 

 </script>



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

			    <img src="<?php echo base_url()?>images/search.png" style="margin-left: 3px; margin-top: 3px;">

			</div>

		    </div>

                  </div>

                </div>

            </div>

        </div>

        

        

        <div id="menubar">

            <div id="menubar_content">

                <div id="logo">

                    <img src="<?php echo base_url()?>images/logo.png" style="margin-top: -30px;"/>

                </div>

                <div id="menubar1">

                     <img src="<?php echo base_url()?>images/planning_label.gif" style="margin-top:10px; margin-left: 5px; float: left;">

			<p class="text" style="color:rgb(119, 119, 119); margin-left:60px; float: left;">Save any vendor, and <br />

			they'll appear right here!</p>

			

			<p class="text" style="color:rgb(119, 119, 119); margin-left: 50px; float: left; margin-bottom: 0px;">Or, request a

			</p>

			<div class="quick">Quick Quote</div>

                </div>

            </div>

        </div>

        

   <div id="loginheader" >

        <div id="loginheader_content" >

            <h5>Sign in & sign up <span style="font-size: 18px; color: #bfbfbf;">log into or create an account</span></h5>

        </div>

   </div>

 <?php echo form_open('userlogin/userlog')?>
   <div id="logincontainer" style="height:700px;">

        <div id="logincontainer_content" style="height:700px;">

            <div class="signin">

                 <div class="title">Already a member? Sign in:</div>

                 <table style="width:400px; padding: 20px; padding-left:60px;height: auto; float: left;">



                <tr>

                    <td>

                        Username:

                    </td>

                    <td>

                        <input type="text" class="logintext" name="username"/>

			

                    </td>

                </tr>

                <tr>

                    <td>

                        Password:

                    </td>

                    <td>

                        <input type="password" class="logintext" name="password"/>

                    </td>

                </tr>

           </table>

                 <div class="action">

                    <div id="button">

                        <input type="submit" class="button" value="Sign into your account"></br>

                        <p style="font-size: 13px;font-family: arial;color: #404040;">Recover your <span style="color: #0069d6;">username or password</span></p>

                    </div>

                 </div>

            </div>

</form>

           
            <?php echo form_open('userlogin/save')?>
           

           <div class="signin" style="width:460px; margin-left: 30px;">

                 <div class="title">Create an account. It's free!</div>



                 <table style="width:410px; height: auto; padding: 25px; color:#444; font-weight: bold;">

                        <tr>

                            <td>

                                Username:</br></br>

                                <input type="text" class="logintext" name="username" id="uname" /></br>

                                <span style="font-size: 13px; color: #bfbfbf;font-weight: normal;">May contain letters, digits, dashes and underscores, and should be between 2 and 20 characters long.</span>

                            </td>

                        </tr>

<tbody id="details">

</tbody>

                        <tr>

                            <td>

                                Email address:</br></br>

                                 <input type="text" class="logintext" name="email" /></br>

                                  <span style="font-size: 13px; color: #bfbfbf; font-weight: bold;">Type carefully. <span style="font-weight: normal;">You will be sent a confirmation email.</span></span>

                            </td>

                        </tr>

                        <tr>

                            <td>

                                Password:</br></br>

                                <input type="password" class="logintext" name="password"/></br>

                                <span style="font-size: 13px; color: #bfbfbf;font-weight: normal;">The longer the better. Include numbers for protein.</span>

                            </td>

                        </tr>

                 <tr>

<td width="80" style="line-height:6px;">

Select type:</br></br></td></tr>

<tr><td><input type="checkbox" name="type" value="1"  />Event Manager

<input type="checkbox"  name="type" value="2" style="margin-left:10px;"/>Act Manager</td></tr>



                        <tr>

                            <td>

                                <div style="padding: 10px;border: 1px dashed #ccc; line-height: 1.2; font-size: 13px; color: #444; font-weight: normal;">

                                    By clicking on the "Create your account" button below, you certify that you have read and agree to our terms of use and privacy policy.

                                </div>

                                

                            </td>

                        </tr>

                        <tr>

                            <td>

                                <input type="checkbox" name="box" value="1">

                                   <span style="font-size: 13px;color: #444;font-weight: normal;"> Sign me up for the newsletter (provided by MailChimp)</span>

                            </td>

                        </tr>

                </table>



                 <div class="action" style="width:440px; height: 60px; padding-left: 20px; padding-top: 10px;">

                     <input type="submit" name="submit" class="button" value="Create your account"></br>

                 </div>

            </div>

   

  

        </div>

   </div>

 <?php	echo form_close();
 	?>

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

                <img src="<?php echo base_url()?>images/event12.png" />

            </div>

            </div>

           

       </div>

    </body>

</html>
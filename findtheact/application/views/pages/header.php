<html>
    <head>
        <title>Find The Act</title>
        <link rel="stylesheet" href="<?php echo base_url()?>css/style.css" type="text/css" media="screen" />
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
			<a href="<? echo site_url();?>/pages/index" style="text-decoration:none;">
                <div id="logo">
                    <img src="<?php echo base_url()?>images/logo.png" style="margin-top: -30px;"/>
                </div>
			</a>
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
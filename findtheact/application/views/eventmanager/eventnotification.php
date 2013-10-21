<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
function changerequest(actid,agencyid,applyto)
{
//alert(val);
    $.post('<?php echo base_url()?>index.php/approvechangeagency/approvechange',
	{ 'actid':actid,'agncid':agencyid,'applied':applyto},
	function(result) {
	//alert(result);

alert("Agency Change notification approved");

	$('#aa').html("Approve Successfully");
	//alert(4);
	}
	);
}
</script>
<style type="text/css">
table th{
text-align:left;

}
.container {width: 800px; margin: 10px auto;}
ul.tabs {
	margin: 0;
	padding: 0;
	float: left;
	list-style: none;
	height: 32px;
	border-bottom: 1px solid #999;
	border-left: 1px solid #999;
	width: 100%;
}
ul.tabs li {
	float: left;
	margin: 0;
	padding: 0;
	height: 31px;
	line-height: 31px;
	border: 1px solid #999;
	border-left: none;
	margin-bottom: -1px;
	background: #e0e0e0;
	overflow: hidden;
	position: relative;
}
ul.tabs li a {
	text-decoration: none;
	color: #000;
	display: block;
	font-size: 1.2em;
	padding: 0 20px;
	border: 1px solid #fff;
	outline: none;
}
ul.tabs li a:hover {
	background: #ccc;
}	
html ul.tabs li.active, html ul.tabs li.active a:hover  {
	background: #fff;
	border-bottom: 1px solid #fff;
}
.tab_container {
	border: 1px solid #999;
	border-top: none;
	clear: both;
	float: left; 
	width: 100%;
	background: #fff;
	-moz-border-radius-bottomright: 5px;
	-khtml-border-radius-bottomright: 5px;
	-webkit-border-bottom-right-radius: 5px;
	-moz-border-radius-bottomleft: 5px;
	-khtml-border-radius-bottomleft: 5px;
	-webkit-border-bottom-left-radius: 5px;
}
.tab_content {
	padding: 20px;
	font-size: 1.2em;
}
.tab_content h2 {
	font-weight: normal;
	padding-bottom: 10px;
	border-bottom: 1px dashed #ddd;
	font-size: 1.8em;
}
.tab_content h3 a{
	color: #254588;
}
.tab_content img {
	float: left;
	margin: 0 20px 20px 0;
	border: 1px solid #ddd;
	padding: 5px;
}
</style>

<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function() {

	//Default Action
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});

});
</script>
  <link rel="stylesheet" href="<?php echo base_url()?>css/reveal.css">	
	  	
   
    <script type="text/javascript" src="<?php echo base_url()?>js/jquery.reveal.js"></script>

<div style="width:100%;height:auto;float:left; background: #ffffff;">

<div class="container">

	<h1>Notification</h1>
    <ul class="tabs">
        <li><a href="#tab1">New Quotes</a></li>
        <li><a href="#tab2">New Act Applicants</a></li>
      

    </ul>
    <div class="tab_container">
        <div id="tab1" class="tab_content">
          <table width="100%">
         
		  		
				
				<tbody>
				
		 <?php
		$i=1;
		 
		 $getq=mysql_query("select p.*,s.`skillname` from `profile` p,`skill` s where p.`added_by`='$emailvalue' and p.`category`=s.`slno` order by p.`category`");
		
		 while($resq=mysql_fetch_array($getq))
		 {
		if($i%2==0)
		{
		 ?>
		 <table style="background:#cccccc; width:100%;">
		 <?php
		 }
		 else
		 {
		 ?>
		 
		 <table>
		 <?php
		 }
		 ?>
		 <tr><th colspan="4"><?php echo $resq['skillname']?></th></tr>
		 <tr><th>Contact Person</th>
					<th>Contact Number</th>
					<th>EmailId</th>
					<th>Act person</th>
					<th>Reply</th>
					
				</tr>
		 <?php
		
		 $nextq=mysql_query("select * from `contact_details` where `userid`='$resq[id]'");
		
		 while($resnext=mysql_fetch_array($nextq))
		 {
		 
		 ?>
		 <tr><td><?php echo $resnext['full_name']?></td>
		 <td><?php echo $resnext['contact_no']?></td>
		 <td><?php echo $resnext['email']?></td>
		 <td><?php echo $resq['fname'] ." ".$resq['lname']?></td>
		 <td><a href="<?php echo base_url()?>index.php/replyquoat/index/<?php echo $resnext['slno']?>" ><input type="button" name="button" value="Reply" /></a></td>
		 </tr>
		 
		 
		 <?php
		 }
		 $i++;
		
		 }
		 ?>
		 </table>
		 
		  </tbody>
		 
		  
		  
		  </table> 
        </div>
		
		
        <div id="tab2" class="tab_content">
             <table width="100%">
		  		<tr><th>Applied Act</th>
					<th>Action</th>
					
				</tr>
			<?php
			$getreq=mysql_query("select * from `agency_change` where `applied_to`='$emailvalue' and `status`='0'");
		 while($resreq=mysql_fetch_array($getreq))
		 {
			?>
			<tr id="aa"><td><?php echo $resreq['act_id']?></td>
			<td id="aa"><input type="button" name="app" id="app" value="Approve" onclick="changerequest('<?php echo $resreq['act_id']?>','<?php echo $emailvalue?>','<?php echo $resreq['applied_to']?>');"/></td>
			
			</tr>
			<?php
			}
			?>
			</table>
			
        </div>
        
        
    </div>
	

</div>
</div>


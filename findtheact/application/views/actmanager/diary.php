<?php
date_default_timezone_set('Europe/Oslo') ;
?>
		<link rel="stylesheet" href="<?php echo base_url();?>css/master.css" type="text/css" media="screen" charset="utf-8" />
		<script src="<?php echo base_url();?>js/jquery-1.3.2.min.js" type="text/javascript"> </script>
		<script src="<?php echo base_url();?>js/coda.js" type="text/javascript"> </script>
		<script type="text/javascript">
		$(function(){
		$('.test').click(function(){
		$('#disp').show();
		var d = new Date();
		
		var mnth = d.getMonth() + 1;
		if (mnth < 10) { mnth = '0' + mnth; }
		var year = d.getFullYear()
		var day=$(this).html();
		var cdate=year+'-'+mnth+'-'+day;
		$('#currentdateval').val(cdate);
		
		});
		});
		</script>
		
	
		
			<?php
$monthNames = Array("January", "February", "March", "April", "May", "June", "July", 
"August", "September", "October", "November", "December");
if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");
$cMonth = $_REQUEST["month"];
$cYear = $_REQUEST["year"];
 
$prev_year = $cYear;
$next_year = $cYear;
$prev_month = $cMonth-1;
$next_month = $cMonth+1;
 
if ($prev_month == 0 ) {
    $prev_month = 12;
    $prev_year = $cYear - 1;
}
if ($next_month == 13 ) {
    $next_month = 1;
    $next_year = $cYear + 1;
}

?>
<div style="width:400px; float:left; ">
		<table cellspacing="0"  width="400px">
			<thead>
				<tr><th>Sun</th>
					<th>Mon</th>
					<th>Tue</th>
					<th>Wed</th>
					<th>Thu</th>
					<th>Fri</th>
					<th>Sat</th>
					
				</tr>
			</thead>
			<tbody>
			
			<?php
			$monthval=date('m');
			$year=date('Y');
				$timestamp = mktime(0,0,0,$cMonth,1,$cYear);
$maxday = date("t",$timestamp);

$thismonth = getdate ($timestamp);

$startday = $thismonth['wday'];
$todate=date('d');

for ($i=0; $i<($maxday+$startday); $i++) {
    if(($i % 7) == 0 ) echo "<tr>";
    if($i < $startday) echo "<td></td>";
    else
	{
	$dateval=$i - $startday + 1;
	$datefinal=$year.'-'.$monthval.'-'.$dateval;
	
	$query =$this->db->get_where('diary', array('user_id' => $emailvalue,'ondate'=>$datefinal));
	$rowcount = $query->num_rows();
	if($rowcount==0)
	{
	if(($i - $startday + 1)==$todate)
	{
	 echo "<td align='center' valign='middle' height='20px' class='today test'>". ($i - $startday + 1) . "</td>";
	}
	else
	{
	
	 echo "<td align='center' valign='middle' height='20px' class='test'>". ($i - $startday + 1) . "</td>";
	
	}
	}
	else
	{
	if(($i - $startday + 1)==$todate)
	{
	 echo "<td align='center' valign='middle' height='20px' class='today date_has_event'><span class='test'>". ($i - $startday + 1)."</span>";
	 ?>
	 <div class="events">
							<ul>
							<?php
							foreach ($query->result() as $row)
								{
    
							
							?>
							
								<li>
									<span class="title"><?php echo $row->subject ?></span>
									<span class="desc"><?php echo $row->description ?></span>
								</li>
								<?php
								}
								?>
							</ul>
						</div>
						
						<?php
	 
	 
	 
	  echo "</td>";
	}
	else
	{
	
	 echo "<td align='center' valign='middle' height='20px' class='date_has_event'><span class='test'>". ($i - $startday + 1)."</span>";
	 ?>
	  <div class="events">
							<ul>
								<?php
							foreach ($query->result() as $row)
								{
    
							
							?>
							
								<li>
									<span class="title"><?php echo $row->subject ?></span>
									<span class="desc"><?php echo $row->description ?></span>
								</li>
								<?php
								}
								?>
							</ul>
						</div>
	 <?php
	 echo "</td>";
	
	}
	
	
	
	}
	}
	
    if(($i % 7) == 6 ) echo "</tr>";
}

				?>
			
			</tbody>
			
			<tfoot>
				<th>Sun</th>
				<th>Mon</th>
				<th>Tue</th>
				<th>Wed</th>
				<th>Thu</th>
				<th>Fri</th>
				<th>Sat</th>
				
			</tfoot>
		</table>
		
	</div>	
	<div style="width:300px; height:auto; float:left; margin-left:20px; margin-top:10px; display:none;" id="disp">
	<?php echo form_open('addeventondt/save');?>
	<table id="tab">
	 <tr ><th colspan="2">Add Events</th></tr>
	 <tr ><td>Date:</td>
	 <td><input type="text" name="dateval" class="box" id="currentdateval" readonly="" /></td></tr>
	 
	 <tr><td>Subject:</td>
	 <td><input type="text" name="subject"  class="box"/></td></tr>
	 
	 <tr><td>Event Description:</td>
	 <td><input type="text" name="descr"  class="box"/></td></tr>
	 
	<tr><td colspan="2"><input type="submit" name="submit" value="Add" style="width:70px; height:20px;background:#00B6E8; border-radius:4px;" /></td></tr>
	
	</table>
	</form>
	
	</div>
		
	

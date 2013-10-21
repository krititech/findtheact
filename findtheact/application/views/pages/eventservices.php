	<?php
	$id=3;
		$query =  $this->db->get_where('skill', array('typevalue' => $id));
		
		 foreach($query->result() as $main)
			{
			    ?>
		    <h3 style="color: #00c2fc;  float: left; margin-top: 20px; margin-bottom: 0px; font-size: 28px; margin-left: 15px;"><?php echo $main->skillname; ?></h3>
		    <div class="categorybox" style="width:925px; margin-left: 15px;">
		    <p class="text" style="color: rgb(144, 138, 129); line-height: 1.6;"><img src="<?php echo base_url()?>uploads/<?php echo $main->image;?>" style="float: left; margin-right: 10px; width:50px; height: auto;">
		   <?php echo $main->descp;?></p>
		   <div class="ul1">
			    <ul style="float: left;">
		   
		   <?php
		   $i = 1;
		   //foreach($subskills as $subskl)
		   $skillid=$main->slno;
		   $q=mysql_query("select * from `subskill` where  `category_id`='$skillid'");
		   while($r=mysql_fetch_array($q))
		   {
		   
		   if (($i % 5) == 0)
 
		  {
		   echo '</div></ul><div class="ul1"><ul style="float: left;">'; }
		   ?>
			
			
				<li class="list"><?php echo $r['sub_category_name'];?></li>
				<?php
				$i++;
	}
	?>
				
			    </ul>
			</div>
		
	
		    </div>
		   
		     <?php
		    
		    }
		    ?>
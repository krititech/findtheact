<style>

	    .tr{

			border-bottom: 1px solid #cccccc;

			border-collapse: collapse;

			height: 35px;

	    }

	    

	    .tr:hover{

			background: #f5f5f5;

	    }

	    

	    .border{

			border: 1px solid #00b6e8;

			border-collapse: collapse;

	    }

	    

	    .tr_head{

			background:#00b6e8;

			color: #ffffff;

			height: 40px;

	    }


		table th{
		
		text-align:left;
		}
 </style>
 <script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.3.2.min.js"></script>


<div style="width:100%;height:auto;float:left; background: #ffffff;">
		<div style=" width: 100%; height:auto; margin: auto; ">
			<div class="addform">
						<h3>Existing Subcategory</h3>
						 <?php echo form_open('indexsubcategory/save')?>
							<table width="700" height="80" border="0" class="table">
							<tr>
								<th>&nbsp;</th>
								<th>Subcategory name</th>
								<th>Category Name</th>
								<th>Type</th>
							
							
							</tr>
							<?php
							foreach($subskills as $row)
							{
							$id=$row->category_id;
							
							$q=mysql_query("select * from `skill` where `slno`='$id'");
							$r=mysql_fetch_array($q);
							
							$q1=mysql_query("select `name` from `type` where `slno`='$r[typevalue]'");
							$r1=mysql_fetch_array($q1);
							
							?>
							<tr>
						         <td><input type="checkbox" name="subcatid[]" value="<?php echo $row->id?>" <?php if($row->indexstatus==1){?> checked="checked"<?php }?> /></td>
							<td><?php echo $row->sub_category_name?>
							</td>
							<td><?php echo $r['skillname']?></td>
							<td><?php echo $r1['name'];?></td>
							</tr>
							<?php
							}
							?>
                           
                            
                            <tr>
				    <td>&nbsp;</td>
							<td colspan="3"><input type="submit" name="submit" class="submit" value="Submit"/>
                            <input type="reset" name="reset"  value="Cancel"  class="submit"/></td></tr>
						</table>
						
						<?php
						echo form_close();
						?>
						

			</div>
		</div>
	</div>
	

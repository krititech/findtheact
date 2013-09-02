<?php
/*
 * Created on Sep 2, 2013
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
?>
<html>
  <head>
    <title>Searchresult</title>
  <link rel="stylesheet" href="<? echo base_url();?>css/styles.css" type="text/css"  />
   
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
			height: 30px;
	    }
 </style>
   
</head>
 <body> 
  
  <div id="topbar">
            <div id="topbar_content">
                <div id="logo">
                    <img src="<? echo base_url();?>img/logo.png" style="height: 30px; width:auto;"/>
                </div>
            </div>
        </div>
        
        <div id="container">
            <div id="container_content">
                
                <div id="right_container" style="width: 960px;">
                   
                    <div id="rightcontent" style="width: 960px;">
		      <h3>Searchresult</h3>
			    <table width="960" height="auto" class="table border">
				    <tr class=" tr_head" style="text-align: center;">
				      <td>Event Name</td>
				      <td>Name</td>
				      <td>Location</td>
				      <td>Price</td>
				      <td>Action</td>
				      </tr>
				   
				  </table>
		    </div>

                    </div> 
                </div>
            </div>
        </div>


<div id="footer">
  
</div> 
  

</body>
</html>
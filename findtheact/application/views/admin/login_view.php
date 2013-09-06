<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Act</title>
<link rel="shortcut icon" href="../favicon.ico">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/adminstyle.css" />
     <!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
</head>

<body>
 <section class="main" style="margin-top: 200px;">
  <form action='<?php echo base_url();?>index.php/login/process' method='post' name='process' class="form-1" >
           
                <p class="field">
             <input type="text" name="username" id="username" class="textbox" placeholder="Username or email" />
              <i class="icon-user icon-large"></i>
                </p>
                <p class="field">
              <input type="password" name="password" id="password" class="textbox" placeholder="Password" />
               <i class="icon-lock icon-large"></i>
                </p>
          <p class="submit">
               <button type="submit" name="submit" value="LOGIN"  /><i class="icon-arrow-right icon-large"></i></button>
          </p>
          </form>
   </section>
 
</body>
</html>

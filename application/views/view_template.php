
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
    	 <meta charset="utf-8" />
        <title><?php echo $tittle; ?></title>
        <!-- js files -->
        <!--extra framework labiries --> 
        <script type="text/javascript" src="<?php echo base_url();?>javascript/underscore.js"></script>
<!--         <script type="text/javascript" src="<?php //echo base_url();?>javascript/jquery.min.js"></script> -->
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/jquery-ui-1.9.2.custom/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>javascript/NiceMessages/jquery.colorbox.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/jquery.noty.js"></script>
         <!-- Noty layouts -->
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/layouts/bottom.js"></script>
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/layouts/bottomCenter.js"></script>
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/layouts/bottomLeft.js"></script>
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/layouts/bottomRight.js"></script>
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/layouts/center.js"></script>
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/layouts/centerLeft.js"></script>
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/layouts/centerRight.js"></script>
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/layouts/inline.js"></script>
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/layouts/top.js"></script>
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/layouts/topCenter.js"></script>
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/layouts/topLeft.js"></script>
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/layouts/topRight.js"></script>
		
		  <!--Noty Themes -->
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/noty/themes/default.js"></script>
		  <!-- Noty with options -->
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/notyfi.js"></script>
		  
		  <script type="text/javascript" src="<?php echo base_url();?>javascript/image_load.js"></script>
		  
        <script type='text/javascript'>window.base_url = "<?php echo base_url();?>"</script>
        <!--my js files-->
        <?php foreach ($extra_js_file as $value):?>
        		<script type="text/javascript" src="<?php echo base_url()."javascript/$value.js";?>"></script>
        <?php endforeach?>
         
        <!-- css files -->
        <link href="<?php echo base_url();?>css/home.css" rel="Stylesheet" />
        
        <?php if(!empty($extra_css_file))
		  	{
		  		foreach ($extra_css_file as $value) {
					  echo "<link href='".base_url()."css/$value.css' rel='Stylesheet' />";
				  }
		  	} 
        ?>
    </head>
</html>
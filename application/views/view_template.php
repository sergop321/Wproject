
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="he" dir="ltr" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="he" dir="ltr"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
  <meta name="language" content="he">
  <title><?php echo $tittle; ?></title>
        
        <!-- js files -->
        <!--extra framework labiries --> 
        <script type="text/javascript" src="<?php echo base_url(); ?>javascript/underscore.js"></script>
<!--         <script type="text/javascript" src="<?php //echo base_url();?>javascript/jquery.min.js"></script> -->
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/jquery.noty.js"></script>
         <!-- Noty layouts -->
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/layouts/bottom.js"></script>
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/layouts/bottomCenter.js"></script>
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/layouts/bottomLeft.js"></script>
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/layouts/bottomRight.js"></script>
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/layouts/center.js"></script>
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/layouts/centerLeft.js"></script>
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/layouts/centerRight.js"></script>
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/layouts/inline.js"></script>
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/layouts/top.js"></script>
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/layouts/topCenter.js"></script>
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/layouts/topLeft.js"></script>
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/layouts/topRight.js"></script>
		
		  <!--Noty Themes -->
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/noty/themes/default.js"></script>
		  <!-- Noty with options -->
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/notyfi.js"></script>
		  
		  <script type="text/javascript" src="<?php echo base_url(); ?>javascript/image_load.js"></script>
		  
        <script type='text/javascript'>window.base_url = "<?php echo base_url(); ?>"</script>
        <!--my js files-->
        <?php if(!empty($extra_js_file)) : ?>
       	   <?php foreach ($extra_js_file as $value):?>
        			<script type="text/javascript" src="<?php echo base_url() . "javascript/$value.js"; ?>"></script>
        		<?php endforeach ?>
        	<?php endif ?>
        
        <!--sergey shit -->
        <script type="text/javascript" src="<?php echo base_url(); ?>javascript/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  		  <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
  
         
        <!-- css files -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="Stylesheet" />
        <link href="<?php echo base_url(); ?>css/bootstrap-responsive.min.css" rel="Stylesheet" />
        <link href="<?php echo base_url(); ?>css/weShare.css" rel="Stylesheet" />
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
        
        <?php
			if (!empty($extra_css_file))
			{
				foreach ($extra_css_file as $value)
				{
					echo "<link href='" . base_url() . "css/$value.css' rel='Stylesheet' />";
				}
			}
        ?>
        
         <!--[if lt IE 9]>
		  <script>
		  document.createElement('header');
		  document.createElement('nav');
		  document.createElement('section');
		  document.createElement('article');
		  document.createElement('aside');
		  document.createElement('footer');
		  document.createElement('hgroup');
		  </script>
		  <![endif]-->
</head>
		
<body>
  <header>
    <div class='header_container'>
      <div class='container'>
        <div class='logo'>
          <h2><a href="/">We Share</a></h2>
          <div class="seperator"></div>
        </div>
        <div class='main_nav'>
          <div class='menu'>
            <a class='nav_link' href="/signup">הרשם</a><div class="seperator right_sep"></div>
          </div>
          <div class='menu'>
            <a class='nav_link' href="/login">כניסה</a><div class="seperator right_sep"></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class='clear'></div>
    <?php if(isset($body))
      echo $body;
    ?>
    
  <footer>
    <div class='container'>
      <div class='footer_nav'><h3>שאלות נפוצות</h3>
        <ul>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
        </ul>
      </div>
      <div class='footer_nav'><h3>לינקים שימושיים</h3>
        <ul>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
        </ul>
      </div>
      <div class='footer_nav'><h3>צור קשר</h3>
        <ul>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
          <li><a href='takanon'>תקנון</a></li>
        </ul>
      </div>
    </div>
  </footer>
  <div class='clear'></div>
</body>
</html>
<!doctype html>  

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
	<head>
		<?php $theme = get_template_directory_uri(); ?>
		<?php $child = get_stylesheet_directory_uri(); ?>
		<meta charset="utf-8">
		
		<title><?php wp_title(''); ?></title>
		
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo $theme; ?>/favicon.ico">
				
  		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<script type="text/javascript">
			//uncomment and change this to false if you're having trouble with WOFFs
			//var woffEnabled = true;
			//to place your webfonts in a custom directory 
			//uncomment this and set it to where your webfonts are.
			//var customPath = "/themes/fonts";
		</script>
		<script type="text/javascript" src="<?php echo $theme ?>/library/fonts/myfonts/MyFontsWebfontsKit.js"></script>
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
			
		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<header class="header" role="banner">
				<div class="wrap white clearfix">
					
					<div class="taupe swoop">
						<span class="curvy"></span>
						<?php if ( has_nav_menu ('social-nav') ) { ?> 
							<?php bones_social_nav(); ?>
						<?php } ?>
						<form role="search" class="clearfix" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
						    	<label class="screen-reader-text" for="s">Search for:</label>
						        <input type="text" value="" placeholder="Search this site" name="s" id="s" />
						        <button type="submit" id="searchsubmit" class="button" value="Search" /><i class="icon-search icon-large"></i></button>
						</form>
					</div>

					<a id="logo" href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo $child; ?>/library/images/logo-casa.png" alt="Texas CASA" /></a>

					<h2 class="<?php if ( has_nav_menu( 'ancillary-nav' ) )  { echo 'has-ancillary '; } ?>sitetitle"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></h2>

					<?php if ( has_nav_menu ('main-nav') ) { ?> 
					<div class="blue swoop bottom">
						<span class="rounddown"></span>
						<nav role="navigation">
							<?php bones_main_nav(); ?>
						</nav>
					</div>
					<?php } ?>

					<?php if ( has_nav_menu( 'ancillary-nav' ) )  { ?>
						<div class="light-blue swoop child-ancillary">
							<span class="curvy"></span>
							<?php bones_ancillary_nav(); ?>
						</div>
					<?php } ?>

				</div>


				<div class="stretch blue">

				</div>
			
			</header> <!-- end header -->

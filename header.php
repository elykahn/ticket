<?php // Header include ?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php
				// Perfect title format, 'Article Title - Site Name' or 'Page Title - Site Name'
				if(is_article()): echo article_title(); else: echo page_title("Page can't be found"); endif; echo " - " . site_name();
			?>
		</title>
		<link href="<?php echo theme_url('assets/style.css'); ?>" media="screen" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="<?php echo theme_url('assets/favicon.ico'); ?>" type="image/x-icon">

		<!--Damn IE 8 & 7 -->
		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<!-- General meta -->
		<meta name="description" content="<?php echo site_description(); ?>">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="generator" content="Anchor CMS">

		<?php if(customised()): // If the author added any code to the CSS or JS fields ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!-- Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
	<body>
		<div class="logo"><a href="<?php echo base_url(); // Root url of the install, aka homepage ?>"><?php echo site_name(); ?></a></div>
		<section>
			<?php if(has_menu_items()) : // Acts like article loop ?>
			<nav role="main">
				<?php while(menu_items()): ?>
					<a <?php echo (menu_active() ? 'class="active"' : ''); // Adds an 'active' class to allow styling ?> id="menu-item-<?php echo menu_id(); ?>" href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); // Title of the page ?>"><?php echo menu_name(); // Name of the page ?></a>
				<?php endwhile; ?>
			</nav>
			<?php endif; ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
    "http://www.w3.org/TR/html4/strict.dtd">

<?php /*<!DOCTYPE html> */ ?>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php wp_head(); ?>

<!--[if lte IE 10]>
<style type='text/css'>

#wrapper {
	min-width: 1140px;
}

</style>
<![endif]-->
<!--[if IE 8]>
<style type='text/css'>

.widget-title {
    font-size: 15px;
}
	

</style>
<![endif]-->
<!--[if lte IE 7]>
<style type='text/css'>

.widget-title {
    font-size: 15px;
}

#header #access .menu-item-type-custom {
	background-color: #174887;
}

#header #access .menu-item-type-custom > a {
	height: 40px;
	background-color: #174887;
}

.sub-menu {
	position: relative;
	top: 55px;
	right: 10px;
}
.sub-menu {
	position: relative;
	top: 55px;
	left: 100px;
}

#slider {
	position:relative; z-index:1;
}

#access {
	position:relative; z-index:1000;
}


#wrapper {
	min-width: 1000px;
}

</style>
<![endif]-->
<!--[if lte IE 6]>
<style type='text/css'>



#slider {
	display: none;
}


#wrapper {
	min-width: 1000px;
}

</style>
<![endif]-->

</head>

<body <?php body_class() ?>>
	<div id="wrapper">
		<header id="header">
			<<?php pinboard_title_tag( 'site' ); ?> id="site-title">
				<?php if ( ( '' != get_header_image() ) &&  ( false != get_header_image() ) ) : ?>
					<a href="<?php echo home_url( '/' ); ?>" rel="home">
						<img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>" style="height: 96px;" />
						<?php /* width="<?php echo ( pinboard_get_option( 'retina_header' ) ? absint( get_custom_header()->width / 2 ) : get_custom_header()->width ); ?>" height="<?php echo ( pinboard_get_option( 'retina_header' ) ? absint( get_custom_header()->height / 2 ) : get_custom_header()->height ); ?>" /> */ ?>
					</a>
				<?php endif; ?>
				<a class="home" href="<?php echo home_url( '/' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				<h2><?php bloginfo( 'description' ); ?></h2>
			</<?php pinboard_title_tag( 'site' ); ?>>
			<?php if( ! is_active_sidebar( 1 ) ) : ?>
				<<?php pinboard_title_tag( 'desc' ); ?> id="site-description"><?php bloginfo( 'description' ); ?></<?php pinboard_title_tag( 'desc' ); ?>>
			<?php endif; ?>
			<?php get_sidebar( 'header' ); ?>
			<div class="clear"></div>
			<nav id="access">
				<a class="nav-show" href="#access">Show Navigation</a>
				<a class="nav-hide" href="#nogo">Hide Navigation</a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary_nav' ) ); ?>
				<div class="clear"></div>
			</nav><!-- #access -->
			<!-- Nivo -->
			<div class="clear"></div>
			<?php if (function_exists('nivoslider4wp_show')) { nivoslider4wp_show(); } ?>
		</header><!-- #header -->
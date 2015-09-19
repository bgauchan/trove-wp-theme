<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sourgems
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script type="text/javascript">
	var themeUrl = '<?= get_bloginfo("template_url"); ?>';
</script>

<?php wp_head(); ?>
</head>

<body>
<main id="main" class="site-main" role="main">

	<nav id="main-nav">
	</nav>

	<div id="sidebar" class="sidebar">
	</div><!-- #sidebar -->

	<div id="primary" class="content-area">
	</div><!-- #primary -->

</main><!-- #main -->

</body>
<?php wp_footer(); ?>

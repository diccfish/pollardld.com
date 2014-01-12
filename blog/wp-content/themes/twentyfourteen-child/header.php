<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="shortcut icon" href="img/favicon.ico"/>
	<link rel="author" href="https://plus.google.com/110509288613946706724?rel=author">
    <link href='http://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>
    <link href='http://pollardld.com/css/style.css' rel="stylesheet" type="text/css">
    <link href='//api.tiles.mapbox.com/mapbox.js/v1.5.2/mapbox.css' rel='stylesheet' />
	
    <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

	<!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. May we suggest <a href="http://browsehappy.com/">Google Chrome or Mozilla Firefox</a></p>
    <![endif]-->

    <input type="checkbox" name="nav" class="nav-check">
    <label for="nav" class="navicon">|||</label>

	 <nav>
        <a href="/blog/">Blog Home</a>
        <a href="categories/">All Categories</a>
        <a href="/">Back to pollardld.com</a>
    </nav>

    <?php get_search_form(); ?>

    <header>

    	<h1 id="intro">Thesaurus</h1>
		<h2>A Web Design &amp; Development Blog</h2>

    </header>

    <main>
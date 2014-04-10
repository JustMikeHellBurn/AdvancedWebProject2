<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
		<meta name="keywords" content="<?php echo $keywords; ?>">
		<meta name="author" content="<?php echo $author; ?>">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
		
		<!-- GOOGLE FONT API -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin Slab">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abril Fatface">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT Sans + PT Serif">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Old Standard TT">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid Sans">
        
        <!-- General Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
		<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	
<?php if (isset($custom_css)) { ?>
		<!-- Custom Stylesheets -->
		<link rel="stylesheet" type="text/css" href="css/<?php echo $custom_css; ?>">
<?php } ?>

<body>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo types_render_field('page-title',array()); ?></title>
<?php //echo ucfirst(str_replace(".php", "", basename($_SERVER["SCRIPT_NAME"]))); ?>
<!-- Bootstrap -->
<link href="<?php echo get_bloginfo('template_directory');?>/css/bootstrap.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--ROBOTO FONT-->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900,500' rel='stylesheet' type='text/css'>

<!--wow animation CSS-->
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/animate.min.css">

<!--CSS Reset-->
<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/parallax-bg.css">

<!--feather Lightbox-->
<!--<link type="text/css" rel="stylesheet" href="css/featherlight.css" title="Featherlight Styles" />-->

<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory');?>/css/superslides.css">

<!--custom CSS-->
<link href="<?php echo get_bloginfo('template_directory');?>/css/custom.css" rel="stylesheet">
</head>
<body id="home">
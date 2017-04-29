<!doctype html>
<html>
<head>
    <?php wp_head();?>
    <meta charset="utf-8">
    <title>Blog do Matheus Castiglioni</title>
    <link href="<?=get_template_directory_uri();?>/assets/img/favicon.ico" rel="icon">
    <link href="<?=get_template_directory_uri();?>/assets/css/stilize/stilize.min.css" rel="stylesheet" type="text/css">
    <link href="<?=get_template_directory_uri();?>/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="<?=get_template_directory_uri();?>/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <main class="l-background--blog" class="u-wrap" role="main">
		<header role="banner">
            <?php include("nav.php");?>
        </header>
        <section class="u-content">

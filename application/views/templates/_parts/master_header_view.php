<!doctype html>
<html class="no-js" lang="<?=$current_lang['slug']?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$page_title?></title>
    <meta name="description" content="<?=strip_tags($meta_description)?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Facebook Open Graph -->
    <meta property="og:title" content="<?=$page_title?>">
    <meta property="og:description" content="<?=strip_tags($meta_description)?>">
    <meta property="og:image" content="<?=base_url().$meta_image?>">
    <meta property="og:url" content="<?=site_url(uri_string())?>">
    <meta property="og:site_name" content="<?=$Settings['company_name']?>">

    <!-- Twitter -->
    <meta name="twitter:site" content="<?=$page_title?>">
    <meta name="twitter:creator" content="@K.SON">
    <meta name="twitter:url" content="<?=site_url(uri_string())?>">
    <meta name="twitter:title" content="<?=$page_title?>">
    <meta name="twitter:description" content="<?=strip_tags($meta_description)?>">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/<?=$Settings['company_favicon']?>">
    <style type='text/css'>
      #page_inner{
        background:url('/assets/img/9.jpg');
      }
    </style>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  
    <?php echo $before_head?>


</head>

<body>
  <div class="page-wraper">

<?php echo $this->load->view($template.'/elements/header/section_header')?>

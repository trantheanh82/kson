
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=$page_title?></title>
    <meta name="description" content="<?=strip_tags($meta_description)?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="<?=$page_title?>">
    <meta property="og:description" content="<?=strip_tags($meta_description)?>">
    <meta property="og:image" content="<?=base_url().$meta_image?>">
    <meta property="og:url" content="<?=base_url(uri_string());?>">
    <meta property="og:site_name" content="<?=$Settings['company_name']?>">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/<?=$Settings['company_favicon']?>">
    <?php echo $before_head?>
</head>

<body>
  <div class="page-wraper">

<?php echo $this->load->view($template.'/elements/header/section_header')?>

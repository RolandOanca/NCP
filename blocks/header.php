
  <?php include($root_folder."/pixels/tracking_head_pixels.php")?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noimageindex, nofollow, nosnippet">
  <meta name="description" content="<?php echo  $page_title;?>">
  <title><?php echo $page_title;?></title>
  
  <?php include($root_folder."/config_css.php");?>
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>/statics/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>/statics/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>/statics/css/webfont.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <?php if($page_type=="ty" ) if(file_exists($root_folder.'/blocks/pg/'.$vendor_type.'/ty_page_header.php')) include $root_folder.'/blocks/pg/'.$vendor_type.'/ty_page_header.php'; ?>
  <?php if($page_type=="sale" || $page_type=="upsell") if(file_exists($root_folder.'/blocks/pg/'.$vendor_type.'/sales_page_header.php'))  include $root_folder.'/blocks/pg/'.$vendor_type.'/sales_page_header.php'; ?>
  <?php if($page_type=="upsell") if(file_exists($root_folder.'/blocks/pg/'.$vendor_type.'/upsel_page_header.php'))  include $root_folder.'/blocks/pg/'.$vendor_type.'/upsel_page_header.php'; ?>
  

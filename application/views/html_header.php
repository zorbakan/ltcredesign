<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?if (isset($state)){ echo str_replace('-', ' ', ucfirst($state))." Long Term Care Insurance";} else{echo "Long Term Care Insurance";}?></title>
  <?/*<title><?if (isset($title)){ echo $title;} else{echo "Long Term Care Insurance";}?></title>*/?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
	
	<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.png">
  
  <link rel="stylesheet" type="text/css" media="print" href="<?php echo base_url();?>css/bootstrap.min.css">
  
	<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>js/scripts.js"></script>
  <script>
  var BASE_URL = '<?php echo base_url();?>';
  <?
  if (isset($state)){?>
  var CURRENT_STATE = '<?php echo $state;?>';
  <?}?>
  </script>

  <?php
  //Load Landing Page Scripts
  if (isset($section) AND $section=='landing'){?>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/landing_manager.js"></script>
  <?}?>

  <?php
  //Load Cost of Care Scripts
  if (isset($section) AND $section=='cost-of-long-term-care'){?>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/jhere.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/cost_of_care_manager.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/map_cost_of_care_manager.js"></script>
  <?}?>
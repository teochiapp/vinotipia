<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sofia+Sans:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hero-container " style="background-image: url('<?= site_url(); ?>/wp-content/uploads/2025/06/image.png');">
  <header class="site-header">
    <img src="<?= site_url();  ?>/wp-content/uploads/2025/06/unnamed.png" class="logo" alt="Logo del sitio" />
  </header>
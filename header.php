<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name');?>  | <?php wp_title(''); ?> </title>


<?php
  wp_nav_menu([
    'menu' => 'categorias',
    'container' => 'nav',
    'container_class' => 'menu-categorias',
  ])
?>





<?php
/*
  Template Name: Home Page
*/

get_header(); ?>

  <!-- SECTION HERO -->
  <?php get_template_part( 'template-parts/content', 'hero' ); ?>

  <!-- SECTION OPTIN -->
  <?php get_template_part( 'template-parts/content', 'optin' ); ?>

  <!-- SECTION BOOST YOUR INCOME -->
  <?php get_template_part( 'template-parts/content', 'boost' ); ?>

  <!-- SECTION WHO BENEFITS -->
  <?php get_template_part( 'template-parts/content', 'benefits' ); ?>

  <!-- SECTION COURSE FEATURES -->
  <?php get_template_part( 'template-parts/content', 'courseFeatures' ); ?>

  <!-- SECTION PROJECT FEATURES -->
  <?php get_template_part( 'template-parts/content', 'projectFeatures' ); ?>

  <!-- SECTION FEATURES VIDEO -->
  <?php get_template_part( 'template-parts/content', 'features' ); ?>

  <!-- SECTION INSTRUCTOR -->
  <?php get_template_part( 'template-parts/content', 'instructor' ); ?>

  <!-- SECTION TESTIMONIALS -->
  <?php get_template_part( 'template-parts/content', 'testimonials' ); ?>

<?php get_footer(); ?>

<?php
// Advanced Custom Fields
  $project_feature_title = get_field('project_feature_title');
  $project_feature_body  = get_field('project_feature_body');
?>
<!-- PROJECT FEATURES -->
<section id="project-features">
  <div class="container">

    <h2><?php echo $project_feature_title; ?></h2>
    <div class="lead"><?php echo $project_feature_body; ?></div>

    <div class="row">

      <!-- get value from db -->
      <?php $loop = new WP_Query( array(
        'post_type' => 'project_feature',
        'orderby' => 'post_id',
        'order' => 'ASC'
      )); ?>

      <!-- loop creat icon and title -->
      <?php while($loop->have_posts()) : $loop->the_post(); ?>
        <div class="col-sm-4">
          <?php
          // loop add image 
          if( has_post_thumbnail()) {
            the_post_thumbnail();
          }
          ?>
          <h3><?php echo the_title(); ?></h3>
          <p><?php echo the_content(); ?></p>
        </div>
      <?php endwhile; wp_reset_query() ?>

    </div>
  </div>
</section>
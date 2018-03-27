<?php
  /* Template Name: Resources Page */

  get_header();

  $thumbnail_url  = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );



  ?>

  <!-- SECTION FEATURE IMAGE -->
  <?php if( has_post_thumbnail() ) { ?>
    <section class="feature-image" style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: cover;" data-type="blackground" data-speed="2">
      <h1 class="page-title"><?php the_title(); ?></h1>
    </section>
  <?php } else { ?>
    <section class="feature-image  feature-image-default" data-type="blackground" data-speed="2">
      <h1 class="page-title"><?php the_title(); ?></h1>
    </section>
  <?php } ?>

  <!-- MAIN CONTENT -->
  <div class="container">
    <div class="row" id="primary">
      <div id="content" class="col-sm-12">

        <section class="main-content">
            <?php 
              //  get main content from db
              while (have_posts()) : the_post();
                the_content();
              endwhile;
            ?>

            <?php               
              // get array resource from db
              $loop = new WP_Query(array(
                'post_type' => 'resource',
                'orderby' => 'post_id',
                'order' => 'ASC'
              )); 
            ?>

          <hr>

          <div class="resources-row clearfix">

            <?php while($loop->have_posts()) : $loop->the_post(); ?>

              <?php
                $resource_image = get_field('resource_image');
                $resource_url   = get_field('resource_url');
                $button_text    = get_field('button_text');
              ?>

              <div class="resource">
                <!-- image -->
                <img src="<?php echo $resource_image[url]; ?>" alt="<?php echo $resource_image[alt]; ?>">
                
                <!-- title link -->
                <h3><a href="<?php $resource_url; ?>"><?php the_title(); ?></a></h3>
                
                <!-- content -->
                <?php the_content(); ?>

                <!-- button -->
                <?php if(!empty($button_text)) : ?>
                  <a href="<?php $resource_url; ?>" class="btn btn-success"><?php echo $button_text; ?></a>
                <?php endif; ?>
              </div>

            <?php endwhile; ?>

          </div>
        </section>

      </div>
    </div>
  </div>

  <?php get_footer(); ?>
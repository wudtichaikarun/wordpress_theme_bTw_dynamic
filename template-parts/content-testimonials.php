<!-- TESTIMONIALS -->
<section id="kudos">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2>What People Are Saying About Romantic</h2>

        <!-- get value from db -->
        <?php $loop = new WP_Query( array(
          'post_type' => 'testmonial',
          'orderby' => 'post_id',
          'order' => 'ASC'
        )); ?>

        <!-- loop creat icon and title -->
        <?php while($loop->have_posts()) : $loop->the_post(); ?>

          <div class="row testimonial">
            <div class="col-sm-4">
              <?php 
                if (has_post_thumbnail()) {
                  the_post_thumbnail( 200, 200); // width, heigth
                }
              ?>
            </div>

            <div class="col-sm-8">
              <blockquote><?php the_content(); ?></blockquote>
              <cite>&mdash; <?php the_title(); ?></cite>
            </div>
          </div>

        <?php endwhile; ?>

      </div>
    </div>
  </div>
</section>
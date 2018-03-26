<?php
/*
  Template Name: Home Page
*/

// Custom Fields
$prelaunch_price   = get_post_meta( 24, 'prelaunch_price', true);
$launch_price      = get_post_meta( 24, 'launch_price', true);
$final_price       = get_post_meta( 24, 'final_price', true);
$course_url        = get_post_meta( 24, 'course_url', true);
$button_text       = get_post_meta( 24, 'button_text', true);
$optin_text        = get_post_meta( 24, 'optin_text', true);
$optin_button_text = get_post_meta( 24, 'optin_button_text', true);

// Advanced Custom Fields
$income_feature_image = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_section_desc  = get_field('income_section_description');
$reason_1_title       = get_field('reason_1_title');
$reason_1_desc        = get_field('reason_1_description');
$reason_2_title       = get_field('reason_2_title');
$reason_2_desc        = get_field('reason_2_description');

$who_feature_image = get_field('who_feature_image');
$who_section_title = get_field('who_section_title');
$who_section_body = get_field('who_section_body');

$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');

$project_feature_title = get_field('project_feature_title');
$project_feature_body = get_field('project_feature_body');


get_header(); ?>

  <!-- HERO -->
  <section id="hero" data-type="background" data-speed="5">
    <article>
      <div class="container clearfix">
        <div class="row">

          <div class="col-sm-5">
            <!-- add-img  -->
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero, alias. Harum praesentium temporibus eaque facere nulla excepturi modi repellendus id?</p>
          </div>

          <div class="col-sm-7 hero-text">
            <h1><?php bloginfo( 'name' ); ?></h1>
            <p class="lead"><?php bloginfo( 'description' ); ?></p>

            <div id="price-timeline">
              <div class="price active">
                <h4>Pri-Launch <small>Ends soon!</small></h4>
                <span><?php echo $prelaunch_price ?></span>
              </div>

              <div class="price">
                  <h4>Launch Price <small>Coming soon!</small></h4>
                  <span><?php echo $launch_price ?></span>
              </div>

              <div class="price">
                  <h4>Final Price <small>Coming soon!</small></h4>
                  <span><?php echo $final_price ?></span>
              </div>
            </div>

            <p>
              <a href="" class="btn btn-lg btn-danger" href="<?php echo $course_url; ?>" role="button">
                <?php echo $button_text; ?>
              </a>
          </p>
          </div>
          
        </div>
      </div>
    </article>

  </section>

  <!-- OPTIN SECTION -->
  <section id="optin">
    <div class="container">
      <div class="row">

        <div class="col-sm-8">
          <p class="lead"><?php echo $optin_text; ?></p>
        </div>

        <div class="col-sm-4">
          <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $optin_button_text; ?></button>
        </div>

      </div>
    </div>
  </section>

  <!-- BOOST YOUR INCOME -->
  <section id="boost-income">
    <div class="container">

      <div class="section-header">

        <!-- If user uploaded an image -->
        <?php if(!empty($income_feature_image)) : ?>
          <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt']; ?>">  
        <?php endif; ?>

        <h2><?php echo $income_section_title; ?></h2>
      </div>

      <p class="lead"><?php echo $income_section_desc; ?></p>

      <div class="row">
        <div class="col-sm-6">
          <h3><?php echo $reason_1_title; ?></h3>
          <p><?php echo $reason_1_desc ?></p>
        </div>

      <div class="col-sm-6"></div>
        <h3><?php echo $reason_2_title; ?></h3>
        <p><?php echo $reason_2_desc; ?></p>
      </div>
    </div>
  </section>

  <!-- WHO BENEFITS -->
  <section id="who-benefits">
    <div class="container">

      <div class="section-header">

        <!-- If user uploaded an image -->
        <?php if(!empty($who_feature_image)) : ?>
          <img src="<?php echo $who_feature_image['url']; ?>" alt="<?php echo $who_feature_image['alt']; ?>">  
        <?php endif; ?>

        <h2><?php echo $who_section_title; ?></h2>
      </div>

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2"><?php echo $who_section_body; ?></div>
      </div>

    </div>
  </section>

  <!-- CORSE FEATURES -->
  <section id="course-features">
    <div class="container">

      <div class="section-header">

        <!-- If user uploaded an image -->
        <?php if(!empty($features_section_image)) : ?>
          <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>">  
        <?php endif; ?>

        <h2><?php echo $features_section_title; ?></h2>

        <!-- If user added body text -->
        <?php if(!empty($features_section_body)) : ?>
          <p class="lead"><?php echo $features_section_body; ?></p>
        <?php endif; ?>

      </div>

      <div class="row">

        <!-- get value from db -->
        <?php $loop = new WP_Query( array(
          'post_type' => 'course_feature',
          'orderby' => 'post_id',
          'order' => 'ASC'
        )); ?>

        <!-- loop creat icon and title -->
        <?php while($loop->have_posts()) : $loop->the_post(); ?>
          <div class="col-sm-2">
            <i class="<?php the_field('course_feature_icon'); ?>"></i>
            <h4><?php the_title(); ?></h4>
          </div>
        <?php endwhile; ?>

      </div>
    </div>
  </section>

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
        <?php endwhile; ?>

      </div>
    </div>
  </section>

  <!-- VIDEO FEATURETTE -->
  <section id="featurette">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h2>Watch the Course Introduction</h2>
          <iframe width="560" height="315" src="//www.youtube.com/embed/Oa2t7J2ruLA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- INSTRUCTOR -->
  <section id="instructor">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-6">
          <div class="row">
            <div class="col-lg-8">
              <h2>You Instructor <small>Brad Hussey</small></h2>
            </div>

            <div class="col-lg-4">
              <a href="" target="_blank" class="badge social twitter">
                <i class="fa fa-twitter"></i>
              </a>

              <a href="" target="_blank" class="badge social facebook">
                <i class="fa fa-facebook"></i>
              </a>

              <a href="" target="_blank" class="badge social gplus">
                <i class="fa fa-google-plus"></i>
              </a>
            </div>
          </div>

          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi dolore, iure laborum delectus quos inventore impedit sit provident accusantium magnam.</p>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi dolore, iure laborum delectus quos inventore impedit sit provident accusantium magnam.</p>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi dolore, iure laborum delectus quos inventore impedit sit provident accusantium magnam.</p>
          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi dolore, iure laborum delectus quos inventore impedit sit provident accusantium magnam.</p>

          <hr>

          <h3>The Number <small>Romantic</small></h3>

          <div class="row">

            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  41,000+ <span>student</span>
                </div>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  568 <span>review</span>
                </div>
              </div>
            </div>

            <div class="col-xs-4">
              <div class="num">
                <div class="num-content">
                  8 <span>courses</span>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section id="kudos">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h2>What People Are Saying About Romantic</h2>

          <div class="row testimonial">
            <div class="col-sm-4"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt=""></div>

            <div class="col-sm-8">
              <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dolor enim quia mollitia corrupti? Unde vel, fugit illo cum, sint rem ut quis, doloremque voluptas in voluptates animi eaque vero?</blockquote>
              <cite>&mdash; Brennanm graduate of all courses</cite>
            </div>
          </div>

          <div class="row testimonial">
            <div class="col-sm-4"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt=""></div>

            <div class="col-sm-8">
              <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dolor enim quia mollitia corrupti? Unde vel, fugit illo cum, sint rem ut quis, doloremque voluptas in voluptates animi eaque vero?</blockquote>
              <cite>&mdash; Brennanm graduate of all courses</cite>
            </div>
          </div>

          <div class="row testimonial">
            <div class="col-sm-4"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt=""></div>

            <div class="col-sm-8">
              <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dolor enim quia mollitia corrupti? Unde vel, fugit illo cum, sint rem ut quis, doloremque voluptas in voluptates animi eaque vero?</blockquote>
              <cite>&mdash; Brennanm graduate of all courses</cite>
            </div>
          </div>

          <div class="row testimonial">
            <div class="col-sm-4"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt=""></div>

            <div class="col-sm-8">
              <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dolor enim quia mollitia corrupti? Unde vel, fugit illo cum, sint rem ut quis, doloremque voluptas in voluptates animi eaque vero?</blockquote>
              <cite>&mdash; Brennanm graduate of all courses</cite>
            </div>
          </div>

          <div class="row testimonial">
            <div class="col-sm-4"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt=""></div>

            <div class="col-sm-8">
              <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente dolor enim quia mollitia corrupti? Unde vel, fugit illo cum, sint rem ut quis, doloremque voluptas in voluptates animi eaque vero?</blockquote>
              <cite>&mdash; Brennanm graduate of all courses</cite>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>

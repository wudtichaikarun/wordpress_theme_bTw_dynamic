<?php
/*
  Template Name: Home Page
*/

// Custom Fields
$prelaunch_price  = get_post_meta( 24, 'prelaunch_price', true);
$launch_price  = get_post_meta( 24, 'launch_price', true);
$final_price  = get_post_meta( 24, 'final_price', true);
$course_url  = get_post_meta( 24, 'course_url', true);
$button_text  = get_post_meta( 24, 'button_text', true);
$optin_text  = get_post_meta( 24, 'optin_text', true);
$optin_button_text = get_post_meta( 24, 'optin_button_text', true);

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
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-boost.png" alt="Chart">
        <h2>How You Can Boost Your Income</h2>
      </div>

      <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum dolorem fugit nulla quasi voluptas esse fuga iure aliquam tenetur officiis.</p>

      <div class="row">
        <div class="col-sm-6">
          <h3>Make money on the side</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur obcaecati, odio aperiam modi rem illo alias ducimus vero aspernatur nobis.</p>
        </div>

        <div class="col-sm-6">
          <h3>Create a full-time income</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, eum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non corrupti libero beatae eveniet dignissimos iure cumque recusandae error fugiat adipisci!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHO BENEFITS -->
  <section id="who-benefits">
    <div class="container">

      <div class="section-header">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-pad.png" alt="Pad and pencil">
        <h2>Who Should Take This Course?</h2>
      </div>

      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h3>Graphics &amp; Web Designers</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor laboriosam debitis porro itaque nemo eos! Impedit nemo eligendi quaerat. Provident.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga quidem quisquam illum. Doloremque at vel repellat voluptate dolorum, voluptates itaque optio debitis dolor ab exercitationem <strong>Lorem ipsum dolor sit amet.</strong> officia temporibus, sunt aut error?</p>
          
          <h3>Graphics &amp; Web Designers</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor laboriosam debitis porro itaque nemo eos! Impedit nemo eligendi quaerat. Provident.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga quidem quisquam illum. Doloremque at vel repellat voluptate dolorum, voluptates itaque optio debitis dolor ab exercitationem officia temporibus, sunt aut error?</p>
          
          <h3>Graphics &amp; Web Designers</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor laboriosam debitis porro itaque nemo eos! Impedit nemo eligendi quaerat. Provident.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga quidem quisquam illum. Doloremque at vel repellat voluptate dolorum, voluptates itaque optio debitis dolor ab exercitationem officia temporibus, sunt aut error?</p>
          
          <h3>Graphics &amp; Web Designers</h3>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor laboriosam debitis porro itaque nemo eos! Impedit nemo eligendi quaerat. Provident.</p>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fuga quidem quisquam illum. Doloremque at vel repellat voluptate dolorum, voluptates itaque optio debitis dolor ab exercitationem officia temporibus, sunt aut error?</p>
        </div>
      </div>

    </div>
  </section>

  <!-- CORSE FEATURES -->
  <section id="course-features">
    <div class="container">

      <div class="section-header">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-rocket.png" alt="Rocket">
        <h2>Course Features</h2>
      </div>

      <div class="row">
        <div class="col-sm-2">
          <i class="ci ci-watch"></i>
          <h4>Lifetime access to 80+ lectures</h4>
        </div>

        <div class="col-sm-2">
          <i class="ci ci-calendar"></i>
          <h4>Lifetime access to 80+ lectures</h4>
        </div>

        <div class="col-sm-2">
          <i class="ci ci-community"></i>
          <h4>Lifetime access to 80+ lectures</h4>
        </div>

        <div class="col-sm-2">
          <i class="ci ci-instructor"></i>
          <h4>Lifetime access to 80+ lectures</h4>
        </div>

        <div class="col-sm-2">
          <i class="ci ci-computer"></i>
          <h4>Lifetime access to 80+ lectures</h4>
        </div>

        <div class="col-sm-2">
          <i class="ci ci-device"></i>
          <h4>Lifetime access to 80+ lectures</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- PROJECT FEATURES -->
  <section id="project-features">
    <div class="container">

      <h2>Final Project Features</h2>
      <div class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit consequuntur eum quia voluptatum dolorum nemo voluptates, laboriosam debitis minus magni, nulla, repudiandae minima! Delectus, eligendi. Ea saepe veniam sit reiciendis.</div>

      <div class="row">
        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design">
          <h3>Sexy &amp; Modren Design</h3>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum corporis veniam quas perspiciatis ipsum alias vitae quis enim. Nisi consequuntur vero officia aut dolor laboriosam. Accusantium voluptate possimus deleniti consequuntur!</p>
        </div>
        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" alt="Code">
          <h3>Quality HTML5 &amp; CSS3</h3>
          <p>Id natus ipsum excepturi sequi eligendi officiis eaque modi, et rem quasi repudiandae blanditiis doloribus ipsam vel? Adipisci voluptatem quis sunt inventore rem laborum nostrum, tempore incidunt delectus id illum.</p>
        </div>
        <div class="col-sm-4">
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cms.png" alt="">
          <h3>Easy-to-use CMS</h3>
          <p>Adipisci iure culpa quis architecto quidem placeat sequi, incidunt exercitationem repellendus, itaque sit quos eaque odio nisi harum, consequuntur magni deserunt cupiditate nostrum labore praesentium. Ratione laudantium facilis consequuntur nostrum?</p>
        </div>
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

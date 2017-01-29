<?php

get_header();

?>

    <div id="home" class="hero-title hero">
        <div class="fullsize">



            <h1 class="hero-header"><?php bloginfo('name'); ?></h1>
            <?php
              if (! empty(bloginfo('description'))) :
             ?>

            <h2 class="hero-subheader"><?php bloginfo('description'); ?></h2>
            <?php
          endif;
             ?>

        </div>
    </div>
    <!-- end of hero title -->


    <!-- ================================================== -->


    <div class="row">
        <h1 class="col-12">

    </div>



    <!-- ================================================== -->


    <div id="projects" class="projects-title hero">
        <h1 class="hero-header">Projects</h1>
    </div>


    <!-- ================================================== -->


    <div class="project-box ">
        <div class="row">
            <h1 class="box-headline">Latest Projects</h1>
        </div>

<!-- categories IDs
Blog = 5
geektalk = 10
Photography = 11
Projects = 6
Electronics = 8
Music = 9
Web = 7



-->



        <div class="row">
            <div class="col-12 box-col">
                <!-- add featured image thumbnail of article here -->
                <h1>Featured Project title here working?</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
        <div class="row">
        <!--  WP_query loop-->
        <?php
        $WebPosts = new WP_Query('cat=7&posts_per_page=3');
        if ($WebPosts-> have_posts()) :
          while ( $WebPosts-> have_posts()) : $WebPosts->  the_post();
              ?>


              <div class="col-small-12 col-4 box-col">
                  <a href="<?php the_permalink(); ?>"><h2 style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )['0'];?>')"><?php the_title(); ?></h2></a>
                  <p><?php the_excerpt(); ?></p>
              </div>


              <?php
            endwhile;
          endif;
          ?>
       </div>
        <div class="row">
            <a class="btn col-4" href="#Projects">SEE MORE</a>
        </div>




        <!-- ================================================== -->

            <div id="projects" class="projects-title hero">
                <h1 class="hero-header">Electronics</h1>
            </div>


            <!-- ================================================== -->


            <div class="project-box ">
              <div class="row">
                <h1 class="box-headline">Latest Electronics</h1>
              </div>
              <div class="row">
                <div class="col-12 box-col">
                  <!-- add featured image thumbnail of article here -->
                    <h1>Featured electronics title here</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
              </div>
              <div class="row">


                  <div class="col-small-12 col-4 box-col">
                    <!-- add featured image thumbnail of article here -->
                      <h1>electronics title here</h1>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                  </div>
                  <div class="col-small-12 col-4 box-col">
                    <!-- add featured image thumbnail of article here -->
                      <h1>electronics title here</h1>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                  </div>
                  <div class="col-small-12 col-4 box-col">
                    <!-- add featured image thumbnail of article here -->
                      <h1>electronics title here</h1>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor <span><a href="#2">testing link</a></span>
                          in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                      </p>
                  </div>
              </div>
                <div class="row">
                    <a class="btn col-4" href="#electronics">SEE MORE</a>
                </div>




                <!-- ================================================== -->



        <div id="Music" class="Project-title hero">
            <h1 class="hero-header">Music</h1>
        </div>


        <!-- ================================================== -->


        <div class="project-box ">
            <div class="row">
                <h1 class="box-headline">Latest Music</h1>
            </div>
            <div class="row">
                <div class="col-12 box-col">
                    <!-- add featured image thumbnail of article here -->
                    <h1>Featured Music title here</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="row">


                <div class="col-small-12 col-4 box-col">
                    <!-- add featured image thumbnail of article here -->
                    <h1>Music title here</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="col-small-12 col-4 box-col">
                    <!-- add featured image thumbnail of article here -->
                    <h1>Music title here</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                <div class="col-small-12 col-4 box-col">
                    <!-- add featured image thumbnail of article here -->
                    <h1>Music title here</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                        <span><a href="#2">testing link</a></span> in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.
                    </p>
                </div>
            </div>
            <div class="row">
                <a class="btn col-4" href="#Music">SEE MORE</a>
            </div>




            <!-- ================================================== -->



            <div id="blog" class="blog-title hero">
                <h1 class="hero-header">Blog</h1>
            </div>


            <!-- ================================================== -->


            <div class="blog-box">
                <div class="row">
                    <h1 class="box-headline">Latest Posts</h1>
                </div>
                <div class="row">
                    <div class="col-12 box-col">
                        <!-- add featured image thumbnail of article here -->
                        <h1> Featured Article title here</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <div class="row">


                    <div class="col-small-12 col-4 box-col">
                        <!-- add featured image thumbnail of article here -->
                        <h1>Article title here</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="col-small-12 col-4 box-col">
                        <!-- add featured image thumbnail of article here -->
                        <h1>Article title here</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                    <div class="col-small-12 col-4 box-col">
                        <!-- add featured image thumbnail of article here -->
                        <h1>Article title here</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            <span><a href="#2">testing link</a></span> in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <a class="btn col-4" href="#Blog">SEE MORE</a>
                </div>
            </div>


            <!-- ================================================== -->


            <div id="contact" class="about-title hero">
                <h1>Behind The Scenes</h1>
            </div>


            <!-- ================================================== -->


            <div class="about-box">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-6 left">

                        </div>
                        <div class="col-6 right">

                        </div>
                    </div>
                </div>
            </div>


<?php
get_footer();

 ?>

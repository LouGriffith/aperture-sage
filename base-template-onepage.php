<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->

    <!-- Start #main -->
    <div id="main" class="m-scene">
    <div>

    <!-- Start body_class -->
    <div <?php body_class(''); ?>>

      <div id="wrapper">
        <div class="overlay"></div>
        <?php
          do_action('get_header');
          get_template_part('templates/header');
        ?>
        <div class="page-shift">
          <div class="" role="document">
            <div class="content">
              <main>
                <?php include Wrapper\template_path(); ?>
              </main><!-- /.main -->
            </div><!-- /.content -->
          </div><!-- /.wrap -->
          
          <?php
            do_action('get_footer');
            get_template_part('templates/footer');
          ?>

        </div>

        <!-- Modal -->
        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h4 class="modal-title">Contact Form</h4></div>
                    <div class="modal-body"><?php echo do_shortcode('[gravityform id="1" title=false description="false" ajax="true"]') ?></div>
                </div>
            </div>
        </div>
      </div>

    </div>
     <!-- End body_class -->
    
    </div>
    <!-- End #main -->
    
    <?php wp_footer();?>

  </body>
</html>
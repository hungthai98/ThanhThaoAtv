<?php 
$disable_page_title = true;
if ( metadata_exists( 'post', get_the_ID(), 'indutri_disable_page_title' ) ) {
  $disable_page_title = get_post_meta(get_the_ID(), 'indutri_disable_page_title', false);
}

if ( have_posts() ) : the_post(); ?>
    <div <?php post_class(); ?> id="<?php echo esc_attr(get_the_ID()); ?>">

        <?php do_action( 'indutri_page_content_before' ); ?>
 
        <?php if(!$disable_page_title){ ?>
          <h1 class="title"><?php the_title(); ?></h1>
        <?php } ?>

        <?php the_content(); ?>

        <div class="link-pages"><?php wp_link_pages(); ?></div>
        <div class="container">
           <?php
               // If comments are open or we have at least one comment, load up the comment template.
              if ( comments_open() || get_comments_number() ) {
                  comments_template();
              }          
            ?>
        </div>
        <?php do_action( 'indutri_page_content_after' ); ?>

    </div>

<?php endif; ?>
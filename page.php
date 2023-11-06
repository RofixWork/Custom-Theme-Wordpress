<?php 
    get_header();
    while(have_posts()) {
        the_post();
        ?>
        <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title();?></h1>
        <div class="page-banner__intro">
          <p>Learn how the school of your dreams got started.</p>
        </div>
      </div>
    </div>
    <div class="container container--narrow page-section">
    <?php 
    $parent = wp_get_post_parent_id(get_the_ID());
    if($parent) {?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_permalink($parent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parent) ?></a> <span class="metabox__main"><?php the_title();?></span>
        </p>
      </div>
      <?php }?>
<?php if(get_the_ID() == 20) {?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo site_url("/about-us") ?>">About Us</a></h2>
        <ul class="min-list">
          <li class="current_page_item"><a href="<?php echo site_url("/about-us/our-history") ?>">Our History</a></li>
          <li><a href="<?php echo site_url("/about-us/our-goals") ?>">Our Goals</a></li>
        </ul>
      </div>
<?php } else if(get_the_ID() == 3){?>
    <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo site_url("/privacy-policy") ?>">Privacy</a></h2>
        <ul class="min-list">
          <li><a href="<?php echo site_url("/privacy-policy/our-privacy") ?>">Our Privacy</a></li>
        </ul>
      </div>
    <?php } ?>
      <div class="generic-content">
        <?php the_content(); ?>
      </div>
    </div>

    </div>
    <?php
    }
?>
<?php get_footer();?>
<?php
/**
 * Template Name: post template
 */
 
get_header();
?>


<section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section>

<section style="padding:60px 0px;">
<div class="container">
    <div class="row">
        <?php
    global $post;
 
    $myposts = get_posts( array(
        'posts_per_page' => -1,
    ) );
 
    if ( $myposts ) {
        foreach ( $myposts as $post ) : 
            setup_postdata( $post ); ?>
            <div class="col-sm-4">
                <?php the_post_thumbnail(); ?>
                <a class="title_post" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>    
            </div>
        <?php
        endforeach;
        wp_reset_postdata();
    }
    ?>
    </div>
</div>
</section>

<style>
    a.title_post {
    color: #1A75BC;
    font-weight: 600;
    margin: 10px 0px;
    display: block;
    font-size: 15px;
}
</style>

<?php get_footer(); ?>
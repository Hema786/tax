<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<section class="breadcrumbs" style="margin-top:0px;	">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2><?php the_title(); ?></h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li><?php the_title(); ?></li>
          </ol>
        </div>

      </div>
    </section>


<section style="padding:60px;">
<div class="container">
    <div class="row">
        
        
        <div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php
			// Start the loop.
			while ( have_posts() ) :
				the_post();
				?>

				<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<div class="entry-thumbnaill">
			<?php the_post_thumbnail('full'); ?>
		</div>
		<?php endif; ?>

<div class="entry-meta" style="max-width: 100%;
    visibility: hidden;
    position: absolute;">
    <?php
			$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) { ?>
    <p><?php echo $tag->name . ' '; ?></p>
 <?php }
}
?>
		</div><!-- .entry-meta -->
		
			<?php if ( is_search() ) : // Only display excerpts for search. ?>
	<div class="entry-summaryy">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-contentt">
		<?php
			the_content(
				sprintf(
					/* translators: %s: Post title. */
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				)
			);

			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				)
			);
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
		
				<?php //twentythirteen_post_nav(); ?>
				<?php comments_template(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->
        
        
    </div>
</div>
	</section>
	
	<style>
	    .entry-contentt {
    padding: 20px 0px;
}
.comment-respond {
    background-color: transparent !important;
    padding: 30px 0;
}
.comments-title, .comment-list, .comment-reply-title, .must-log-in, .comment-respond .comment-form, .comment-respond iframe {
    max-width: 100% !important;
}
#commentform .form-submit input#submit {
    background: #6878d6;
    border: 0px;
    width: 220px;
}
form#commentform input {
    border: 1px solid #ccc;
    width: 100%;
    max-width: 100%;
}
form#commentform textarea {
    border: 1px solid #ccc;
}
p.comment-form-author {
    display: inline-block;
}
p.comment-form-email {
    display: inline-block;
}
p.comment-form-url {
    display: inline-block;
}
p.comment-form-cookies-consent input {
    max-width: 16px !important;
    margin: 10px 0px;
}
	</style>
	

<?php get_footer(); ?>

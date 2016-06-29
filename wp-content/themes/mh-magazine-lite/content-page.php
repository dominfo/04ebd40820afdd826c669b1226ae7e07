<?php /* Default template for displaying page content */ ?>
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title page-title">
			<?php the_title(); ?>
		</h1>
	</header>
	<div class="entry-content clearfix">
		<?php //the_content(); ?>

	</div>

</article>
<!--//////////////////////////////////////////
// add by deep for post of category
////////////////////////////////////////-->
<?php echo 'category_name='basename(get_permalink().'&showposts=1'; ?>
<?php  
//query_posts('category_name='basename(get_permalink().'&showposts=1')
if ( have_posts() ) {
			while (have_posts()) : the_post();
				get_template_part('content', 'loop');
			endwhile;
}?>
<!-- //////////////////////////////////////// -->
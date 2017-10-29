<?php get_header(); ?>

	<div class="container content">
		<div class="main block">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
			<article class="post">
				<h2><?php the_title(); ?></h2>
				<p class="meta">
				Posted at 
				<?php the_time('F j, Y H:i:s a');?> 
				by 
				<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
				<?php the_author(); ?></a> |
				Posted In
				<?php 
				    $categories = get_the_category();
				    $separator = ", ";
				    $output = "";
				    
				    if($categories){
				        foreach($categories as $category){
				            $output .= '<a href="' . get_category_link($category->term_id).'">' . $category->cat_name .'</a>' . $separator;
				        }
				    }
				    
				    echo trim($output, $separator);
				?>
				</p>
				 
				<?php if(has_post_thumbnail()) : ?>
					<div class="post-thumbnail">
					<?php the_post_thumbnail(); ?>
					</div>
				<?php endif; ?>
				<p><?php the_content(); ?></p>
			</article>
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo wpautop('Sorry no posts were found'); ?>
			<?php endif; ?>
		</div>
		<div class="side">
			<div class="block">
				<h3>Sidebar Head</h3>
				<p>Spicy jalapeno bacon ipsum dolor amet turducken pork chop shank
					corned beef, venison drumstick ribeye ham jowl brisket leberkas
					bacon cow pancetta. Short ribs shankle fatback kevin, pork chop
					pancetta pork belly. Corned beef meatball chuck, jowl pork belly
					drumstick frankfurter biltong spare ribs andouille boudin alcatra
					hamburger beef turducken. Chuck cupim doner pig, pork loin sirloin
					hamburger bacon.</p>
				<a class="button" href="#">Read More</a>
			</div>
		</div>
	</div>
<?php get_footer(); ?>

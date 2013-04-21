<?php get_header(); ?>
<div class="row-fluid">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="row-fluid">
					<div class="span12"><h1><?php the_title(); ?></h1></div>
				</div>
</div>
<div class="row-fluid">
				<div class="span10"><?php the_content(); ?></div>
				<?php if ( comments_open() && post_type_supports( get_post_type(), 'comments' )) : ?>
				<div class="span10"><?php comments_template(); ?></div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php else : ?>
			No results!
		<?php endif; ?>
				<div class="span2">
					<h4>Join the debate</h4>
					<p>
						<ul class="unstyled">
							<li><a href="http://twitter.com/iliw13">@iliw13</a></li>
							<li><a href="https://twitter.com/search?q=%23iliw13">#iliw13</a></li>
						</ul>
					</p>		
				</div>
</div>
<hr>
<?php get_footer(); ?>
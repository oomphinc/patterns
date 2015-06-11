<?php
/**
 * Render the Author block
 */
function braces_render_author_profile_block() { ?>
	<div class="author-block">
		<div class="author-block-author">
			<div class="author-block-author-inner">
				<div class="author-block-author-image">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 96 ); ?>
				</div>
				<div class="author-block-author-info">
					<h1 class="author-block-author-name"><?php the_author(); ?></h1>
					<div class="author-block-author-bio">
						<p><?php the_author_meta('description'); ?></p>
					</div>
						<a class="author-block-author-link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php _e( 'Read other articles by this author' ); ?> &raquo;</a>
				</div>
			</div>
		</div>
	</div>
<?php }
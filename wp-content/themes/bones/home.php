<?php get_header(); ?>
			<div id="content">
			
				<div id="inner-content" class="clearfix">

					<div id="slideshow">
					</div>
			
				    <div id="main" class="twelvecol first clearfix" role="main">
					    <div class="category-box">
					    	<div class="homepage-category-title green">
					    		<h3>Teatru</h3>
							</div>
							<?php query_posts('category_name=uncategorized&showposts=3');
							 	$i=0;
							 	if(have_posts()) :
							 		while(have_posts()): the_post();
							 			switch($i)
							 				{
							 					case 0: ?>
							 						<div class="main-recent-post fivecol">
							 							<span class="most-recent-ribbon"></span>
							 							 <? the_post_thumbnail( 'bones-thumb-465' ); ?>
							 						</div>
							 					<? 	break;
							 					   	case 1: ?>
							 					   	<div class="second-recent-post sevencol">
							 					   		<? 	the_post_thumbnail( 'bones-thumb-280'); ?>
							 					   		<a href="<? the_permalink() ?>"><? the_title() ?> </a>
							 					   		<div class="excerpt-overlay"><? the_excerpt() ?></div>
							 					   	</div>
							 					<?	break;
							 						default: printf('default state');
							 				}
							 			$i++;
							 		endwhile;
							 	else: ?><div class="alert-error"><? printf('This category has no posts.'); ?></div> <?
							 	endif;
							?>
						</div>
						<div class="category-box">
							<div class="homepage-category-title orange">
								<h3>Galerie</h3>
							</div>
							<?php query_posts('category_name=galerie&showposts=6');
								$j=0;
								if(have_posts()) :
									while(have_posts()) : the_post();
										switch ($j)
											{
												case 0: 
												case 1:
												case 2:
												case 3:
												case 4:
												case 5: ?>
													<div class="gallery-recent-post fourcol">
														<a href="<? the_permalink();?>" class="gallery-post-image"><?the_post_thumbnail('bones-thumb-250'); ?></a>
													</div>						
												<?	break;
													default: break;
											}
										$j++;
									endwhile;
								else: ?><div class="alert-error"><? printf('This category has no posts.'); ?></div> <?
								endif;
							?>
						</div>
						<div class="category-box">
							<div class="homepage-category-title blue">
								<h3>Cafenea</h3>
							</div>
							<?php query_posts('category_name=uncategorized&showposts=3');
							 	$i=0;
							 	if(have_posts()) :
							 		while(have_posts()): the_post();
							 			switch($i)
							 				{
							 					case 0: ?>
							 						<div class="main-recent-post sevencol">
							 							 <? the_post_thumbnail( 'bones-thumb-280' ); ?>
							 							<a href="<? the_permalink() ?>"><? the_title() ?> </a>
							 					   		<div class="excerpt-overlay"><? the_excerpt() ?></div>
							 						</div>
							 					<? 	break;
							 					   	case 1: ?>
							 					   	<div class="second-recent-post fivecol text-right">
							 					   		<span class="most-recent-ribbon2"></span>
							 					   		<? 	the_post_thumbnail( 'bones-thumb-465'); ?>
							 					   	</div>
							 					<?	break;
							 						default: printf('default state');
							 				}
							 			$i++;
							 		endwhile;
							 	else: ?><div class="alert-error"><? printf('This category has no posts.'); ?></div> <?
							 	endif;
							?>
						</div>
				    </div> <!-- end #main -->
    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
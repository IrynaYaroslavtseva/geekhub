<?php get_header() ?>
        
		    <main class="main-page" role="main">
                <section>
                    <blockquote>
                        <p>
                            "Ability may get you to the top, but it takes 
    character to keep you there."
                        </p>
                        <small class="author">John Wooden</small>
                    </blockquote>
                    <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
                    <article class="post">
                        <?php the_post_thumbnail('full', 'class=thumbnail') ?>
                        <span class="triangle"></span>
                        <h2 class="uppercase"><a href="<?php the_permalink() ?>"><?php 

the_title()?></a></h2>
                        <p class="text-post"><?php the_excerpt() ?></p>
                        <footer class="post-footer">
                            <small class="likes">23</small>
                            <ul class="post-note">
                                <li class="author">by <?php the_author(); ?></li>
                                <li class="comments"><?php comments_number('no comments', '1 comment', '% comments'); ?></li>
                                <li class="time"><span class="date"><?php the_time('M.n.Y') ?></span></li>
                            </ul>
                        </footer>
                    </article>
     <?php endwhile; ?>
     </section>
                    <div class="pagination">
         <?php
            global $wp_query;

            $big = 999999999; // need an unlikely integer

            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( 

$big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $wp_query->max_num_pages,
                'prev_text' => 'PREV',
	            'next_text' => 'NEXT'
            ) );
?>
         
     </div>
                    
     <?php else: ?>
     <!--no posts found-->
     <?php endif; ?>
  
		    </main>
		    
		    <?php get_sidebar() ?>
		    <?php get_footer() ?>
		    
		   
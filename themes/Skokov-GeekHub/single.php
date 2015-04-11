<?php get_header() ?>
        
		    <main class="main-page" role="main">
                <section>
                    
                    <?php if ( have_posts() ) : while (have_posts() ) : the_post(); ?>
                    <article class="single post">
                        <?php the_post_thumbnail('array(1000, 550)', 'class=single-thumbnail') ?>
                        
                        <h2 class="uppercase"><a href="<?php the_permalink() ?>"><?php 

the_title()?></a></h2>
                       <footer class="post-footer">
                            <small class="likes">23</small>
                            <ul class="post-note">
                                <li class="author">by <?php the_author(); ?></li>
                                <li class="comments"><?php comments_number('no comments', '1 comment', '% comments'); ?></li>
                                <li class="time"><span class="date"><?php the_time('M.n.Y') ?></span></li>
                            </ul>
                        </footer>
                        <p class="text-post"><?php the_content() ?></p>
                        
                    </article>
                    
                    <?php comments_template(); ?>
     <?php endwhile; ?>
     </section>
                    
                    
     <?php else: ?>
     <!--no posts found-->
     <?php endif; ?>
  
		    </main>
		    
		    <?php get_sidebar() ?>
		    <?php get_footer() ?>
		    
		   
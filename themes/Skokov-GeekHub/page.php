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
                        <h2 class="uppercase"><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2>
                        <p class="text-post"><?php the_content() ?></p>
                        
                    </article>
     <?php endwhile; ?>
     <!--post navigation-->
     <?php else: ?>
     <!--no posts found-->
     <?php endif; ?>
           
                   
                </section>
                <div class="pagination">1.2.3</div>    
		    </main>
		    
		    <?php get_sidebar() ?>
		    <?php get_footer() ?>
		    
		   
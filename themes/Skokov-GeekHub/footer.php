 <footer class="main-footer">
		        <div class="top-footer">
		            <div class="block-footer">
                       <div class="wrapp-footer">
                           <h3 class="footer-title">About Us</h3>
		                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
sed diam nonummy nibh euismod tincidunt ut 
laoreet dolore magna aliquam erat volutpat. Ut wisi 
enim ad minim veniam, quis nostrud exerci tation ullamcorper 
suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                      <a class="button-more" href="#">Learn more</a>
                       </div>
                       <div class="wrapp-footer">
                           <h3 class="footer-title">Photo Stream</h3>
		                <ul class="footer-photo">
		                    <li><img src="<?php bloginfo(template_url) ?>/images/footer-img1.jpg" alt=""></li>
		                    <li><img src="<?php bloginfo(template_url) ?>/images/footer-img2.jpg" alt=""></li>
		                    <li><img src="<?php bloginfo(template_url) ?>/images/footer-img1.jpg" alt=""></li>
		                    <li><img src="<?php bloginfo(template_url) ?>/images/footer-img2.jpg" alt=""></li>
		                    <li><img src="<?php bloginfo(template_url) ?>/images/footer-img1.jpg" alt=""></li>
		                    <li><img src="<?php bloginfo(template_url) ?>/images/footer-img2.jpg" alt=""></li>
		                </ul>
                       </div>
                        
		            </div>
		            <div class="block-footer">
		                <div class="wrapp-footer">
                           <h3 class="footer-title">Latest Tweets</h3>
		                <ul class="last-tweets">
		                    <li>Check Out Dtbaker's @Arduino Sales Notification #System http://t.co/ WBFKIWHJ</li>
		                    <li>Check Out Dtbaker's @Arduino Sales Notification #System http://t.co/ WBFKIWHJ</li>
		                    <li>Check Out Dtbaker's @Arduino Sales Notification #System http://t.co/ WBFKIWHJ</li>
		                    <li>Check Out Dtbaker's @Arduino Sales Notification #System http://t.co/ WBFKIWHJ</li>
		                    <li>Check Out Dtbaker's @Arduino Sales Notification #System http://t.co/ WBFKIWHJ</li>
		                </ul>
                       </div>
                       <div class="wrapp-footer">
                           <h3 class="footer-title">Social Connecting</h3>
		                <ul class="last-tweets">
		                    <li><a href="#"></a></li>
		                    <li><a href="#"></a></li>
		                    <li><a href="#"></a></li>
		                    <li><a href="#"></a></li>
		                    <li><a href="#"></a></li>
		                    <li><a href="#"></a></li>
		                    <li><a href="#"></a></li>
		                    <li><a href="#"></a></li>
		                </ul>
                       </div>
		            </div>
		            <div class="block-footer">
		                 <div class="wrapp-footer">
                           <h3 class="footer-title">Contact info</h3>
		                <ul class="contacts">
		                    <li>Address: </li>
		                    <li>Phone: </li>
		                    <li>E-mail: <?php bloginfo('admin_email') ?></li>
		                </ul>
                       </div>
                        <div class="wrapp-footer">
                           <h3 class="footer-title">Follow Us</h3>
		                <ul class="last-tweets">
		                    <p>Lorem Ipsum is simply dummy text of the printing 
and typesetting industry.</p>
                    <form action="">
                        <fieldset class="feedback">
                            <input type="text" name="mail" />
                            <input type="submit" />
                        </fieldset>
                    </form>
		                </ul>
                       </div>
		            </div>
		        </div>
		        <div class="bottom-footer">
		            <p class="copyright">Copyright 2013 - FreeForWebDesign.com - All Rights Reserved</p>
		            <?php wp_nav_menu(array('theme_location' => 'menu', 'container' => false, 'menu_class' => 'uppercase footer-nav')); ?> 
		        </div>
		    </footer>
		</div>
    <?php wp_footer() ?>
	</body>
</html>
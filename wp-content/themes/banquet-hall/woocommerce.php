<?php
/**
 * @package Banquet Hall
 */
get_header(); ?>
<div class="container">
			<div id="content_navigate">
    		<div class="page_content">
				<div class="woocommerce">
				<?php woocommerce_content(); ?>
                </div>
		   </div><!-- page_content-->
           </div>
    </div><!-- content -->
<?php get_footer(); ?>
<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Nisarg
 */

?>
	</div><!-- #content -->
	<footer id="colophon" role="contentinfo" style="background-color: rgb(242, 242, 242);"><br>
		<div class="container" >
			<div class="row">
				<div class="col-md-4 col-sm-6" align="center">
				<img src="<?php bloginfo('template_url'); ?>/images/acm.png" height="100px" width="200px">
					<!-- <img src="wp-content/themes/nisarg/images/acm.png" height="100px" width="200px"> -->
				</div>
				<div class="col-md-4 col-sm-6" style="text-align: center;">
					<a class="github_red" href="https://github.com/ACM-VIT">
						<i class="fa fa-github fa-2x" aria-hidden="true"></i>
					</a>&nbsp;&nbsp;
					<a class="fb_blue" href="https://facebook.com/ACM.VITU">
						<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
					</a>
					<div style="padding-bottom: 0px;">
						<a href="http://vit.ac.in" target="_blank" style="color: #148ef7; font-size: 15px;">acm.vit.in</a>
					</div>
					<div style="height: 20px;">
						<a href="mailto:vituacm@gmail.com" target="_top" style="color: #148ef7; font-size: 15px; ">vituacm@gmail.com</a>
					</div>
					<div>
						+91 8279887513
					</div>
				</div>
				<div class="col-md-4 col-sm-12" id="vtlg" align="center" >
					<a href="https://vit.ac.in">
						<img src="<?php bloginfo('template_url'); ?>/images/vit_logo.png" height="100px" width="200px">
						<!-- <img src="wp-content/themes/nisarg/images/vit_logo.png" height="100px" width="200px"> -->
					</a>
				</div>
			</div><!-- .site-info -->
		</div><br>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>

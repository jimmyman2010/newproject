<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>
		

				<div id="footer-nav">
<?php
if ( has_nav_menu( 'footer-menu' ) ) : ?>
<div class="container">
<?php
wp_nav_menu( array(
'theme_location' => 'footer-menu',
'depth'          => '1',
'menu_class'     => 'bottom-nav',
'container'      => '',
'fallback_cb'    => '',
) );
?>
</div>
<?php endif; ?>
					<div class="container clearfix">

				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}
				?>

						<p id="footer-info">Copyright &copy; 2016 Norstone Pty Ltd.</p>
						
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php wp_footer();?>	

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<script src="//static.getclicky.com/js" type="text/javascript"></script>
	<script type="text/javascript">try{ clicky.init(100980424); }catch(e){}</script>
	<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100980424ns.gif" /></p></noscript>
	<script type="text/javascript" src="https://crm.zoho.com/crm/javascript/zcga.js"> </script>

	<script type="text/javascript">
		$(function(){
			$('#et_search_icon').on('click', function(){
				$('#et_top_search .et-search-form').slideToggle();
			});

			$('#top-menu-nav .menu-item-has-children').on('mouseover', function(){
				$('#et_top_search .et-search-form').slideUp();
			});

			$('.product-menu-toggle').on('click', function(){
				$(this).toggleClass('open');
			});
		});
	</script>

</body>
</html>
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

						<p id="footer-info">Copyright &copy; 2017 Norstone Pty Ltd.</p>
						
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php wp_footer();?>	

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

<!-- #CLICKY START -->
<script type="text/javascript">
var clicky_site_ids = clicky_site_ids || [];
clicky_site_ids.push(100980424);
(function() {
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = '//static.getclicky.com/js';
  ( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild( s );
})();
</script>
<noscript><p><img alt="Clicky" width="1" height="1" src="//in.getclicky.com/100980424ns.gif" /></p></noscript>
<!-- #CLICKY END -->

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

<script>
 	  var mndFileds=new Array('First Name','Last Name','Phone','Email','City','Zip Code');
 	  var fldLangVal=new Array('First Name','Last Name','Phone','Email','City','Post Code');
		var name='';
		var email='';

 	  function checkMandatory() {
		for(i=0;i<mndFileds.length;i++) {
		  var fieldObj=document.forms['WebToLeads2051214000000104180'][mndFileds[i]];
		  if(fieldObj) {
			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
			 if(fieldObj.type =='file')
				{ 
				 alert('Please select a file to upload.'); 
				 fieldObj.focus(); 
				 return false;
				} 
			alert(fldLangVal[i] +' cannot be empty'); 
   	   	  	  fieldObj.focus();
   	   	  	  return false;
			}  else if(fieldObj.nodeName=='SELECT') {
  	   	   	 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
				alert(fldLangVal[i] +' cannot be none'); 
				fieldObj.focus();
				return false;
			   }
			} else if(fieldObj.type =='checkbox'){
 	 	 	 if(fieldObj.checked == false){
				alert('Please accept  '+fldLangVal[i]);
				fieldObj.focus();
				return false;
			   } 
			 } 
			 try {
			     if(fieldObj.name == 'Last Name') {
				name = fieldObj.value;
 	 	 	    }
			} catch (e) {}
		    }
		}
		trackVisitor();
	}
</script>

<!-- #ZOHO IQ START -->
<script type="text/javascript">
var $zoho= $zoho || {salesiq:{values:{},ready:function(){}}};var d=document;s=d.createElement("script");s.type="text/javascript";
s.defer=true;s.src="https://salesiq.zoho.com/norstone/float.ls?embedname=norstone";
t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);
</script>
<!-- #ZOHO IQ END -->

</body>
</html>
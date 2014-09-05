<section id="copy__right">
<div class="content__Wrap">
<div class="row">
	<div class="col-md-6 pull-left text-left">
            <p><?php echo $custom_val['wpcf-footer'][0];?></p>   
    <!--<p>Copyright © 2014, Mila Thread. ALL RIGHTS RESERVED</p>
    	Website designed and developed by Belhi Designs-->
    </div>
    
    <div class="col-md-6 pull-right">
    <figure class="social_icons">
    
	<ul>
    	<li><a href="<?php echo types_render_field('facebook-url', $params); ?>" class="fb"></a></li>
        <li><a href="<?php echo types_render_field('youtube-url', array()); ?>" class="yt"></a></li>
        <li><a href="<?php echo types_render_field('twitter-url', array()); ?>" class="gp"></a></li>
        <li><a href="<?php echo types_render_field('yelp-url', array()); ?>" class="yelp"></a></li>
    </ul>
</figure>
</div>
</div>


    
  </div>
</section>
<!--===============================================================--> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>--> 
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>--> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<!--<script src="js/bootstrap.min.js"></script>--> 

<!--<script src="js/modernizr.js"></script>--> 

<script src="<?php echo get_bloginfo('template_directory');?>/js/jquery-1.8.2.min.js"></script> 
<script src="<?php echo get_bloginfo('template_directory');?>/js/bootstrap.js"></script> 
<script src="<?php echo get_bloginfo('template_directory');?>/js/parallax.js"></script> 
<script src="<?php echo get_bloginfo('template_directory');?>/js/modernizr.js"></script> 
<script>
	$(document).ready(function(){
		$('.video_play_btn').click(function(){
			$('.customLightbox').fadeIn('slow');
			});
			
		$('.popup-close').click(function(){
			$('.customLightbox').fadeOut('slow');
			});	
			
	});
	</script> 

<!--Feather Lightbox Scripts--> 
<!--<script src="js/featherlight.js" type="text/javascript" charset="utf-8"></script>--> 

<!-- Smooth Scroll --> 
<script>
	$('.topdownscroll').click(function(){
		$('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top
		}, 800);
		return false;
	});
	</script> 

<!-- js --> 

<!--SuperSlider--> 
<script src="<?php echo get_bloginfo('template_directory');?>/js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script> 
<script>
    $(function() {
      $('#slides').superslides({
        hashchange: false,
		play: 4000,
		animation: 'slide'
      });
    });
  </script> 

<!--Sticky Header and smooth scroll scripts--> 
<!--<script src="js/scroll_navi.js" type="text/javascript"></script>
    <script type="text/javascript">
        $("#sticky-header").scroll_navi();
		//video popup
		
    </script>--> 

<!-- WOW --> 
<script src="<?php echo get_bloginfo('template_directory');?>/js/wow.min.js"></script> 
<script>
var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true        // trigger animations on mobile devices (true is default)
  }
);
wow.init();
</script> 
<!--<script>
//sticky header code

$(window).scroll(function () { 
 var toScroll = $('#video').height();
   
   if ( $(window).scrollTop() > toScroll ) {
	   
    $('#sticky-header').addClass('open');

   } else if ( $(window).scrollTop() < toScroll ) {
    $('#sticky-header').removeClass('open');
  }
});
</script>-->


</body>
</html>
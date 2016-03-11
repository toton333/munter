<?php 
/*
Template Name: Front Page
*/

?>

<!doctype html>
<html>
<head <?php language_attributes( ); ?>>
	<meta charset="<?php bloginfo('charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	
	<meta name="description" content="BlackTie.co - Free Handsome Bootstrap Themes" />	    
	<meta name="keywords" content="themes, bootstrap, free, templates, bootstrap 3, freebie,">
	<meta property="og:title" content="">

	
	
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,600,300,200&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	
	<link rel="prefetch" href="<?php echo get_template_directory_uri()?>/images/zoom.png">
	<?php wp_head(); ?>
		
</head>

<body <?php body_class( ); ?>  >
	<div   class="navbar navbar-fixed-top" data-activeslide="1">
		<div class="container">
		
			<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			
			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav row">
					<?php
					global $post;
					$args = array('post_type' => 'page', 'posts_per_page' => '-1', 'orderby' => 'menu_order', 'order' => 'ASC' );
					$posts = get_posts( $args ); 
					$i = 1;
					foreach($posts as $post) : setup_postdata( $post );
                    
					?>
					<li data-slide="<?php echo $i; ?>" class="col-12 col-sm-2"><a id="menu-link-<?php echo $i; ?>" href="#<?php echo $post->post_name; ?>" title="Next Section"><span class="icon icon-home"></span> <span class="text"><?php the_title(); ?></span></a></li>
                    <?php $i++; ?>
				    <?php endforeach; wp_reset_postdata();?>
				</ul>
				<div class="row">
					<div class="col-sm-2 active-menu"></div>
				</div>
			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->
	
	
	<!-- === Arrows === -->
	<div id="arrows">
		<div id="arrow-up" class="disabled"></div>
		<div id="arrow-down"></div>
		<div id="arrow-left" class="disabled visible-lg"></div>
		<div id="arrow-right" class="disabled visible-lg"></div>
	</div><!-- /.arrows -->
	
	
	<!-- === MAIN Background === -->
	<?php
         global $redux_munter;
	 ?>
	<div class="slide story" id="slide-1" data-slide="1">
		<div class="container">
			<div id="home-row-1" class="row clearfix">
				<div class="col-12">
					<h1 class="font-semibold"><?php echo $redux_munter['opt-munter-heading']; ?></h1>
					<h4 class="font-thin"><?php echo $redux_munter['opt-munter-subheading']; ?></h4>
					<br>
					<br>
				</div><!-- /col-12 -->
			</div><!-- /row -->
			<div id="home-row-2" class="row clearfix">
				<?php 
                 if (isset($redux_munter['opt-slides']) && !empty($redux_munter['opt-slides'])  ) {
                 	$slides = $redux_munter['opt-slides'];
                 	foreach ($slides as $slide) {
                 		$title = $slide['title'];
                 		$image = wp_get_attachment_image( $slide['attachment_id'] );
                 		$url = $slide['url'];
                 		?>

                 		<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="<?php echo $url; ?>"><?php echo $image; ?></div><span><?php echo $title; ?></span></div>


                 		<?php
                 	}
                 }

				 ?>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide1 -->
	
	
	<?php 
       
       $args = array('post_type' => 'page', 'posts_per_page' => '-1', 'orderby' => 'menu_order', 'order' => 'ASC',
                     'post__not_in' => array(5) );
       $posts = get_posts( $args ); 
       foreach($posts as $post) : setup_postdata( $post );

	?>
    <?php get_template_part( 'template', $post->post_name); ?>

    <?php endforeach; wp_reset_postdata(); ?>
	
	
	

	
	

	<?php wp_footer(); ?>
	
</body>

	<!-- SCRIPTS -->
	<script src="<?php echo get_template_directory_uri()?>/js/html5shiv.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/jquery-1.10.2.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/bootstrap.min.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri()?>/fancybox/jquery.fancybox.pack-v=2.1.5.js"></script>
	<script src="<?php echo get_template_directory_uri()?>/js/script.js"></script>
	
	<!-- fancybox init -->
	<script>
	$(document).ready(function(e) {
		var lis = $('.nav > li');
		menu_focus( lis[0], 1 );
		
		$(".fancybox").fancybox({
			padding: 10,
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	
	});
	</script>

</html>
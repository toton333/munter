<!-- === Slide 4 - Process === -->
	<div class="slide story" id="slide-4" data-slide="4">
		<div class="container">
			<div class="row title-row">
				<?php $prefix = '_munter_demo_'; ?>
				<div class="col-12 font-thin"><?php echo wpautop( get_post_meta( get_the_ID(),$prefix . 'wysiwyg', true ) ); ?></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light"><?php the_content(); ?></div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>

				<?php 
				$prefix = '_munter_group_';
				$entries = get_post_meta( get_the_ID(), $prefix . 'demo', true );

				foreach ( (array) $entries as $key => $entry ) {

				    $icon = $title = $desc = $caption = '';

				    if ( isset( $entry['title'] ) )
				        $title = wpautop( $entry['title'] );

				    if ( isset( $entry['description'] ) )
				        $desc = wpautop( $entry['description'] );

				    if ( isset( $entry['image'] ) ) {
				        $icon = esc_html( $entry['image'] );
				    }
				    $caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';

				    // Do something with the data
				    ?>

				    <div class="col-12 col-sm-2">
				    	<p><i class="<?php echo $icon; ?>"></i></p>
				    	<h2 class="font-thin"><?php echo $title; ?></h2>
				    	<h4 class="font-thin"><?php echo $desc; ?></h4>
				    </div><!-- /col12 -->
				    <?php
				}

				?>
				
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide4 -->
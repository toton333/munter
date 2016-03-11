<!-- === SLide 3 - Portfolio -->
	<div class="slide story" id="slide-3" data-slide="3">
		<div class="row">
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

			    if ( isset( $entry['photo_id'] ) ) {
			            $photo = wp_get_attachment_image( $entry['photo_id'], 'share-pick', null, array(
			                'class' => 'thumb',
			            ) );
			        }

			        if ( isset( $entry['photo_popup_id'] ) ) {
			                $photo_popup_url = wp_get_attachment_url( $entry['photo_popup_id'] );
			            }
			    $caption = isset( $entry['image_caption'] ) ? wpautop( $entry['image_caption'] ) : '';

			    // Do something with the data
			    ?>

			    <div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="<?php echo $photo_popup_url; ?>"><?php echo $photo; ?></a></div>


			    <?php
			}

			?>
			
		</div><!-- /row -->
	</div><!-- /slide3 -->
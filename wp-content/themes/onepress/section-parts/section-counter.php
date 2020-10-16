<?php
$id       = get_theme_mod( 'onepress_counter_id', esc_html__( 'counter', 'onepress' ) );
$disable  = get_theme_mod( 'onepress_counter_disable' ) == 1 ? true : false;
$title    = get_theme_mod( 'onepress_counter_title', esc_html__( 'Our Numbers', 'onepress' ) );
$subtitle = get_theme_mod( 'onepress_counter_subtitle', esc_html__( 'Section subtitle', 'onepress' ) );
if ( onepress_is_selective_refresh() ) {
	$disable = false;
}

// Get counter data
$boxes = onepress_get_section_counter_data();
if ( ! empty( $boxes ) ) {
	$desc = wp_kses_post( get_theme_mod( 'onepress_counter_desc' ) );
	?>
	<?php if ( $disable != '1' ) : ?>
		<?php if ( ! onepress_is_selective_refresh() ) { ?>
		<section id="<?php if ( $id != '' ) {
			echo esc_attr( $id ); } ?>" <?php do_action( 'onepress_section_atts', 'counter' ); ?>
				 class="<?php echo esc_attr( apply_filters( 'onepress_section_class', 'section-counter section-padding onepage-section', 'counter' ) ); ?>">
		<?php } ?>
			<?php do_action( 'onepress_section_before_inner', 'counter' ); ?>
			<div class="<?php echo esc_attr( apply_filters( 'onepress_section_container_class', 'container', 'counter' ) ); ?>">
				<?php if ( $title || $subtitle || $desc ) { ?>
				<div class="section-title-area">
					<?php if ( $subtitle != '' ) {
						echo '<h5 class="section-subtitle">' . esc_html( $subtitle ) . '</h5>';} ?>
					<?php if ( $title != '' ) {
						echo '<h2 class="section-title">' . esc_html( $title ) . '</h2>';} ?>
					<?php if ( $desc ) {
						echo '<div class="section-desc">' . apply_filters( 'onepress_the_content', $desc ) . '</div>';
} ?>
				</div>
				<?php } ?>
				<div class="row">
					<?php
					$col = 3;
					$num_col = 4;
					$n = ( is_array( $boxes ) && ! empty( $boxes ) ) ? count( $boxes ) : 1;
					if ( $n < 4 ) {
						switch ( $n ) {
							case 3:
								$col = 4;
								$num_col = 3;
								break;
							case 2:
								$col = 6;
								$num_col = 2;
								break;
							default:
								$col = 12;
								$num_col = 1;
						}
					}
					$j = 0;
					foreach ( $boxes as $i => $box ) {
						$box = wp_parse_args(
							$box,
							array(
								'user_id'  =>array(),
							)
						);

						$link = isset( $box['link'] ) ?  $box['link'] : '';
						$user_id = wp_parse_args( $box['user_id'],array(
							'id' => '',
						 ) );

						$image_attributes = wp_get_attachment_image_src( $user_id['id'], 'onepress-small' );
						$image_alt = get_post_meta( $user_id['id'], '_wp_attachment_image_alt', true);

						if ( $image_attributes ) {
							$image = $image_attributes[0];
							$data = get_post( $user_id['id'] );
							$j ++ ;
							?>
							<div class="team-member wow slideInUp">
								<div class="member-thumb">
									<?php if ( $link ) { ?>
										<a href="<?php echo esc_url( $link ); ?>">
									<?php } ?>
									<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo $image_alt; ?>">
									<?php if ( $link ) { ?>
										</a>
									<?php } ?>
									<?php do_action( 'onepress_section_team_member_media', $box ); ?>
								</div>
								<div class="member-info">
									<h5 class="member-name"><?php if ( $link ) { ?><a href="<?php echo esc_url( $link ); ?>"><?php } ?><?php echo esc_html( $data->post_title ); ?><?php if ( $link ) { ?></a><?php } ?></h5>
									<span class="member-position"><?php echo esc_html( $data->post_content ); ?></span>
								</div>
							</div>
							<?php
						}
					} // end foreach

					?>
				</div>
			</div>
			<?php do_action( 'onepress_section_after_inner', 'counter' ); ?>
		<?php if ( ! onepress_is_selective_refresh() ) { ?>
		</section>
		<?php } ?>
	<?php endif;
}

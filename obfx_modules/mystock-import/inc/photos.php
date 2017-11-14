<?php
/**
 * Template used for photo rendering.
 *
 * @package OBFX
 */

?>
<div id='obfx-mystock' data-pagenb="1">
	<div class="left-side">
		<ul class='obfx-image-list'>
			<?php
			if ( ! empty( $urls ) ) {
				foreach ( $urls as $photo ) {
					$pid = $photo['id'];
					if ( ! empty( $pid ) ) {
						$thumb = $photo['url_m'];
						?>
						<li class='obfx-image' data-page="1" data-pid="<?php echo esc_attr( $pid ); ?>">
							<div class="obfx-preview">
								<div class="thumbnail">
									<div class="centered">
										<img src='<?php echo esc_url( $thumb ); ?>'>
									</div>
								</div>
							</div>
							<button type="button" class="check obfx-image-check" tabindex="0">
								<span class="media-modal-icon"></span>
								<span class="screen-reader-text"><?php esc_html_e( 'Deselect', 'themeisle-companion' ); ?></span>
							</button>
						</li>
						<?php
					}
				}
			}
			?>
		</ul>
		<div class="obfx_spinner"></div>
		<div class="media-sidebar"></div>
	</div>
</div>

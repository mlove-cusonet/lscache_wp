<?php
namespace LiteSpeed;
defined( 'WPINC' ) || exit;

$placeholder_summary = Placeholder::get_summary();

$cloud_svc = Conf::val( Base::O_MEDIA_PLACEHOLDER_LQIP ) ? Cloud::SVC_LQIP : Cloud::SVC_PLACEHOLDER;
$closest_server = Cloud::get_summary( 'server.' . $cloud_svc );

?>

<h3 class="litespeed-title-short">
	<?php echo __( 'Media Settings', 'litespeed-cache' ); ?>
	<?php $this->learn_more( 'https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:cache:lscwp:configuration:media', false, 'litespeed-learn-more' ); ?>
</h3>

<table class="wp-list-table striped litespeed-table"><tbody>
	<tr>
		<th>
			<?php $id = Base::O_MEDIA_LAZY; ?>
			<?php $this->title( $id ); ?>
		</th>
		<td>
			<?php $this->build_switch( $id ); ?>
			<div class="litespeed-desc">
				<?php echo __( 'Load images only when they enter the viewport.', 'litespeed-cache' ); ?>
				<?php echo __( 'This can improve page loading time by reducing initial HTTP requests.', 'litespeed-cache' ); ?>
				<br /><font class="litespeed-success">
					💡:
					<a href="https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:cache:lscwp:configuration:media:lazy-load-style" target="_blank"><?php echo __('Adding Style to Your Lazy-Loaded Images', 'litespeed-cache'); ?></a>
				</font>
			</div>
		</td>
	</tr>

	<tr>
		<th>
			<?php $id = Base::O_MEDIA_LAZY_PLACEHOLDER; ?>
			<?php $this->title( $id ); ?>
		</th>
		<td>
			<?php $this->build_input( $id, 'litespeed-input-long' ); ?>
			<div class="litespeed-desc">
				<?php echo __( 'Specify a base64 image to be used as a placeholder while other images finish loading.', 'litespeed-cache' ); ?>
				<br /><?php echo sprintf( __( 'This can be predefined in %2$s as well using constant %1$s, with this setting taking priority.', 'litespeed-cache' ), '<code>LITESPEED_PLACEHOLDER</code>', '<code>wp-config.php</code>' ); ?>
				<br /><?php echo sprintf( __( 'By default a gray image placeholder %s will be used.', 'litespeed-cache' ), '<code>data:image/gif;base64,R0lGODdhAQABAPAAAMPDwwAAACwAAAAAAQABAAACAkQBADs=</code>' ); ?>
				<br /><?php echo sprintf( __( 'For example, %s can be used for a transparent placeholder.', 'litespeed-cache' ), '<code>data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7</code>' ); ?>
			</div>
		</td>
	</tr>

	<tr>
		<th>
			<?php $id = Base::O_MEDIA_PLACEHOLDER_RESP; ?>
			<?php $this->title( $id ); ?>
		</th>
		<td>
			<?php $this->build_switch( $id ); ?>
			<div class="litespeed-desc">
				<?php echo __( 'Responsive image placeholders can help to reduce layout reshuffle when images are loaded.', 'litespeed-cache' ); ?>
				<?php echo __( 'This will generate the placeholder with same dimensions as the image if it has the width and height attributes.', 'litespeed-cache' ); ?>
			</div>
		</td>
	</tr>

	<tr>
		<th>
			<?php $id = Base::O_MEDIA_PLACEHOLDER_RESP_SVG; ?>
			<?php $this->title( $id ); ?>
		</th>
		<td>
			<?php $this->build_input( $id, 'litespeed-input-long' ); ?>
			<div class="litespeed-desc">
				<?php echo __( 'Specify an SVG to be used as a placeholder when generating locally.', 'litespeed-cache' ); ?>
				<?php echo __( 'It will be converted to a base64 placeholder on-the-fly.', 'litespeed-cache' ); ?>
				<br /><?php echo sprintf( __( 'Variables %s will be replaced with the corresponding image properties.', 'litespeed-cache' ), '<code>{width} {height}</code>' ); ?>
				<br /><?php echo sprintf( __( 'Variables %s will be replaced with the configured background color.', 'litespeed-cache' ), '<code>{color}</code>' ); ?>
				<br /><?php $this->recommended( $id ); ?>
				<br /><?php echo __( 'Online SVG generator tool', 'litespeed-cache' ); ?>: <a href="https://www.svgator.com/" target="_blank">https://www.svgator.com/</a>
			</div>
		</td>
	</tr>

	<tr>
		<th>
			<?php $id = Base::O_MEDIA_PLACEHOLDER_RESP_COLOR; ?>
			<?php $this->title( $id ); ?>
		</th>
		<td>
			<?php $this->build_input( $id, null, null, 'color' ); ?>
			<div class="litespeed-desc">
				<?php echo __( 'Specify the responsive placeholder color when generating online.', 'litespeed-cache' ); ?>
				<?php $this->recommended( $id ); ?>
			</div>
		</td>
	</tr>

	<tr>
		<th>
			<?php $id = Base::O_MEDIA_PLACEHOLDER_RESP_GENERATOR; ?>
			<?php $this->title( $id ); ?>
		</th>
		<td>
			<div class="litespeed-switch">
				<?php $this->build_radio( $id, Base::VAL_OFF, __( 'Local', 'litespeed-cache' ) ); ?>
				<?php $this->build_radio( $id, Base::VAL_ON, __( 'Cloud', 'litespeed-cache' ) ); ?>
			</div>
			<div class="litespeed-desc">
				<?php echo __( 'Specify the generator used for base64 image.', 'litespeed-cache' ); ?>
			</div>
		</td>
	</tr>

	<tr>
		<th>
			<?php $id = Base::O_MEDIA_PLACEHOLDER_LQIP; ?>
			<?php $this->title( $id ); ?>
		</th>
		<td>
			<?php $this->build_switch( $id ); ?>
			<div class="litespeed-desc">
				<?php echo __( 'Use online LQIP (Low Quality Image Placeholder) generator service for better user experience when images are loading.', 'litespeed-cache' ); ?>
				<br /><?php echo __( 'Keep this off to use plain color placeholder.', 'litespeed-cache' ); ?>
				<?php $this->learn_more( 'https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:cache:lscwp:configuration:media#generate_responsive_placeholder_lqip' ); ?>
			</div>
		</td>
	</tr>

	<tr>
		<th>
			<?php $id = Base::O_MEDIA_PLACEHOLDER_LQIP_QUAL; ?>
			<?php $this->title( $id ); ?>
		</th>
		<td>
			<?php $this->build_input( $id, 'litespeed-input-short' ); ?>
			<div class="litespeed-desc">
				<?php echo __( 'Specify the quality when generating LQIP.', 'litespeed-cache' ); ?>
				<br /><?php echo __( 'Larger numbers will generate higher resolution quality placeholder, but will result in larger files which will increase page size and consume more points.', 'litespeed-cache' ); ?>
				<?php $this->recommended( $id ); ?>
				<?php $this->_validate_ttl( $id, 1, 20 ); ?>
			</div>
		</td>
	</tr>

	<tr>
		<th>
			<?php $id = Base::O_MEDIA_PLACEHOLDER_RESP_ASYNC; ?>
			<?php $this->title( $id ); ?>
		</th>
		<td>
			<?php $this->build_switch( $id ); ?>
			<div class="litespeed-desc">
				<?php echo sprintf( __( 'Automatically generate %s in the background via a cron-based queue.', 'litespeed-cache' ), __( 'Responsive Placeholder', 'litespeed-cache' ) ); ?>
				<?php echo sprintf(
					__( 'If set to %1$s, before the placeholder is localized, the %2$s configuration will be used.', 'litespeed-cache' ),
					'<code>' . __('ON', 'litespeed-cache') . '</code>',
					'<code>' . Lang::title( Base::O_MEDIA_PLACEHOLDER_RESP_SVG ) . '</code>'
				); ?>
				<?php echo sprintf( __( 'If set to %s this is done in the foreground, which may slow down page load.', 'litespeed-cache' ), '<code>' . __('OFF', 'litespeed-cache') . '</code>' ); ?>
				<?php $this->learn_more( 'https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:cache:lscwp:configuration:media#generate_responsive_placeholder' ); ?>
			</div>

			<?php if ( $placeholder_summary ) : ?>
			<div class="litespeed-desc">
				<?php if ( ! empty( $placeholder_summary[ 'last_request' ] ) ) : ?>
					<p>
						<?php echo __( 'Last generated', 'litespeed-cache' ) . ': <code>' . Utility::readable_time( $placeholder_summary[ 'last_request' ] ) . '</code>'; ?>
					</p>
				<?php endif; ?>

				<?php if ( $closest_server ) : ?>
					<a href="<?php echo Utility::build_url( Router::ACTION_CLOUD, Cloud::TYPE_REDETECT_CLOUD, false, null, array( 'svc' => $cloud_svc ) ); ?>" title='<?php echo sprintf( __( 'Current closest Cloud server is %s. Click to redetect.', 'litespeed-cache' ), $closest_server ); ?>' data-litespeed-cfm="<?php echo __( 'Are you sure to redetect the closest cloud server for this service?', 'litespeed-cache' ) ; ?>"><i class='litespeed-quic-icon'></i></a>
				<?php endif; ?>

				<?php if ( ! empty( $placeholder_summary[ 'queue' ] ) ) : ?>
					<div class="litespeed-callout notice notice-warning inline">
						<h4><?php echo __( 'Size list in queue waiting for cron','litespeed-cache' ); ?></h4>
						<p>
							<?php echo implode( '<br>', $placeholder_summary[ 'queue' ] ); ?>
						</p>
					</div>
					<a href="<?php echo Utility::build_url( Router::ACTION_PLACEHOLDER, Placeholder::TYPE_GENERATE ); ?>" class="button litespeed-btn-success">
						<?php echo __( 'Run Queue Manually', 'litespeed-cache' ); ?>
					</a>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</td>
	</tr>

	<tr>
		<th>
			<?php $id = Base::O_MEDIA_IFRAME_LAZY; ?>
			<?php $this->title( $id ); ?>
		</th>
		<td>
			<?php $this->build_switch( $id ); ?>
			<div class="litespeed-desc">
				<?php echo __( 'Load iframes only when they enter the viewport.', 'litespeed-cache' ); ?>
				<?php echo __( 'This can improve page loading time by reducing initial HTTP requests.', 'litespeed-cache' ); ?>
			</div>
		</td>
	</tr>

	<tr>
		<th>
			<?php $id = Base::O_MEDIA_LAZYJS_INLINE; ?>
			<?php $this->title( $id ); ?>
		</th>
		<td>
			<?php $this->build_switch( $id ); ?>
			<div class="litespeed-desc">
				<?php echo __( 'Include the lazy load image Javascript library inline.', 'litespeed-cache' ); ?>
				<?php echo __( 'This can improve your speed score in services like Pingdom, GTmetrix and PageSpeed.', 'litespeed-cache' ); ?>
				<?php $this->learn_more( 'https://www.litespeedtech.com/support/wiki/doku.php/litespeed_wiki:cache:lscwp:configuration:media#inline_lazy_load_images_library' ); ?>
			</div>
		</td>
	</tr>

</tbody></table>
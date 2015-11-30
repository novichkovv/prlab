<?php
extract( shortcode_atts( array(
	'text'     => '',
	'url'      => '',
	'icon'     => '',
	'el_class' => '',
), $atts ) );
$el_class = $this->getExtraClass( $el_class );
if ( $icon ) {
	$el_class .= ' has-icon';
}
?>
<a <?php echo 'class="btn' . esc_attr( $el_class ) . '"'; ?> href="<?php echo esc_url( $url ); ?>"
                                                             data-hover="<?php echo esc_attr( $text ); ?>">
	<span><?php echo wp_kses( $text, wp_kses_allowed_html( 'post' ) ); ?></span>
		<?php if ( $icon ) { ?><i class="<?php echo esc_attr( $icon ); ?>"></i><?php } ?>
</a>
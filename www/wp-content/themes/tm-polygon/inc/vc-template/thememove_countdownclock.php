<?php
/**
 * Shortcode attributes
 * @var $atts
 * @var $year
 * @var $month
 * @var $day
 * @var $hour
 * @var $minute
 * @var $second
 * @var $type
 * @var $el_class
 * Shortcode class
 * @var $this WPBakeryShortCode_Thememove_Countdownclock
 */
$atts   = vc_map_get_attributes( $this->getShortcode(), $atts );

extract( shortcode_atts( array(
	'year'     => date( "Y" ),
	'month'    => '',
	'day'      => '',
	'hour'     => '',
	'minute'   => '',
	'second'   => '',
	'type'     => 'type01',
	'el_class' => '',
), $atts ) );
$el_class = $this->getExtraClass( $el_class );
?>
<span class="countdown-clock <?php echo esc_attr( $type ) ?> <?php echo esc_attr( $el_class ) ?>"
      data-year="<?php echo esc_attr( $year ) ?>"
      data-month="<?php echo esc_attr( $month ) ?>"
      data-day="<?php echo esc_attr( $day ) ?>"
      data-hour="<?php echo esc_attr( $hour ) ?>"
      data-minute="<?php echo esc_attr( $minute ) ?>"
      data-second="<?php echo esc_attr( $second ) ?>"
      data-type="<?php echo esc_attr( $type ) ?>"></span>
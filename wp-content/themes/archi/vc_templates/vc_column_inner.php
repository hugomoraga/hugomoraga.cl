<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $el_id
 * @var $width
 * @var $css
 * @var $offset
 * @var $animate
 * @var $delay
 * @var $duration
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Column_Inner
 */
$el_class = $width = $el_id = $css = $offset = $animate = $duration = $delay = '';
$output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$col_animate = '';
if($animate == 'none'){
	$col_animate = '';
}elseif ($animate == 'fadeinup') {
	$col_animate = 'wow fadeInUp';
}elseif ($animate == 'fadeindown') {
	$col_animate = 'wow fadeInDown';
}elseif ($animate == 'fadein') {
	$col_animate = 'wow fadeIn';
}elseif ($animate == 'fadeinleft') {
	$col_animate = 'wow fadeInLeft';
}else{
	$col_animate = 'wow fadeInRight';
}

$duration1 = (!empty($duration) ? 'data-wow-duration="'.esc_attr($duration).'s"' : '');
$delay1 = (!empty($delay) ? 'data-wow-delay="'.esc_attr($delay).'s"' : '');

$width = wpb_translateColumnWidthToSpan( $width );
$width = vc_column_offset_class_merge( $offset, $width );

$css_classes = array(
	$this->getExtraClass( $el_class ),
	'wpb_column',
	'vc_column_container',
	$width,
);

if ( vc_shortcode_custom_css_has_property( $css, array(
	'border',
	'background',
) ) ) {
	$css_classes[] = 'vc_col-has-fill';
}

$wrapper_attributes = array();

$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}

$output .= '<div ' . implode( ' ', $wrapper_attributes ) . '>';
$innerColumnClass = 'vc_column-inner ' . esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) );
$output .= '<div class="' . trim( $innerColumnClass ) . '">';
$output .= '<div class="wpb_wrapper ' . esc_attr( $col_animate ) . '" '.$delay1.' '.$duration1.'>';
$output .= wpb_js_remove_wpautop( $content );
$output .= '</div>';
$output .= '</div>';
$output .= '</div>';

echo $output;

<?php
/**
 * List of available hooks
 *
 * @package Hestia
 * @since Hestia 1.1.39
 */
/* Header ( Navigation ) area */
/**
 * Hook just before the header ( navigation ) area
 *
 * HTML context: before `header nav`
 */
function hestia_before_header_trigger() {
	do_action( 'hestia_before_header_hook' );
}
/**
 * Hook just before the header ( navigation ) content
 *
 * HTML context: before `header nav div.container`
 */
function hestia_before_header_content_trigger() {
	do_action( 'hestia_before_header_content_hook' );
}
/**
 * Hook just after the header ( navigation ) content
 *
 * HTML context: after `header nav div.container`
 */
function hestia_after_header_content_trigger() {
	do_action( 'hestia_after_header_content_hook' );
}
/**
 * Hook just after the header ( navigation ) area
 *
 * HTML context: after `header nav`
 */
function hestia_after_header_trigger() {
	do_action( 'hestia_after_header_hook' );
}
/* Footer area */
/**
 * Hook just before the footer area
 *
 * HTML context: before `footer`
 */
function hestia_before_footer_trigger() {
	do_action( 'hestia_before_footer_hook' );
}
/**
 * Hook just before the footer content
 *
 * HTML context: before `footer div.container`
 */
function hestia_before_footer_content_trigger() {
	do_action( 'hestia_before_footer_content_hook' );
}
/**
 * Hook just before the footer widgets area
 *
 * HTML context: before `footer div.hestia-bottom-footer-content`
 */
function hestia_before_footer_widgets_trigger() {
	do_action( 'hestia_before_footer_widgets_hook' );
}
/**
 * Hook just after the footer widgets area
 *
 * HTML context: after `footer div.hestia-bottom-footer-content`
 */
function hestia_after_footer_widgets_trigger() {
	do_action( 'hestia_after_footer_widgets_hook' );
}
/**
 * Hook just after the footer content
 *
 * HTML context: after `footer div.container`
 */
function hestia_after_footer_content_trigger() {
	do_action( 'hestia_after_footer_content_hook' );
}
/**
 * Hook just after the footer area
 *
 * HTML context: after `footer`
 */
function hestia_after_footer_trigger() {
	do_action( 'hestia_after_footer_hook' );
}
/* Big title / Slider section */
/**
 * Hook just before the Big title / Slider section
 *
 * HTML context: before `div#carousel-hestia-generic`
 */
function hestia_before_big_title_section_trigger() {
	do_action( 'hestia_before_big_title_section_hook' );
}
/**
 * Hook just before the Big title / Slider section content
 *
 * HTML context: before `div#carousel-hestia-generic div.container`
 */
function hestia_before_big_title_section_content_trigger() {
	do_action( 'hestia_before_big_title_section_content_hook' );
}
/**
 * Hook just after the Big title / Slider section content
 *
 * HTML context: after `div#carousel-hestia-generic div.container`
 */
function hestia_after_big_title_section_content_trigger() {
	do_action( 'hestia_after_big_title_section_content_hook' );
}
/**
 * Hook just after the Big title / Slider section
 *
 * HTML context: after `div#carousel-hestia-generic`
 */
function hestia_after_big_title_section_trigger() {
	do_action( 'hestia_after_big_title_section_hook' );
}
/* Team section */
/**
 * Hook just before the Team section
 *
 * HTML context: before `section.hestia-team`
 */
function hestia_before_team_section_trigger() {
	do_action( 'hestia_before_team_section_hook' );
}
/**
 * Hook just before the Team section content
 *
 * HTML context: before `section.hestia-team div.container`
 */
function hestia_before_team_section_content_trigger() {
	do_action( 'hestia_before_team_section_content_hook' );
}
/**
 * Hook just after the Team section content
 *
 * HTML context: after `section.hestia-team div.container`
 */
function hestia_after_team_section_content_trigger() {
	do_action( 'hestia_after_team_section_content_hook' );
}
/**
 * Hook just after the Team section
 *
 * HTML context: after `section.hestia-team`
 */
function hestia_after_team_section_trigger() {
	do_action( 'hestia_after_team_section_hook' );
}
/* Features section */
/**
 * Hook just before the Features section
 *
 * HTML context: before `section.hestia-features`
 */
function hestia_before_features_section_trigger() {
	do_action( 'hestia_before_features_section_hook' );
}
/**
 * Hook just before the Features section content
 *
 * HTML context: before `section.hestia-features div.container`
 */
function hestia_before_features_section_content_trigger() {
	do_action( 'hestia_before_features_section_content_hook' );
}
/**
 * Hook just after the Features section content
 *
 * HTML context: after `section.hestia-features div.container`
 */
function hestia_after_features_section_content_trigger() {
	do_action( 'hestia_after_features_section_content_hook' );
}
/**
 * Hook just after the Features section
 *
 * HTML context: after `section.hestia-features`
 */
function hestia_after_features_section_trigger() {
	do_action( 'hestia_after_features_section_hook' );
}
/* Pricing section */
/**
 * Hook just before the Pricing section
 *
 * HTML context: before `section.pricing`
 */
function hestia_before_pricing_section_trigger() {
	do_action( 'hestia_before_pricing_section_hook' );
}
/**
 * Hook just before the Pricing section content
 *
 * HTML context: before `section.pricing div.container`
 */
function hestia_before_pricing_section_content_trigger() {
	do_action( 'hestia_before_pricing_section_content_hook' );
}
/**
 * Hook just after the Pricing section content
 *
 * HTML context: after `section.pricing div.container`
 */
function hestia_after_pricing_section_content_trigger() {
	do_action( 'hestia_after_pricing_section_content_hook' );
}
/**
 * Hook just after the Pricing section
 *
 * HTML context: after `section.pricing`
 */
function hestia_after_pricing_section_trigger() {
	do_action( 'hestia_after_pricing_section_hook' );
}
/* About section */
/**
 * Hook just before the About section
 *
 * HTML context: before `section.hestia-about`
 */
function hestia_before_about_section_trigger() {
	do_action( 'hestia_before_about_section_hook' );
}
/**
 * Hook just after the About section
 *
 * HTML context: after `section.hestia-about`
 */
function hestia_after_about_section_trigger() {
	do_action( 'hestia_after_about_section_hook' );
}
/* Shop section */
/**
 * Hook just before the Shop section
 *
 * HTML context: before `section.products`
 */
function hestia_before_shop_section_trigger() {
	do_action( 'hestia_before_shop_section_hook' );
}
/**
 * Hook just before the Shop section content
 *
 * HTML context: before `section.products div.container`
 */
function hestia_before_shop_section_content_trigger() {
	do_action( 'hestia_before_shop_section_content_hook' );
}
/**
 * Hook just after the Shop section content
 *
 * HTML context: after `section.products div.container`
 */
function hestia_after_shop_section_content_trigger() {
	do_action( 'hestia_after_shop_section_content_hook' );
}
/**
 * Hook just after the Shop section
 *
 * HTML context: after `section.products`
 */
function hestia_after_shop_section_trigger() {
	do_action( 'hestia_after_shop_section_hook' );
}
/* Testimonials section */
/**
 * Hook just before the Testimonials section
 *
 * HTML context: before `section.hestia-testimonials`
 */
function hestia_before_testimonials_section_trigger() {
	do_action( 'hestia_before_testimonials_section_hook' );
}
/**
 * Hook just before the Testimonials section content
 *
 * HTML context: before `section.hestia-testimonials div.container`
 */
function hestia_before_testimonials_section_content_trigger() {
	do_action( 'hestia_before_testimonials_section_content_hook' );
}
/**
 * Hook just after the Testimonials section content
 *
 * HTML context: after `section.hestia-testimonials div.container`
 */
function hestia_after_testimonials_section_content_trigger() {
	do_action( 'hestia_after_testimonials_section_content_hook' );
}
/**
 * Hook just after the Testimonials section
 *
 * HTML context: after `section.hestia-testimonials`
 */
function hestia_after_testimonials_section_trigger() {
	do_action( 'hestia_after_testimonials_section_hook' );
}
/* Subscribe section */
/**
 * Hook just before the Subscribe section
 *
 * HTML context: before `section.subscribe-line`
 */
function hestia_before_subscribe_section_trigger() {
	do_action( 'hestia_before_subscribe_section_hook' );
}
/**
 * Hook just before the Subscribe section content
 *
 * HTML context: before `section.subscribe-line div.container`
 */
function hestia_before_subscribe_section_content_trigger() {
	do_action( 'hestia_before_subscribe_section_content_hook' );
}
/**
 * Hook just after the Subscribe section content
 *
 * HTML context: after `section.subscribe-line div.container`
 */
function hestia_after_subscribe_section_content_trigger() {
	do_action( 'hestia_after_subscribe_section_content_hook' );
}
/**
 * Hook just after the Subscribe section
 *
 * HTML context: after `section.subscribe-line`
 */
function hestia_after_subscribe_section_trigger() {
	do_action( 'hestia_after_subscribe_section_hook' );
}
/* Blog section */
/**
 * Hook just before the Blog section
 *
 * HTML context: before `section.hestia-blogs`
 */
function hestia_before_blog_section_trigger() {
	do_action( 'hestia_before_blog_section_hook' );
}
/**
 * Hook just before the Blog section content
 *
 * HTML context: before `section.hestia-blogs div.container`
 */
function hestia_before_blog_section_content_trigger() {
	do_action( 'hestia_before_blog_section_content_hook' );
}
/**
 * Hook just after the Blog section content
 *
 * HTML context: after `section.hestia-blogs div.container`
 */
function hestia_after_blog_section_content_trigger() {
	do_action( 'hestia_after_blog_section_content_hook' );
}
/**
 * Hook just after the Blog section
 *
 * HTML context: after `section.hestia-blogs`
 */
function hestia_after_blog_section_trigger() {
	do_action( 'hestia_after_blog_section_hook' );
}
/* Contact section */
/**
 * Hook just before the Contact section
 *
 * HTML context: before `section.contactus`
 */
function hestia_before_contact_section_trigger() {
	do_action( 'hestia_before_contact_section_hook' );
}
/**
 * Hook just before the Contact section content
 *
 * HTML context: before `section.contactus div.container`
 */
function hestia_before_contact_section_content_trigger() {
	do_action( 'hestia_before_contact_section_content_hook' );
}
/**
 * Hook just after the Contact section content
 *
 * HTML context: after `section.contactus div.container`
 */
function hestia_after_contact_section_content_trigger() {
	do_action( 'hestia_after_contact_section_content_hook' );
}
/**
 * Hook just after the Contact section
 *
 * HTML context: after `section.contactus`
 */
function hestia_after_contact_section_trigger() {
	do_action( 'hestia_after_contact_section_hook' );
}
/* Portfolio section */
/**
 * Hook just before the Portfolio section
 *
 * HTML context: before `section.hestia-work`
 */
function hestia_before_portfolio_section_trigger() {
	do_action( 'hestia_before_portfolio_section_hook' );
}
/**
 * Hook just before the Portfolio section content
 *
 * HTML context: before `section.hestia-work div.container`
 */
function hestia_before_portfolio_section_content_trigger() {
	do_action( 'hestia_before_portfolio_section_content_hook' );
}
/**
 * Hook just after the Portfolio section content
 *
 * HTML context: after `section.hestia-work div.container`
 */
function hestia_after_portfolio_section_content_trigger() {
	do_action( 'hestia_after_portfolio_section_content_hook' );
}
/**
 * Hook just after the Portfolio section
 *
 * HTML context: after `section.hestia-work`
 */
function hestia_after_portfolio_section_trigger() {
	do_action( 'hestia_after_portfolio_section_hook' );
}

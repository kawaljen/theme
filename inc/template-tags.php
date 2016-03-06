<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package MadeInShoreditch
 */

if ( ! function_exists( 'madeinshoreditch_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function madeinshoreditch_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( '%s', 'post date', 'madeinshoreditch' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);

	$byline = sprintf(
		esc_html_x( '%s', 'post author', 'madeinshoreditch' ),
		'<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
	);
	$cat =  getParentCategory();
	$categname = sprintf(
		esc_html_x( '%s', 'post category', 'madeinshoreditch' ),
		'<a href="' . esc_url( $cat['url'] ) . '">' . esc_html( $cat['categname'] ) . '</a>'
	);

	echo '<div class="meta-post"><span> ' . $byline . '</span><span>' . $posted_on . '</span><span>' . $categname . '</span></div>'; // WPCS: XSS OK.

}
endif;

if ( ! function_exists( 'madeinshoreditch_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function madeinshoreditch_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'madeinshoreditch' ) );
		if ( $categories_list && madeinshoreditch_categorized_blog() ) {
			printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'madeinshoreditch' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'madeinshoreditch' ) );
		if ( $tags_list ) {
			printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'madeinshoreditch' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}

	if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) ) {
		echo '<span class="comments-link">';
		comments_popup_link( esc_html__( 'Leave a comment', 'madeinshoreditch' ), esc_html__( '1 Comment', 'madeinshoreditch' ), esc_html__( '% Comments', 'madeinshoreditch' ) );
		echo '</span>';
	}

	edit_post_link( esc_html__( 'Edit', 'madeinshoreditch' ), '<span class="edit-link">', '</span>' );
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function madeinshoreditch_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'madeinshoreditch_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'madeinshoreditch_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so madeinshoreditch_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so madeinshoreditch_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in madeinshoreditch_categorized_blog.
 */
function madeinshoreditch_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'madeinshoreditch_categories' );
}
add_action( 'edit_category', 'madeinshoreditch_category_transient_flusher' );
add_action( 'save_post',     'madeinshoreditch_category_transient_flusher' );

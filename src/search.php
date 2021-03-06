<?php
/**
 * The template for displaying search results pages.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package _msp
 */

get_template_part( 'timber' );

$templates = [ 'search.twig', 'archive.twig', 'index.twig' ];
$context = Timber::get_context();

$context[ 'title' ] = 'Search results for ' . get_search_query();
$context[ 'posts' ] = Timber::get_posts();
$context[ 'pagination' ] = Timber::get_pagination();

Timber::render( $templates, $context, TWIG_CACHE_TIMEOUT );

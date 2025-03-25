# WP-Date-and-Author-Shortcode
A simple date and custom author name shortcode for Wordpress 

=== Author & Date shortcode ===
Tags: author, date, shortcode
Contributors: SearchEngineOp Web Design & SEO
Author URL: https://searchengineop.com
Requires at least: 4.6
Tested up to: 6.8
Stable tag: 1.2
Requires PHP: 7.1+
License: GNU General Public License v3.0
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html

Add an author or date to a page or article with a shortcode. [post_author] and [post_published]

== Features ==
* ✍️ Allows to add a shortcode [post_published] to show the date a page or post was written.
* 👤 Allows to add a shortcode [post_author] to show the author of a page or post.

== Screenshots ==

== Changelog ==
= 1.1 =
* 2024-02-28
* Changed $post_id = $post->ID to $page_id = get_queried_object_id()
* Updated $post_id references to $page_id

= 1.0 =
* 2024-01-10
* Created plugin

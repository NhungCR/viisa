=== WP News and Scrolling Widgets  ===
Contributors: wponlinesupport, anoopranawat, pratik-jain
Tags: wponlinesupport, wordpress news plugin, news website, main news page scrolling , wordpress vertical news plugin widget, wordpress horizontal news plugin widget , Free scrolling news wordpress plugin, Free scrolling news widget wordpress plugin, WordPress set post or page as news, WordPress dynamic news, news, latest news, custom post type, cpt, widget, vertical news scrolling widget, news widget
Requires at least: 4.0
Tested up to: 5.3
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A quick, easy way to add an News custom post type, News widget, vertical scrolling news widget to Wordpress. Also work with Gutenberg shortcode block.

== Description ==

Dynamic & easy-to-use WP news and Scrolling Widget. 

Website’s performance is the most significant thing for any online business owner. WP News and Scrolling Widget is one of the ways to effectively increase the dynamics of the online web space with news archives, scrolling news widgets and thumbnails. Add, manage and remove the news section on your CMS website.  

View [DEMO](http://demo.wponlinesupport.com/sp-news/) | [PRO DEMO and Features](https://www.wponlinesupport.com/wp-plugin/sp-news-and-scrolling-widgets/) for additional information.

View [Masonry Add-on](https://www.wponlinesupport.com/wordpress-plugin-addon/masonry-addon-wp-news-widgets/) with 12 designs and 7 effects.

Also work with Gutenberg shortcode block.

= Important Note For How to Install =

> Please make sure that Permalink link should not be "/news" Otherwise all your news will go to archive page. You can give it other name like "/ournews, /latestnews etc"**  

**As this pluign is created with custom post type, you can now add Gutenberg  editor support for the plugin for writing the news post. For that we have added apply_filters. For more details please check plugin FAQ section.**

<code>apply_filters( 'sp_news_registered_post_type_args', $news_args ); </code>

**Now you can Display news post with the help of short code :** 

<code> [sp_news] </code>

**Display News with Grid:**

<code>[sp_news grid="2"] </code>

**Also you can Display the news post with Multiple categories wise** 

<code>Sports news : 
[sp_news category="category_id"]
Arts news 
[sp_news category="category_id"]
</code>

**Complete shortcode example:**

<code>[sp_news limit="10" category="category_id" grid="2"  show_content="true" show_full_content="true" show_category_name="true" show_date="false" content_words_limit="30" ]</code>

**Comments for the news**

**Added Widget Options like Show News date, Show News Categories, Select News Categories.**

**Template code :**

 <code><?php echo do_shortcode('[sp_news]'); ?></code>

[Check video](https://wordpress.org/plugins/sp-news-and-widget/installation/) How to install. 

= Following are News Parameters: =

* **limit :** [sp_news limit="10"] (Display latest 10 news and then pagination).
* **category :**  [sp_news category="category_id"] (Display News categories wise).
* **pagination_type:** [sp_news pagination_type="numeric"] (Select the pagination type for News ie "numeric" OR "next-prev" ).
* **grid :** [sp_news grid="2"] OR [sp_news grid="list"] (Display News in Grid formats. To display News in list view, Use grid="list").
* **show_date :** [sp_news show_date="false"] (Display News date OR not. By default value is "True". Options are "ture OR false")
* **show_content :** [sp_news show_content="true" ] (Display News Short content OR not. By default value is "True". Options are "ture OR false").
* **show_full_content :** [sp_news show_full_content="true"] (Display Full news content on main page if you do not want word limit. By default value is "false")
* **show_category_name :** [sp_news show_category_name="true" ] (Display News category name OR not. By default value is "True". Options are "ture OR false").
* **content_words_limit :** [sp_news content_words_limit="30" ] (Control News short content Words limt. By default limit is 20 words).

The plugin adds a News tab to your admin menu, which allows you to enter news items just as you would regular posts.

If you are getting any kind of problum with news page means your are not able to see all news items then please remodify your permalinks Structure for example 
first select "Default" and save then again select "Custom Structure "  and save. 

= The Plugin Features (latest added) : =
* Added List view <code>[sp_news grid="list"] </code>
* Added translation in German, French (France), Polish languages (Beta)
* Widget News Scrolling setting page removed and added setting in widget only.
* Added Widget Options like Show News date, Show News Categories, Select News Categories.
* Category wise News <code> Sports news [sp_news category="category_id"] </code>
* Display News with Grid <code>[sp_news grid="2"]</code> and List <code>[sp_news grid="list"]</code>
* Added pagination [sp_news limit="10"]
* Added new shortcode parameters ie **show_content, show_category_name and content_words_limit**
* Added new shortcode parameters **show_date**
* Added shortcode parameter **show_full_content**

= PRO Features : =
> <strong>Premium Version</strong><br>
>
> * Added 120+ stunning and cool layouts.
> * 6 shortcodes with various parameters.
> * <code>[sp_news]</code> - News Grid View Shortcode
> * <code>[sp_news_slider]</code> - News Slider View Shortcode
> * <code>[wpnw_news_list]</code> - News List View Shortcode
> * <code>[wpnw_gridbox]</code> - News Gridbox View Shortcode
> * <code>[wpnw_gridbox_slider]</code> - News Gridbox Slider View Shortcode
> * <code>[wpnw_news_ticker]</code> - News Ticker Shortcode
> * 50 Designs for News Grid Layout.
> * 45 Designs for News Slider/Carousel Layout.
> * 8 Designs for News List View.
> * 13 Designs News Grid Box.
> * 8 Designs News Grid Box Slider.
> * WPBakery Page Builder Support
> * News Ticker.
> * 7 different types of Latest News widgets.
> * News display with categories.
> * Popular grid slider feature.
> * Custom Read More link for News Post.
> * Create a News Page OR News website.
> * Drag & Drop feature to display News post in your desired order and other 6 types of order parameter.
> * 'Publicize' support with Jetpack to publish your News post on your social network.
> * 100% Multilanguage.
> * Template code : 
> <code><?php echo do_shortcode('[sp_news]'); ?> </code> 
> <code> <?php echo do_shortcode('[sp_news_slider]'); ?> </code>
> <code><?php echo do_shortcode('[wpnw_news_list]'); ?> </code> 
> <code> <?php echo do_shortcode('[wpnw_gridbox]'); ?> </code> 
> <code><?php echo do_shortcode('[wpnw_gridbox_slider]'); ?> </code> 
> <code> <?php echo do_shortcode('[wpnw_news_ticker]'); ?> </code>  
>
> View [PRO DEMO and Features](https://www.wponlinesupport.com/wp-plugin/sp-news-and-scrolling-widgets/) for additional information.
>
> View [Masonry Add-on](http://wponlinesupport.com/wordpress-plugin-addon/masonry-addon-wp-news-widgets/) with 12 designs and 7 effects.
>

= How to install : =
[youtube https://www.youtube.com/watch?v=07IRBn1oXrU] 

= Privacy & Policy =
* We have also opt-in e-mail selection , once you download the plugin , so that we can inform you and nurture you about products and its features.

== Installation ==

1. Upload the 'sp-news-and-widget' folder to the '/wp-content/plugins/' directory.
1. Activate the SP News plugin through the 'Plugins' menu in WordPress.
1. Add and manage news items on your site by clicking on the  'News' tab that appears in your admin menu.
1. Create a page with the any name and paste this short code  <code> [sp_news] </code>.
 
= How to install : =
[youtube https://www.youtube.com/watch?v=07IRBn1oXrU]  



== Frequently Asked Questions ==

= How to enable/disable Gutenberg editor support for News Posts? =

Just add this code in your theme function.php file to enable/disable Gutenberg editor support for  News Posts :

<code>
function prefix_gutenberg_editor_support($news_args){
 $news_args['show_in_rest'] = false; 
  return $news_args;	
}
add_filter( 'sp_news_registered_post_type_args', 'prefix_gutenberg_editor_support' );
</code>

= Do I need to update my permalinks after I activate this plugin? =

No, not usually. But if you are geting "/news" page OR 404 error on single news then please  update your permalinks to Custom Structure.   

= I am getting 404 page in news detail page? =

If you are getting this error, please go to Setting -->  Permalinks and under Permalinks Setting select "Plain" radio button and save. Now again go to "Post name" radio button and save again. This will fix your issue. 

= Are there shortcodes for news items? =

Yse  <code> [sp_news] </code>

== Screenshots ==

1. Display News with grid view
2. A complate view with comments
3. Display News with List view
4. Add new news
5. Single News view
6. Widgets
7. Widgets Options
8. Also work with Gutenberg shortcode block.

== Changelog ==

= 4.2 (05, June 2019) =
* [*] Fixed some css related issues for pagination.
* [*] Updated plugin document link.
* [*] Updated plugin demo link.

= 4.1.4 (08, Feb 2019) =
* [*] Minor change in Opt-in flow.

= 4.1.3 (20, Dec 2018) =
* [*] Fixed the issue where custom taxonomies was not showing after giving Gutenberg support for custom news post. Thanks @sabkor for showing us this issue.

= 4.1.2 (18, Dec 2018) =
* [*] Update Opt-in flow.

= 4.1.1 (13-12-2018) =
* [+] If you are using WordPress 5.0 OR WordPress 5.0 plus clasic editor pluign, we have added `show_in_rest=> true` to enable the Gutenberg Editor support for News Posts or Not. For more details please check plugin FAQ section.

= 4.1 (06-12-2018) =
* [*] Tested with WordPress 5.0 and Gutenberg.
* [*] Fixed some CSS issues.

= 4.0.3 (27, Jul 2018) =
* [*] Fix - Added missing translated string.
* [*] Fix - Some warnings with widgets while using with WordPress customizer.
* [*] Tweak - Used 'wp_reset_postdata' instead of 'wp_reset_query'.

= 4.0.2 (04 June 2018) =
* [*] Follow some WordPress Detailed Plugin Guidelines.

= 4.0.1 (07 May 2018) =
* [*] Taken batter care in list design if featured image not added.
* [*] Fixed grid-1 issues, where grid was loading actual image path.
* [*] Fixed some design issues

= 4.0 (30 March 2018) =
* [*] Fixed some design issues
* [*] Modified plugin file structure 
* [*] Tested with WordPress 4.9.4

= 3.3.4 (29 July 2017) =
* [+] Added prefix to some css generic name classes to avoid the conflict with theme CSS or third party plugin.

= 3.3.2 (19 June 2017) =
* [*] Resolved displaying multiple scrolling widget issue.

= 3.3.1 (19 May 2017) =
* [*] Resolved WPML language translate issue while news is being displayed with taxonomy.
* [*] Updated 'How it Work' page.
* [*] Resolved post status issue. Now only 'Published' post will be displayed.

= 3.3 (15/02/2017) =
* [+] Added new shortcode parameter "pagination_type" (Select the pagination type for News ie "numeric" OR "next-prev" ).

= 3.2.11 (09/12/2016) =
* [*] Resolved conflict when 'WP News and Widget - Masonry Layout' plugin is activated.

= 3.2.10 (28/10/2016) =
* [+] Added "How it Work" tab.
* [-] Removed Pro design tab.
* Fixed some css issue.

= 3.2.9 (10/17/2016) =
* [+] Added design to readmore button and pagination.
* [+] Added design for widgets section.
* Fixed some css issue.

= 3.2.8 =
* Fixed image display issue.
* Fixed some css issue.
* Fuxed widget with image issue.

= 3.2.7 =
* Added excerpt functionality in post description.
* Resolved display post content issue.

= 3.2.6 =
* Fixed some css issues
* Updated PRO plugin design page.

= 3.2.5 =
* Fixed some css issues.

= 3.2.4 =
* Added translation in German, French (France), Polish languages (Beta)
* Fixed some bug
* Added 2 new design for pro version

= 3.2.3 =
* Added textdomain
* Widget scrolling setting page renoved and added setting in widget only.
* Fixed some bug

= 3.2.2 =
* Added Pro version
* Fixed some bugs

= 3.2.1 =
* Added new shortcode parameters show_date.
* Fixed some bugs.

= 3.2 =
* Widget Options like Show News date, Show News Categories, Select News Categories.

= 3.1.1 =
* Solved categories bug

= 3.1 =
* Added new shortcode parameters ie show_content, show_category_name and content_words_limit
* Fixed some bug

= 3.0 =
* Display News with List view
* Display News with Grid [sp_news grid="2"]
* Added pagination [sp_news limit="10"]

= 2.2.1 =
* fixed the bug : Shows news on top of static page 

= 2.2 =
* Call the news post with shortcode
* Call the news post with category wise

= 2.1 =
* Scroll main page news
* Setting page for enable or disable main page news scrolling
* Setting page for main news page vertical and horizontal news scrolling

= 2.0 =
* Added Vertical and horizontal news scrolling widget with setting page
* New UI designs
* Admin setting page

= 1.0 =
* Initial release.
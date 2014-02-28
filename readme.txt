=== WordPress Facebook Like Ranking ===
Contributors: MankinJp
Donate link: 
Tags: plugin, facebook, like, ranking, popular
Requires at least: 3.0
Tested up to: 3.8
Stable tag: 1.3.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

With this plugin, you can use a your posts' ranking rated by the number of Facebook like.

== Description ==

= Features =

* **A HAPPY NEW YEAR!!**

* **Making a ranking rated by the number of Facebook like**. You can make and use a ranking rated by the number of Facebook like width this plugin. It's good for visitors.

* **Setting in detail**. You can decide how often it will update the raning information and how many posts it will check when it updates the information.

* **Using as a widget**. You can put on this as a widget.

* **Category filter**. You can create rankings which have only specific category posts.

== Installation ==

1. Download the plugin and extract its contents.
2. Upload `wp-facebook-like-ranking` to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu in WordPress.
4. Create a ranking by pushing a create button through the 'Settings->WP Facebook Like Ranking' menu in WordPres.
5. Configure items.
6. 2 ways<br />
・As a widget:Go to the widget page and put on this widget.<br />
・With a function:Place `<?php if (function_exists('get_like_ranking')) get_like_ranking (); ?>` in your templates.

That's it!


1. プラグインをダウンロード、解凍します。
2. `/wp-content/plugins/`ディレクトリにプラグインをアップロードします。
3. プラグインを有効化します。
4. 'Settings->WP Facebook Like Ranking'でCreateボタンを押して最初のランキングを生成します。
5. 'Settings->WP Facebook Like Ranking'で細かい設定を行います。
6. 最後は、2通りのやり方があります。<br />
ウィジェットとして使う場合：ウィジェットページで設定できます。<br />
関数を直接書く場合：`<?php if (function_exists('get_like_ranking')) get_like_ranking (); ?>`を、ランキングを出したいところにコピペします。

完了！

・more about a function

`get_like_ranking (int $post_number = 5, bool $post_count = true, array $thumbnail_size = null, int $category_id = null, $shorten_words = null)`

ex1)

`get_like_ranking (10, false, array(20, 20))`

It shows 10 posts and 20px × 20px thumbnail picture without expressing like count.

ex2)

`get_like_ranking (10, false, null, 1)`

It shows 10 posts of a category which has id 1.

== Frequently asked questions ==

= I need help with your plugin! What should I do? =

 If you're having problems with the plugin, my suggestion would be try disabling all other plugins.

== Screenshots ==

1. A example of using WordPress Facebook Like Ranking.
2. WordPress Facebook Like Ranking Stats panel.


== Changelog ==
= 1.3.0 =
* Implementing Widget
= 1.2.0 =
* Multilingualization (Japanese, English)
= 1.13 =
* Tiny update
= 1.121 =
* Tiny updates
= 1.12 =
* Adding title properties to a elements.
= 1.11 =
* Just add a title property
= 1.1 = 
* Add a category filter.

= 1.05 = 
* Able to recreate the ranking

= 1.04 =
* Change how to create ranking

= 1.03 =
* Fix bug

= 1.02 =
* Make thumbnail image clickable

= 1.01 =
* Fix bug

= 1.0 =
* Public release

== Upgrade notice ==

You better use Wordpress 3.1 at least.

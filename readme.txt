=== WordPress Facebook Like Ranking ===
Contributors: mankinjp
Donate link: https://www.patreon.com/taishikato
Tags: plugin, facebook, like, ranking, popular
Requires at least: 3.0
Requires PHP: 5.6
Tested up to: 5.2
Stable tag: 2.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

With this plugin, you can use a your posts' ranking rated by the number of Facebook like.

== Description ==

= Features =

* **Making a ranking rated by the number of Facebook like**. You can make and use a ranking rated by the number of Facebook like width this plugin. It's good for visitors.

* **Setting in detail**. You can decide how often it will update the raning information and how many posts it will check when it updates the information.

* **Using as a widget**. You can put on this as a widget.

* **Category filter**. You can create rankings which have only specific category posts.

== Installation ==

## How to use

### Create FB App
Here  
https://developers.facebook.com/

### Get FB App Token

You can get that here  
https://developers.facebook.com/tools/explorer/

### Set your FB App Token
You can see the setting of this plugin when you install it. Click it.  
<img width="318" alt="wp-fb-like-ranking-setting-image" src="https://user-images.githubusercontent.com/980588/57820073-078ffd00-7740-11e9-818b-6f555e3a0461.png">

You will see the setting page like below.  
Put your token in the form and hit the save button.  
<img width="514" alt="WPFBSETTINGPAGE-2" src="https://user-images.githubusercontent.com/980588/57820398-791c7b00-7741-11e9-9be7-7733f605626e.png">

### Generate your ranking
All you need to do is just hit the "Create or Recreate" button.  
<img width="514" alt="WPFBSETTINGPAGE-2" src="https://user-images.githubusercontent.com/980588/57820556-298a7f00-7742-11e9-88d0-ba52a99d93e4.png">

### 🛠 Put code (or you can use wdget)
Put the code below whereever you would like to make the raking show up.
```php
<?php if (function_exists('get_like_ranking')) get_like_ranking(); ?>
```

There are 6 parameters for this method.
```php
get_like_ranking(int $post_number = 5, bool $post_count = true , array $thumbnail = null, $category_id = null, $shorten_words = null, $custom_post_name = null)
```

Ex)  
In this case, There should be 10 articles which are "Movie" custom post type on your raking.  
Second argument is `false`, thus like count of each artile does **not** show up.  
Thumbnails are **15px** x **15px**.  
If the title og the article is over 25 characters, it's gonne be compressed to 25 characters.
```php
<?php if (function_exists('get_like_ranking')) get_like_ranking(10, false, array(15, 15), null, 25, "movie"); ?>
```

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
= 2.0.0 = 
* change the Facebook API
= 1.4.0 = 
* fix bug
= 1.3.0 =
* Implementing Widget
= 1.2.0 =
* Multilingualization (Japanese, English)
= 1.13 =
* Tiny update
= 1.121 =
* Tiny updates
= 1.12 =
* Adding title properties to elements.
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

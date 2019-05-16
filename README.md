# WordPress Facebook Like Ranking 😸😇😈

With this plugin, you can create a your posts' ranking sorted by the number of Facebook like.

Ex）  
![screenshot-1](https://user-images.githubusercontent.com/980588/57820677-9dc52280-7742-11e9-991d-e488a601f83d.png)

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

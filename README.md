<h2>WordPress Facebook Like Ranking</h2>

Facebookのいいね数に基づいたブログ内の記事のランキングを表示するWordPressプラグインです。

使用例）btrax（ビートラックス）という企業のサイドバーです。
<a href="http://blog.btrax.com/jp/2014/10/08/post-jpn7-tokyo/" target="_blank">freshtrax | btrax スタッフブログ</a>

<h2>使い方</h2>

ランキングを表示したい場所に以下のコードを書きます。デフォルトでは5つの記事が表示されます。


<code><?php if (function_exists('get_like_ranking')) get_like_ranking (); ?></code>



関数には最大6つの引数を与えることが出来ます。

<code>get_like_ranking (int $post_number = 5, bool $post_count = true , array $thumbnail = null, $category_id = null, $shorten_words = null, $custom_post_name = null)</code>

<strong>例)</strong>

この場合、Movieというカスタム投稿タイプ名の10つの記事が表示されます。2つ目の引数は"false"なのでそれぞれの記事のいいね数は表示されません。15px × 15pxのサムネイルが表示されます。記事タイトルが25文字以上の場合、25文字に短縮されます。

<code><?php if (function_exists('get_like_ranking')) get_like_ranking (10, false, array(15, 15), null, 25, "movie"); ?></code>



このプラグインをインストールすると、設定の項目に「WP Facebook Like Ranking」が追加されるので、そこからランキングの更新頻度等、細かい設定を行ってください。

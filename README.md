<h2>WordPress Facebook Like Ranking</h2>

Facebookのいいね数に基づいたブログ内の記事のランキングを表示するWordPressプラグインです。

僕のブログでも使用していますのでどのように表示されるのか気になる方は見てみてください。
<a href="http://taishikato.com/blog/" target="_blank">ブログ</a>

<h2>使い方</h2>

ランキングを表示したい場所に以下のコードを書きます。デフォルトでは5つの記事が表示されます。


<code><?php if (function_exists('get_like_ranking')) get_like_ranking (); ?></code>



関数には２つの引数を与えることが出来ます。

<code>get_like_ranking (int $post_number = 5, bool $post_count = true , array $thumbnail = null)</code>

<strong>例)</strong>

この場合、10つの記事が表示されます。2つ目の引数は"false"なのでそれぞれの記事のいいね数は表示されません。15px × 15pxのサムネイルが表示されます。

<code><?php if (function_exists('get_like_ranking')) get_like_ranking (10, false, array(15, 15); ?></code>



このプラグインをインストールすると、設定の項目に「WP Facebook Like Ranking」が追加されるので、そこからランキングの更新頻度等、細かい設定を行ってください。
設定内容は2つしかないのですぐに終わります。

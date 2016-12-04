<?php
/**
 * Widget
 */
add_action(
	'widgets_init',
	create_function('', 'return register_widget("WpFblikeRankingWidget");')
);

class WpFblikeRankingWidget extends WP_Widget  {

	function __construct() {
		$widget_ops = array('description' => __('With this plugin, you can use a your posts&#8217; ranking rated by the number of Facebook like.', 'wp-facebook-like-ranking'));
		// parent::__construct('pages', __('Pages'), $widget_ops);
		$this->WP_Widget('wp-facebook-like-ranking', __('WordPress Facebook Like Ranking', 'wp-facebook-like-ranking'), $widget_ops);
	}

  public function form($par) {
    $title = (isset($par['title']) && $par['title']) ? $par['title'] : '';
    $show_up_to = (isset($par['show_up_to']) && $par['show_up_to']) ? mb_convert_kana($par['show_up_to'], 'n') : 5;
    $show_the_like_count = (isset($par['show_the_like_count']) && $par['show_the_like_count']) ? true : false;
    $update_post = (isset($par['updatePostNumber']) && $par['updatePostNumber']) ? $par['updatePostNumber'] : '';
    $shorten_words = (isset($par['shorten']) && $par['shorten']) ? mb_convert_kana($par['shorten'], 'n') : '';
    $thumb_width = (isset($par['thumb_width']) && $par['thumb_width']) ? mb_convert_kana($par['thumb_width'], 'n') : '';
    $thumb_height = (isset($par['thumb_height']) && $par['thumb_height']) ? mb_convert_kana($par['thumb_height'], 'n') : '';
    $cat_id = (isset($par['cat_id']) && $par['cat_id']) ? mb_convert_kana($par['cat_id'], 'n') : '';
    $custom_post_name = (isset($par['custom_post_name']) && $par['custom_post_name']) ? mb_convert_kana($par['custom_post_name'], 'n') : '';

    ?>

    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', 'wp-facebook-like-ranking'); ?></label><br />
      <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo trim(htmlentities($title, ENT_QUOTES, 'UTF-8')); ?>" >
    </p>

    <fieldset style="border: 1px solid #333;padding: 5px;margin-bottom: 5px;">

    <legend><?php _e('Setting', 'wp-facebook-like-ranking'); ?></legend>

    <p>
      <label for="<?php echo $this->get_field_id('show_up_to'); ?>"><?php _e('Show Up To:', 'wp-facebook-like-ranking'); ?></label><br />
      <input id="<?php echo $this->get_field_id('show_up_to'); ?>" name="<?php echo $this->get_field_name('show_up_to'); ?>" value="<?php echo trim(htmlentities($show_up_to, ENT_QUOTES, 'UTF-8')); ?>" style="width: 50px;" > posts
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('show_the_like_count'); ?>"><?php _e('Show The Like Count:', 'wp-facebook-like-ranking'); ?></label><br />
      <input type="checkbox" <?php if(!empty($show_the_like_count)) echo 'checked'; ?> id="<?php echo $this->get_field_id('show_the_like_count'); ?>" name="<?php echo $this->get_field_name('show_the_like_count'); ?>" value=1 >
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('shorten'); ?>"><?php _e('Shorten Title To:', 'wp-facebook-like-ranking'); ?></label><br />
      <input id="<?php echo $this->get_field_id('shorten'); ?>" name="<?php echo $this->get_field_name('shorten'); ?>" value="<?php echo trim(htmlentities($shorten_words, ENT_QUOTES, 'UTF-8')); ?>" style="width: 50px;" >
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('cat_id'); ?>"><?php _e('Category ID:', 'wp-facebook-like-ranking'); ?></label><br />
      <input id="<?php echo $this->get_field_id('cat_id'); ?>" name="<?php echo $this->get_field_name('cat_id'); ?>" value="<?php echo trim(htmlentities($cat_id, ENT_QUOTES, 'UTF-8')); ?>" style="width: 35px;" >
    </p>

    <p>
      <p><?php _e('Thumbnail Setting', 'wp-facebook-like-ranking'); ?></p>

      <label for="<?php echo $this->get_field_id('thumb_width'); ?>"><?php _e('Width:', 'wp-facebook-like-ranking'); ?></label>
      <input id="<?php echo $this->get_field_id('thumb_width'); ?>" name="<?php echo $this->get_field_name('thumb_width'); ?>" value="<?php echo trim(htmlentities($thumb_width, ENT_QUOTES, 'UTF-8')); ?>" style="width: 50px;" >

      <br />

      <label for="<?php echo $this->get_field_id('thumb_height'); ?>"><?php _e('Height:', 'wp-facebook-like-ranking'); ?></label>
      <input id="<?php echo $this->get_field_id('thumb_height'); ?>" name="<?php echo $this->get_field_name('thumb_height'); ?>" value="<?php echo trim(htmlentities($thumb_height, ENT_QUOTES, 'UTF-8')); ?>" style="width: 50px;" >
    </p>

    <p>
      <p><?php _e('Custom Post Type Name:', 'wp-facebook-like-ranking'); ?></p>
      <input id="<?php echo $this->get_field_id('custom_post_name'); ?>" name="<?php echo $this->get_field_name('custom_post_name'); ?>" value="<?php echo trim(htmlentities($custom_post_name, ENT_QUOTES, 'UTF-8')); ?>" >
    </p>

    </fieldset>

    <?php
  }

  public function widget($args, $par) {
    echo $args['before_widget'];
    echo $args['before_title'];
    echo trim(htmlentities($par['title'], ENT_QUOTES, 'UTF-8'));
    echo $args['after_title'];
    if (function_exists('get_like_ranking')) {
      $show_up_to = (isset($par['show_up_to']) && $par['show_up_to']) ? mb_convert_kana($par['show_up_to'], 'n') : 5;
      $show_the_like_count = (isset($par['show_the_like_count']) && $par['show_the_like_count']) ? true : false;
      $thumb_width = (isset($par['thumb_width']) && $par['thumb_width']) ? mb_convert_kana($par['thumb_width'], 'n') : '';
      $thumb_height = (isset($par['thumb_height']) && $par['thumb_height']) ? mb_convert_kana($par['thumb_height'], 'n') : '';
      $shorten_words = (isset($par['shorten']) && $par['shorten']) ? mb_convert_kana($par['shorten'], 'n') : null;
      $cat_id = (isset($par['cat_id'])) ? mb_convert_kana($par['cat_id'], 'n') : null;
      $thumb_data = (empty($thumb_width) AND empty($thumb_height)) ? null : array($thumb_width, $thumb_height);
      $custom_post_name = (isset($par['custom_post_name'])) ? mb_convert_kana($par['custom_post_name'], 'n') : null;

      get_like_ranking ($show_up_to, $show_the_like_count, $thumb_data, $cat_id, $shorten_words, $custom_post_name);
    }
    echo $args['after_widget'];
  }
}
<div>
	<?php screen_icon('edit'); ?>
	<h2>WordPress Facebook Like Ranking</h2>
	<form action="" method="POST">
		<table class="form-table">
			<tr>
				<th><label for="create"><?php _e('Create a ranking', 'wp-facebook-like-ranking'); ?></label></th>
				<td>
					<p><?php _e('You need to do this just once.', 'wp-facebook-like-ranking'); ?></p>
					<input name="create" type="hidden" value="create" id="create" />
					<input type="submit" value="<?php _e('Create or Recreate', 'wp-facebook-like-ranking'); ?>" class="button" />
				</td>
			</tr>
		</table>
	</form>
	<form action="" method="POST">
		<table class="form-table">
			<tr>
				<th><label for="wp_fb_like_ranking_frequency"><?php _e('Frequency of updating', 'wp-facebook-like-ranking'); ?></label></th>
				<td>
					<select id="wp_fb_like_ranking_frequency" name="wp_fb_like_ranking_frequency">
						<option value="hourly" <?php if ($WpFbLikeRankingFrequency == 'hourly') echo 'selected'; ?>><?php _e('hourly', 'wp-facebook-like-ranking'); ?></option>
						<option value="twicedaily" <?php if ($WpFbLikeRankingFrequency == 'twicedaily') echo 'selected'; ?>>12時間おき（twicedaily）</option>
						<option value="daily" <?php if ($WpFbLikeRankingFrequency == 'daily') echo 'selected'; ?>><?php _e('daily', 'wp-facebook-like-ranking'); ?></option>
					</select>
				</td>
			</tr>
			<tr>
				<th><label for="wp_fb_like_ranking_updatePostNumber"><?php _e('The number of posts when updating', 'wp-facebook-like-ranking'); ?></label></th>
				<td>
					<select id="wp_fb_like_ranking_updatePostNumber" name="wp_fb_like_ranking_updatePostNumber">
						<option value="all" <?php if ($WpFbLikeRankingUpdatePostNumber == 'all') echo 'selected'; ?>><?php _e('All', 'wp-facebook-like-ranking'); ?></option>
						<option value="10" <?php if ($WpFbLikeRankingUpdatePostNumber == 10) echo 'selected'; ?>><?php _e('10 latest posts', 'wp-facebook-like-ranking'); ?></option>
						<option value="20" <?php if ($WpFbLikeRankingUpdatePostNumber == 20) echo 'selected'; ?>><?php _e('20 latest posts', 'wp-facebook-like-ranking'); ?></option>
						<option value="30" <?php if ($WpFbLikeRankingUpdatePostNumber == 30) echo 'selected'; ?>><?php _e('30 latest posts', 'wp-facebook-like-ranking'); ?></option>
						<option value="40" <?php if ($WpFbLikeRankingUpdatePostNumber == 40) echo 'selected'; ?>><?php _e('40 latest posts', 'wp-facebook-like-ranking'); ?></option>
						<option value="50" <?php if ($WpFbLikeRankingUpdatePostNumber == 50) echo 'selected'; ?>><?php _e('50 latest posts', 'wp-facebook-like-ranking'); ?></option>
					</select>
				</td>
			</tr>
		</table>
		<input type="submit" class="button-primary" value="<?php _e('Save', 'wp-facebook-like-ranking'); ?>" />
	</form>
</div>

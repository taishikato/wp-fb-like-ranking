<div>
	<?php screen_icon('edit'); ?>
	<h2>WordPress Facebook Like Ranking</h2>
	<form action="" method="POST">
		<table class="form-table">
			<tr>
				<th><label for="create">ランキング生成（Create a ranking）</label></th>
				<td>
					<p>このプラグインを有効化した後に一度だけこの作業が必要です。<br />一度この作業をしてしまえば、プラグインを無効にしない限り、二度とこの作業をする必要はありません。<br />記事数によっては1分ほどかかる場合もあります。</p>
					<p>（You need to do this just once.）</p>
					<input name="create" type="hidden" value="create" id="create" />
					<input type="submit" value="Create or Recreate" class="button" />
				</td>
			</tr>
		</table>
	</form>
	<form action="" method="POST">
		<table class="form-table">
			<tr>
				<th><label for="wp_fb_like_ranking_frequency">更新頻度（Frequency of updating）</label></th>
				<td>
					<select id="wp_fb_like_ranking_frequency" name="wp_fb_like_ranking_frequency">
						<option value="hourly" <?php if ($WpFbLikeRankingFrequency == 'hourly') echo 'selected'; ?>>1時間おき（hourly）</option>
						<option value="twicedaily" <?php if ($WpFbLikeRankingFrequency == 'twicedaily') echo 'selected'; ?>>12時間おき（twicedaily）</option>
						<option value="daily" <?php if ($WpFbLikeRankingFrequency == 'daily') echo 'selected'; ?>>24時間おき（daily）</option>
					</select>
				</td>
			</tr>
			<tr>
				<th><label for="wp_fb_like_ranking_updatePostNumber">更新時にチェックする記事数（The number of posts when updating）</label></th>
				<td>
					<select id="wp_fb_like_ranking_updatePostNumber" name="wp_fb_like_ranking_updatePostNumber">
						<option value="all" <?php if ($WpFbLikeRankingUpdatePostNumber == 'all') echo 'selected'; ?>>全ての記事（All）</option>
						<option value="10" <?php if ($WpFbLikeRankingUpdatePostNumber == 10) echo 'selected'; ?>>最新の10記事（10 latest）</option>
						<option value="20" <?php if ($WpFbLikeRankingUpdatePostNumber == 20) echo 'selected'; ?>>最新の20記事（20 latest）</option>
						<option value="30" <?php if ($WpFbLikeRankingUpdatePostNumber == 30) echo 'selected'; ?>>最新の30記事（30 latest）</option>
						<option value="40" <?php if ($WpFbLikeRankingUpdatePostNumber == 40) echo 'selected'; ?>>最新の40記事（40 latest）</option>
						<option value="50" <?php if ($WpFbLikeRankingUpdatePostNumber == 50) echo 'selected'; ?>>最新の50記事（50 latest）</option>
					</select>
				</td>
			</tr>
		</table>
		<input type="submit" class="button-primary" value="設定を更新" />
	</form>
</div>
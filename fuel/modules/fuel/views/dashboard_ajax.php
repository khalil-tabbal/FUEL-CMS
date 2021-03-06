<?php if ($this->fuel_auth->has_permission('logs')) : ?>
<?php if (!empty($latest_activity)) : ?>
<div class="dashboard_pod" style="width: 450px;">

	<h3>Latest Activity</h3>
	<ul class="nobullets">
		<?php foreach($latest_activity as $val) : ?>
		<li><strong><?=english_date($val['entry_date'], true)?>:</strong> <?=$val['message']?> by <?=$val['name']?></li>
		<?php endforeach; ?>
	</ul>
	<a href="<?=fuel_url('manage/activity')?>">View all activity</a>
</div>
<?php endif; ?>
<?php endif; ?>

<?php if (!empty($feed)) : ?>
<div class="dashboard_pod" style="width: 250px;">

	<h3>Latest FUEL News</h3>
	<ul class="nobullets">
		<?php foreach($feed as $item) : ?>
		<li><a href="<?=$item->get_link(0)?>" target="_blank"><?=$item->get_title()?></a></li>
		<?php endforeach; ?>
	</ul>
	<a href="<?=$this->config->item('dashboard_rss', 'fuel')?>">Subscribe to the RSS Feed</a>
</div>
<?php endif; ?>

<?php if (!empty($recently_modifed_pages)) : ?>
<div class="dashboard_pod" style="width: 250px;">
	<h3>Recently Modified Pages</h3>
		<ul class="nobullets">
			<?php foreach($recently_modifed_pages as $val) : ?>
			<li><a href="<?=fuel_url('pages/edit/'.$val['id'])?>"><?=$val['location']?></a></li>
			<?php endforeach; ?>
		</ul>
		<a href="<?=fuel_url('pages')?>">View all pages</a>
</div>
<?php endif; ?>


<?php if (!empty($docs) AND $this->fuel_auth->has_permission('site_docs')) : ?>
<div class="dashboard_pod" style="width: 250px;">

	<h3>Site Documentation</h3>
	<?php if (is_array($docs)) : ?>
	<ul class="nobullets">
		<?php foreach($docs as $url => $title) : ?>
		<li><a href="<?=$url?>" target="_blank"><?=$title?></a></li>
		<?php endforeach; ?>
	</ul>
	<?php else: ?>
	<?=$docs?>
	<?php endif; ?>
</div>
<?php endif; ?>



	<div class="clear"></div>
</div>

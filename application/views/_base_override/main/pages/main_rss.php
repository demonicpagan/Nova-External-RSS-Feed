<?php echo text_output($header, 'h1', 'page_head'); ?>

<?php echo $rss['rss_recent'] . $rss['rss_sim']; ?>, <?php echo $rss['rss_ucip']; ?>
<center>
	<ul>
		<?php foreach ($rss_items as $item): ?>
		<li><?=$item?></li>
		<?php endforeach; ?>
	</ul>
</center>
<a target='_blank' href='<?php echo $rss_url; ?>'><?php echo $rss['rss_full']; ?></a>

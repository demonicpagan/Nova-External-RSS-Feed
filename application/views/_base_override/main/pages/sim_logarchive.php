<?php echo text_output($header, 'h1', 'page_head'); ?>

<?php echo $rss['rss_recent'] . $rss['rss_sim']; ?>, <?php echo $rss['rss_ucip']; ?>
<br /><br />
<ul style="list-style-type: square; margin-left: 10px;">
		<?php foreach ($rss_items['items'] as $item): ?>
		<li><a target="_blank" href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></li>
		<?php endforeach; ?>
</ul>
<br />
<a target='_blank' href='<?php echo $rss_site_url; ?>'><?php echo $rss['rss_full']; ?></a>
<?php echo text_output($header, 'h1', 'page_head'); ?>

<?php echo $rss['rss_recent'] . $rss['rss_sim']; ?>, <?php echo $rss['rss_ucip']; ?>
<ul style="list-style-type: square;">
		<?php foreach ($rss_items as $item): ?>
		<li><a target="_blank" href="<?php echo $item->get_link(); ?>"><?php echo $item->get_title(); ?></a></li>
		<?php endforeach; ?>
</ul>
<br />
<a target='_blank' href='<?php echo $rss_site_url; ?>'><?php echo $rss['rss_full']; ?></a>

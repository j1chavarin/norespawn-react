<?php foreach ($staticresponse->{'entries'} as $item): 		
	$title = $item->static_title;
	$content = $item->static_content;
	
	$page_url = $_SERVER['REQUEST_URI'];
?>

	<?php if ((('/') . $title) == $page_url): ?>
	
		<?php echo $content ?>	
	
	<?php endif ?>

<?php endforeach; ?>
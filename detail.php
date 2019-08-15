<?php foreach ($projectsresponse->{'entries'} as $item): 		
	$title_url = $item->title_url;
	$title = $item->title;
	$content = $item->content;
	$page_url = $_SERVER['REQUEST_URI'];
?>	

<?php if (('/projects/') . $title_url == $page_url): ?>
		
<div class="jumbotron portfolio-detail">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h1><?php echo $title ?></h1>
				<?php echo $content ?>
			</div>	
		</div>	
	</div>	
</div>	
	
<?php endif ?>

<?php endforeach; ?>
<div class="jumbotron portfolio-list">
	<div class="container">
		<div class="row">
			<!-- Loop through CMS API Entries Endpoint -->
			<?php foreach ($projectsresponse->{'entries'} as $item): 		
				$image_path = $item->image->path;
				$image_alt = $item->image->meta->title;
				$title = $item->title;
				$title_url = $item->title_url;
				$features = $item->features;
				$involvement = $item->involvement;
				$website_url = $item->website_url;
				$aria_label = $item->aria_label;
			?>
			
			<!-- Project Card Start -->
			<div class="col-md col-lg-4">
				<div class="card">
					<a href="/projects/<?php echo urlencode($title_url) ?>"><img src="<?php echo $image_path ?>" alt="<?php echo $image_alt ?>" class="img-fluid" /></a>
					<div class="card-body">
						<h2 class="card-title"><?php echo $title ?></h2>
						<?php echo $features ?>
						<?php echo $involvement ?>
					</div>
					<div class="card-footer">
						<div class="btn-group" role="group">
							<a href="/projects/<?php echo urlencode($title_url) ?>" class="btn btn-outline-secondary">Process</a>
							<a href="<?php echo $website_url ?>" class="btn btn-outline-secondary" aria-label="<?php echo $aria_label ?>">Website</a>
						</div>
					</div>	
				</div>
			</div>	
			<!-- Project Card End -->
			
			<?php endforeach; ?>
			<!-- End Loop -->
		</div>
	</div>	
</div>

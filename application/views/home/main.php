
	<div class="content_container">
		
		<!-- Featured Title -->
		<div class="featured_title">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="section_title">Featured Posts</div>
								<div class="section_subtitle">latest post</div>
							</div>
							<div class="section_bar"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">

			 	<!-- Main Content -->

				<div class="col-lg-9">
					<div class="main_content">
						
						<!-- Featured -->

						<div class="featured">
							<div class="row">
								<div class="col-lg-8">
		<?php foreach($posts as $key =>$value): ?>
        <?php if ($key == 0): ?>
  
									<!-- Post -->
									<div class="post_item post_v_large d-flex flex-column align-items-start justify-content-start">
										<div class="post_image"><img src="<?= base_url(); ?>assets/img/posts/<?= $value['post_image']; ?>"></div>
										<div class="post_content">
											<div class="post_category cat_technology"><a href="#"><?= $value['name']; ?></a></div>
											<div class="post_title"><a href="<?= site_url('/Home/'.$value['slug']); ?>"><?= $value['title']; ?></a></div>
											<div class="post_info d-flex flex-row align-items-center justify-content-start">
												<div class="post_date"><a href="<?= site_url('/Home/'.$value['slug']); ?>"><?= $value['created_at']; ?></a></div>
											</div>
											<div class="post_text">
												<p><?= word_limiter($value['body'], 50); ?></p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4">
									
		<?php else:?>

									<!-- Post -->
									<div class="post_item post_v_small d-flex flex-column align-items-start justify-content-start">
										<div class="post_image"><img src="<?= base_url(); ?>assets/img/posts/<?= $value['post_image']; ?>"></div>
										<div class="post_content">
											<div class="post_category cat_world"><a href="#"><?= $value['name']; ?></a></div>
											<div class="post_title"><a href="<?= site_url('/Home/'.$value['slug']); ?>"><?= $value['title']; ?></a></div>
											<div class="post_info d-flex flex-row align-items-center justify-content-start">
												<div class="post_author d-flex flex-row align-items-center justify-content-start">
												<div class="post_date"><a href="<?= site_url('/Home/'.$value['slug']); ?>"><?= $value['created_at']; ?></a></div>
											</div>
										</div>
									</div>

		<?php endif; ?>
    	<?php endforeach;?>

								</div>
							</div>
						</div>
						</div>
					</div>
					</div>


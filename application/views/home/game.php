
	<div class="content_container">
		
		<!-- Featured Title -->
		<div class="featured_title">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="section_title">all article</div>
								<div class="section_subtitle"><?= $title;?></div>
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
						

<div class="technology_content">
        <?php foreach($game as $key): ?>

								<!-- Post -->
								<div class="post_item post_h_large">
									<div class="row">
										<div class="col-lg-5">
											<div class="post_image"><img src="<?= base_url(); ?>assets/img/posts/<?= $key['post_image']; ?>"></div>
										</div>
										<div class="col-lg-7">
											<div class="post_content">
												<div class="post_category cat_technology"><a href="category.html"><?= $key['name']; ?></a></div>
												<div class="post_title"><a href="<?= site_url('/Home/'.$key['slug']); ?>"><?= $key['title']; ?></a></div>
												<div class="post_info d-flex flex-row align-items-center justify-content-start">
													<div class="post_date"><a href="<?= site_url('/Home/'.$key['slug']); ?>"><?= $key['created_at']; ?></a></div>
												</div>
												<div class="post_text">
													<p><?= word_limiter($key['body'], 25); ?></p>
												</div>
											</div>
										</div>
									</div>	
								</div>
        <?php endforeach;?>

							</div>
						</div>

                            </div>
                    </div>
        </div>


</div>


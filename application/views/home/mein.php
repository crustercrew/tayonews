						<!-- Technology -->

						<div class="technology">
							<div class="section_title_container d-flex flex-row align-items-start justify-content-start">
								<div>
									<div class="section_title">From The World</div>
									<div class="section_subtitle">game articles</div>
								</div>
								<div class="section_bar"></div>
							</div>
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
												<div class="post_category cat_technology"><a href="<?=base_url('home/game');?>"><?= $key['name']; ?></a></div>
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


						<!-- World -->

						<div class="world">
							<div class="section_title_container d-flex flex-row align-items-start justify-content-start">
								<div>
									<div class="section_title">From The World</div>
									<div class="section_subtitle">tech article</div>
								</div>
								<div class="section_bar"></div>
							</div>
							<div class="row world_row">
								<div class="col-lg-11">
									<div class="row">
										<div class="col-lg-6">

        <?php foreach($tech as $key =>$value): ?>
        <?php if ($key == 0): ?>
  
											<!-- Post -->
											<div class="post_item post_v_med d-flex flex-column align-items-start justify-content-start">
												<div class="post_image"><img src="<?= base_url(); ?>assets/img/posts/<?= $value['post_image']; ?>"></div>
												<div class="post_content">
													<div class="post_category cat_video"><a href="<?=base_url('home/tech');?>"><?= $value['name']; ?></a></div>
													<div class="post_title"><a href="<?= site_url('/Home/'.$value['slug']); ?>"><?= $value['title']; ?></a></div>
													<div class="post_info d-flex flex-row align-items-center justify-content-start">
														<div class="post_date"><a href="<?= site_url('/Home/'.$value['slug']); ?>"><?= $value['created_at']; ?></a></div>
													</div>
													<div class="post_text">
														<p><?= word_limiter($value['body'], 25); ?></p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6">
        <?php else:?>
											<!-- Post -->
											<div class="post_item post_v_med d-flex flex-column align-items-start justify-content-start">
												<div class="post_image"><img src="<?= base_url(); ?>assets/img/posts/<?= $value['post_image']; ?>"></div>
												<div class="post_content">
													<div class="post_category cat_video"><a href="<?=base_url('home/tech');?>"><?= $value['name']; ?></a></div>
													<div class="post_title"><a href="<?= site_url('/Home/'.$value['slug']); ?>"><?= $value['title']; ?></a></div>
													<div class="post_info d-flex flex-row align-items-center justify-content-start">
														<div class="post_date"><a href="<?= site_url('/Home/'.$value['slug']); ?>"><?= $value['created_at']; ?></a></div>
													</div>
													<div class="post_text">
														<p><?= word_limiter($value['body'], 25); ?></p>
													</div>
												</div>
											</div>
										</div>
                                    </div>
        <?php endif; ?>
    	<?php endforeach;?>

								</div>
							</div>
						</div>


						<!-- Load more button -->
						<div class="load_more">
							<div class="load_more_button"><a href="<?= base_url('home/view_all');?>">load more</a></div>
						</div>
				</div>

				
	<!-- Sidebar -->
	<div class="col-lg-3">
						<div class="sidebar">

						<!-- Latest Posts -->
							<div class="sidebar_latest">
							<div class="sidebar_title">Latest Posts</div>
							<div class="latest_posts">

		<?php foreach($latest as $key =>$value): ?>
        <?php if ($key == 0): ?>
  
								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_post_image"><img src="<?= base_url(); ?>assets/img/posts/<?= $value['post_image']; ?>"></div></div>
									<div class="latest_post_content">
										<div class="post_category_small cat_world"><a href="#"><?= $value['name']; ?></a></div>
										<div class="latest_post_title"><a href="<?= site_url('/Home/'.$value['slug']); ?>"><?= $value['title']; ?></a></div>
										<div class="latest_post_date"><?= $value['created_at']; ?></div>
									</div>
								</div>
		<?php else:?>
								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_post_image"><img src="<?= base_url(); ?>assets/img/posts/<?= $value['post_image']; ?>"></div></div>
									<div class="latest_post_content">
										<div class="post_category_small cat_world"><a href="#"><?= $value['name']; ?></a></div>
										<div class="latest_post_title"><a href="<?= site_url('/Home/'.$value['slug']); ?>"><?= $value['title']; ?></a></div>
										<div class="latest_post_date"><?= $value['created_at']; ?></div>
									</div>
								</div>
		<?php endif; ?>
    	<?php endforeach;?>
							</div>
						</div>
	
						

						<div class="tags">
							<div class="sidebar_title">Tags</div>
							<div class="tags_content d-flex flex-row align-items-start justify-content-start flex-wrap">
								<div class="tag cat_technology"><a href="<?= base_url('home/game');?>">game</a></div>
								<div class="tag cat_video"><a href="<?= base_url('home/tech');?>">technology</a></div>
							</div>
						</div>

            	</div>
        	</div>
        </div>
	</div>
</div>
<br>
<br>
		<!-- Featured Title -->
		<div class="featured_title">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="section_title_container d-flex flex-row align-items-start justify-content-start">
							<div>
								<div class="section_title">view Posts</div>
								<div class="section_subtitle">latest post</div>
							</div>
							<div class="section_bar"></div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<div class="content_container">
		<div class="container">
			<div class="row">

				<!-- Single Post -->

				<div class="col-lg-9">

					<div class="single_post">
						<div class="post_image"><img src="<?= base_url(); ?>assets/img/posts/<?= $view['post_image']; ?>"></div>
						<div class="post_content">
                            <br>
                        <div class="judul_title"> <?= $view['title']; ?> </a></div>
						<br>
								<div class="section_subtitle"><?= $view['created_at']; ?></div>
							</div>
							<div class="post_text">
                                <p><?=$view['body'];?></p>
							</div>
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
										<div class="latest_post_title"><a href="single.html"><?= $value['title']; ?></a></div>
										<div class="latest_post_date"><?= $value['created_at']; ?></div>
									</div>
								</div>
		<?php else:?>
								<!-- Latest Post -->
								<div class="latest_post d-flex flex-row align-items-start justify-content-start">
									<div><div class="latest_post_image"><img src="<?= base_url(); ?>assets/img/posts/<?= $value['post_image']; ?>"></div></div>
									<div class="latest_post_content">
										<div class="post_category_small cat_world"><a href="#"><?= $value['name']; ?></a></div>
										<div class="latest_post_title"><a href="single.html"><?= $value['title']; ?></a></div>
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
			<hr>
				<h3> Comment</h3>
					<?php if($comments): ?>
						<?php foreach($comments as $comment): ?>
						<div class="d-flex p-2">
							<h5><?= $comment['message'];?>[by <strong><?= $comment['name']?></strong>]</h5>
						</div>
						<?php endforeach;?>
					<?php else: ?>
						<p> No Comment Nyet </p>
					<?php endif;?>
			<hr>
				<h3> Add Comment </h3>
				<?= validation_errors(); ?>
				<?=	form_open('comment/create/'.$view['slug']); ?>

				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control">
				</div>

				<div class="form-group">
					<label>Message</label>
					<textarea name="message" class="form-control"> </textarea>
				</div>
				<input type="hidden" name="slug" value="<?= $view['slug']; ?>">
				<button class="btn btn-primary" type="submit">Submit </button>
				</form>
		</div>


		</div>
	</div>
</div>
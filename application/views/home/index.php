<!-- Categories menu -->

<div class="intro">
	<div class="container">
		<div class="row">

			<?php foreach ($categorie as $key => $value) : ?>
				<?php if ($key == 0) : ?>

					<!-- Intro Item -->
					<div class="col-md-4 intro_col">
						<div class="intro_item">
							<img src="<?= base_url('assets/home/'); ?>images/intro_1.jpg" alt="">
							<div class="intro_content trans_200" name="val"><a href="<?= base_url('home/game'); ?>"><?= $value['name']; ?></a></div>
						</div>
					</div>

				<?php else : ?>

					<!-- Intro Item -->
					<div class="col-md-4 intro_col">
						<div class="intro_item">
							<img src="<?= base_url('assets/home/'); ?>images/intro_2.jpg" alt="">
							<div class="intro_content trans_200"><a href="<?= base_url('home/tech'); ?>"><?= $value['name']; ?></a></div>
						</div>
					</div>

				<?php endif; ?>
			<?php endforeach; ?>

		</div>
	</div>
</div>


<!-- Content Container -->
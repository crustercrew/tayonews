<div class="home">

  <!-- Home Slider -->
  <div class="home_slider_container">
    <div class="owl-carousel owl-theme home_slider">

      <!-- Slide -->
      <?php foreach ($posts as $key => $value) : ?>
        <?php if ($key == 0) : ?>

          <!-- Slide -->
          <div class="owl-item home_slider_item">
            <img class="d-block w-100" src="<?= base_url(); ?>assets/img/posts/<?= $value['post_image']; ?>">
            <div class="home_slider_content text-center">
              <div class="home_slider_content_inner" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                <div class="home_category"><a href="#"> <?= $value['name']; ?> </a></div>
                <div class="home_title"><?= $value['title']; ?></div>
                <div class="home_text"><?= word_limiter($value['body'], 25); ?></div>
                <div class="home_button trans_200"><a href="<?= site_url('/Home/' . $value['slug']); ?>">read more</a></div>
              </div>
            </div>
          </div>
        <?php else : ?>

          <!-- Slide -->
          <div class="owl-item home_slider_item">
            <img src="<?= base_url(); ?>assets/img/posts/<?= $value['post_image']; ?>">
            <div class="home_slider_content text-center">
              <div class="home_slider_content_inner" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
                <div class="home_category"><a href="#"><?= $value['name']; ?></a></div>
                <div class="home_title"><?= $value['title']; ?></div>
                <div class="home_text"><?= word_limiter($value['body'], 25); ?></div>
                <div class="home_button trans_200"><a href="<?= site_url('/Home/' . $value['slug']); ?>">read more</a></div>
              </div>
            </div>
          </div>
        <?php endif; ?>
      <?php endforeach; ?>
      <!-- Home Slider Navigation -->

    </div>

    <div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    <div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
  </div>
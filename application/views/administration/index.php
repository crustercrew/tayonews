        <!-- Begin Page Content -->
        
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        </div>
        <!-- /.container-fluid -->
        <div class="row"></div>
        <div class="col-lg-10">
          <h3> Latest Post </h3>
        <br>
            <?php foreach($posts as $p) : ?>
              <h3><?= $p['title']; ?> </h3> 
      <div class="row">
        <div class="col-md-3">
            <img class="post-thumb" src="<?= base_url(); ?>assets/img/posts/<?= $p['post_image']; ?>">
        </div>
        <div class="col-md-9">
            <small class="post-date"> posted on : <?= $p['created_at']; ?> in <strong> <?= $p['name'];?> </strong></small>
              <br>
              <?= word_limiter($p['body'], 55); ?>
              <br><br>
              <p><a class="btn btn-secondary" href="<?= site_url('/Administration/'.$p['slug']); ?>"> Read More</a></p>

        </div>
      </div>
            <?php endforeach; ?>

        </div>
       
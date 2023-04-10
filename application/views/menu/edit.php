   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

    <form class="user" method="post" action="">

<input type="hidden" name="id" value="<?= $menu['id']; ?>">
      <div class="form-group">
      <div class="col-sm-6">
          <label>Menu</label>
        <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="menu" value="<?= $menu['menu'];?>">
              <?= form_error('name', '<small class="text-danger pl-3">','</small>');?>
      </div>
      </div>

      <div class="col-sm-6">
        <button type="submit" class="btn btn-primary btn-user btn-block">
         ubah
        </button>
    </div>
<!-- /.container-fluid -->

      </div>
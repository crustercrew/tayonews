        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

          <form class="user" method="post" action="">

          <input type="hidden" name="id" value="<?= $users['id']; ?>">
                <div class="form-group">
                <div class="col-sm-6">
                    <label>Full Name</label>
                  <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= $users['name'];?>">
                        <?= form_error('name', '<small class="text-danger pl-3">','</small>');?>
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-6">
                    <label>Email</label>
                  <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address" value="<?= $users['email'];?>" >
                </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6">
                      <label>role_id</label>
                      <select class="form-control" id="role_id" name="role_id">
                        <?php foreach($role_id as $role) : ?>
                    <?php if($role == $users['role_id']) : ?>
                          <option value="<?= $role ?>" selected><?= $role ?></option>
                    <?php else : ?>
                        <option value="<?= $role ?>" ><?= $role ?></option>
                    <?php endif; ?>
                        <?php endforeach;?>

                      </select>
                  </div>
                </div>
                <div class="col-sm-6">
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  ubah
                </button>
                </div>
              </form>

          </div>
        <!-- /.container-fluid -->

      </div>

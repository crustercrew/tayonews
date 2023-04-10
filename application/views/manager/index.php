        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
          <br>
    
          <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role Id</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($users as $u) : ?>
                    <tr>
                    <th scope="row"><?= $i; ?></th>
                    <td><?= $u['name']; ?></td>
                    <td><?= $u['email']; ?></td>
                    <td><?= $u['role_id']; ?></td>
                    <td>
                        <a href="<?= base_url();?>manager/detail/<?=$u['id']?>" class="badge badge-primary">detail</a>
                        <a href="<?= base_url();?>manager/edit/<?=$u['id']?>" class="badge badge-success">edit</a>
                        <a href="<?= base_url();?>manager/hapus/<?=$u['id']?>" class="badge badge-danger">hapus</a>
                    </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
          </table>
          <br>

 <h5>Note : role id ditentukan sesuai jabatan user</h5>
 <h5>Role id 1 = Admin</h5>
 <h5>Role id 2 = User</h5> 
        </div>
        <!-- /.container-fluid -->

      </div>

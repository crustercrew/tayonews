        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        </div>

        <?= validation_errors(); ?>
        <!-- /.container-fluid -->
        <div class="row"></div>
        <div class="col-lg-10">

<?= form_open_multipart('administration/tambah'); ?>
  <div class="form-group">
    <label>Judul Berita</label>
    <input type="text" class="form-control" name="title" placeholder="add title">
    <small class="form-text text-muted">buat judul anda</small>
  </div>

  <div class="form-group">
<label>category</label>
<select name="category_id" class="form-control">
      <?php foreach($categories as $category): ?>
        <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
      <?php endforeach; ?>
</select>
</div>

  <div class="form-group">
        <label>Upload Image </label><br>
        <input type="file" name="userfile" size="20">
  </div>

  <div class="form-group">
    <label>isi</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add body"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
        </div>
        <!-- End of Main Content -->
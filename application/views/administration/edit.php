        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

        </div>

        <?= validation_errors(); ?>
        <!-- /.container-fluid -->
        <div class="row"></div>
        <div class="col-lg-10">

<?= form_open('administration/update'); ?>
<input type="hidden" name="id" value="<?= $post['id']; ?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="add title" value="<?= $post['title']; ?>">
    <small class="form-text text-muted">edit your title</small>
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
    <label>body</label>
    <textarea id="editor1" class="form-control" name="body" placeholder="Add body"><?= $post['body']; ?></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

        </div>
        </div>
        <!-- End of Main Content -->
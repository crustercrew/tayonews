<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $post['title'];?></h1>

</div>
<!-- /.container-fluid -->

<div class="col-lg-10">
<small class="post-date"> posted on : <?= $post['created_at']; ?> </small>
<img src="<?= base_url(); ?>assets/img/posts/<?= $post['post_image']; ?>">
        <div class="post-body">
            <?=$post['body'];?>
        </div>
</div>
<div class="col">
    <hr>
        

            <?= form_open('/administration/delete/'.$post['id']); ?>
            <a class="btn btn-primary pull-left" href="<?=base_url('/administration/edit/');?><?=$post['slug'];?>">edit</a>

            <input type="submit" value="Delete" class="btn btn-danger">
            </form>
</div>
</div>
<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <a href="<?php echo URLROOT; ?>/posts" class="btn btn-secondary text-light"><i class="fa fa-backward"></i> Back</a>
    <br>
    <h1>
        <?php echo $data['post']->title ?>
    </h1>
    <div class="bg-secondary text-white p-2 mb-3">Written By <?php echo $data['user']->name; ?> on <?php echo $data['post']->created_at; ?></div>
    <p><?php echo $data['post']->body; ?></p>

    <?php if ($data['post']->user_id == $_SESSION['user_id']) : ?>
        <hr>
        <div class="d-flex justify-content-between">

            <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-warning">Edit</a>
            <form action="<?php echo URLROOT; ?>/post/delete/<?php echo $data['post']->id; ?>" method="POST">
                <input type="submit" value="Delete" class="btn btn-danger">
            </form>
        </div>
    <?php endif; ?>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
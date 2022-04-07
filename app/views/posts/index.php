<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="container">
    <div class="row mb-4">
        <div class="col-md-6">
            <h1>Posts</h1>
        </div>
        <div class="col-md-6">
            <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary float-end">
                <i class="fa fa-pencil-alt"></i> Add Post
            </a>
        </div>
    </div>
    <?php foreach ($data['posts'] as $post) : ?>
        <div class="card bg-dark border-light card-body mb-3">
            <h4 class="card-title">
                <?php echo $post->title; ?>
            </h4>
            <div class="bg-dark p-2 mb-3">
                Written by <?php echo $post->name; ?> on <?php echo $post->postCreated; ?>
            </div>
            <p class="card-text">
                <?php echo $post->body; ?>
            </p>
            <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-secondary">More</a>
        </div>
    <?php endforeach; ?>
</div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
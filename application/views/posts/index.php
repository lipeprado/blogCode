<h2> <?= $title ?></h2>

<p> All Posts </p>

<?php foreach ($posts as $post) : ?>

        <div class="container-posts col-md-12">
            <div class="row">
                <div class="col-md-3">
                    <img style="width: 250px; height: 200px; border: 1px solid #422e51;" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['postimage'];  ?> " alt="">
                </div>
                <div class="col-md-9">
                    <h3 class="post-title"><?php echo $post['title']; ?></h3>
                    <span class="label label-primary post-date">Posted on <?php echo $post['created_at']; ?></span>
                    <span class="label label-warning">Category: <?php echo $post['name']; ?></span>
                    <p><?php echo substr($post['body'], 0, 100); ?></p>
                    <a class="btn btn-info" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Ver mais</a>
                </div>

            </div>
        </div>


 <?php endforeach?>

<h2><?php echo $post['title'] ?></h2>
<span class="label label-success post-date">Posted on <?php echo $post['created_at']; ?></span>
<div class="post-body">
    <?php echo $post['body'] ?>
</div>

<ul class="nav nav-pills">
    <li>
        <?php echo form_open('/posts/delete/'.$post['id']); ?>
            <input type="submit" name="" value="Delete" class="btn btn-danger">
            <a href="/posts" class="btn btn-primary">Voltar</a></li>
            <a href="/posts/edit/<?php echo $post['slug']; ?>" class="btn btn-warning">Editar</a>
        </form>

    </li>
</ul>

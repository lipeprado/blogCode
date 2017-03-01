<h2><?php $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/update'); ?>
    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter a Title:"  value="<?php echo $post['title']; ?>">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" placeholder="Enter a Body:" rows="8" cols="80" id="editor_main"><?php echo $post['body']; ?></textarea>

    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>

<h2><?php $title; ?></h2>
<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="Enter a Title:" id="title">
    </div>
    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" id="editor_main" placeholder="Enter a Body:" rows="8" cols="80"></textarea>
    </div>
    <div class="form-group">
        <label for="upload-image">Upload</label>
        <input type="file" name="userfile" size="20">
    </div>
    <div class="form-group">
        <label for="Category">Category</label>
        <select class="form-control" name="category_id">
            <?php foreach ($categories as $category): ?>
                <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?> </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>

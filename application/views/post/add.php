<h2>Add New Post</h2>

<?php echo form_open("post/do_add"); ?>

Title: <br>
<input type='text' name='title'/> <br>

Text: <br>
<textarea name='text' cols=30 rows=10></textarea> <br>

<input type='submit' value='Add Post'/>

<?php echo form_close(); ?>
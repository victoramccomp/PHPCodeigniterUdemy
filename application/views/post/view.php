<div class="post">
    <h2 class="post-title">
        <a href="<?php echo site_url("post/view/{$post['id_post']}"); ?>">
            <?php echo $post['title'];?>
        </a>
    </h2>
    <div class="post-date">
        <?php echo date("Y:M:d", $post['date']);?>
    </div>
    <div class="post-content">
        <?php echo nl2br($post['text']);?>
    </div>
    <br>
    <a href="<?php echo site_url("post/delete/{$post['id_post']}"); ?>">
        <button>Delete</button>
    </a>
</div>
<?php $title = "SUPER BLOG !"; ?>

<?php ob_start(); ?>
<h1>SUPER BLOG !</h1>
<p><a href="index.php?action=post&id=<?= $comment->post ?>">Back to list of posts</a></p>

<h2>Edit comment</h2>

<form action="index.php?action=updateComment&id=<?= $comment->identifier ?>" method="post">
   <div>
      <label for="author">Auteur</label><br />
      <input type="text" id="author" name="author" value="<?= htmlspecialchars($comment->author) ?>"/>
   </div>
   <div>
      <label for="comment">Comment</label><br />
      <textarea id="comment" name="comment"><?= htmlspecialchars($comment->comment) ?></textarea>
   </div>
   <div>
      <input type="submit" />
   </div>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>

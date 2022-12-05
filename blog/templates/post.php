<?php $title = "SUPER BLOG"; ?>

<?php ob_start(); ?>
<h1>SUPER BLOG</h1>
<p><a href="index.php">Back to list of posts</a></p>

<div class="news">
    <h3>
        <?= htmlspecialchars($post->title) ?>
        <em>on <?= $post->frenchCreationDate ?></em>
    </h3>

    <p>
        <?= nl2br(htmlspecialchars($post->content)) ?>
    </p>
</div>

<h2>Comments</h2>

<form action="index.php?action=addComment&id=<?= $post->identifier ?>" method="post">
   <div>
      <label for="author">Author</label><br />
      <input type="text" id="author" name="author" />
   </div>
   <div>
      <label for="comment">Comment</label><br />
      <textarea id="comment" name="comment"></textarea>
   </div>
   <div>
      <input type="submit" />
   </div>
</form>

<?php
foreach ($comments as $comment) {
?>
    <p><strong><?= htmlspecialchars($comment->author) ?></strong> on <?= $comment->frenchCreationDate ?> (<a href="index.php?action=updateComment&id=<?= $comment->identifier ?>">edit</a>)</p>
    <p><?= nl2br(htmlspecialchars($comment->comment)) ?></p>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>

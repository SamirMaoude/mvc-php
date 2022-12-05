<?php

namespace Application\Controllers\Comment\Update;

require_once('src/lib/database.php');
require_once('src/model/comment.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\Comment\CommentRepository;

class UpdateComment
{
    public function execute(string $identifier, ?array $input)
    {
        // It handles the form submission when there is an input.
        if ($input !== null) {
            $author = null;
            $comment = null;
            if (!empty($input['author']) && !empty($input['comment'])) {
                $author = $input['author'];
                $comment = $input['comment'];
            } else {
                throw new \Exception('The form data is invalid.');
            }

            $commentRepository = new CommentRepository();
            $commentRepository->connection = new DatabaseConnection();
            $success = $commentRepository->updateComment($identifier, $author, $comment);
            if (!$success) {
                throw new \Exception('Unable to edit Comment !');
            } else {
                header('Location: index.php?action=updateComment&id=' . $identifier);
            }
        }

        // Otherwise, it displays the form.
        $commentRepository = new CommentRepository();
        $commentRepository->connection = new DatabaseConnection();
        $comment = $commentRepository->getComment($identifier);
        if ($comment === null) {
            throw new \Exception("The Comment $identifier doesn't exist.");
        }

        require('templates/update_comment.php');
    }
}

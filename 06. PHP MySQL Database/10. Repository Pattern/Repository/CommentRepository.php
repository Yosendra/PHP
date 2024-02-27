<?php

namespace Repository;

require_once __DIR__ . "/../Model/Comment.php";

use Model\Comment;

interface ICommentRepository
{
    function insert(Comment $comment): Comment;
    function findById(int $id): ?Comment;
    function findAll(): array;
}

class CommentRepository implements ICommentRepository
{
    public function __construct(
        private \PDO $connection
    ){}

    function insert(Comment $comment): Comment
    {
        $sql = "INSERT INTO comments(email, comment) VALUES(?, ?)";
        $result = $this->connection->prepare($sql);
        $result->execute([
            $comment->getEmail(),
            $comment->getComment()]);
        
        $lastId = $this->connection->lastInsertId();
        $comment->setId($lastId);

        return $comment;
    }

    function findById(int $id): ?Comment
    {
        $sql = "SELECT * FROM comments WHERE id = ?";
        $result = $this->connection->prepare($sql);
        $result->execute([$id]);

        if ($row = $result->fetch())
            return new Comment(
                id: $row["id"], 
                email: $row["email"], 
                comment: $row["comment"]);
        else
            return null;
    }

    function findAll(): array
    {
        $sql = "SELECT * FROM comments";
        $result = $this->connection->query($sql);

        $comments = array();

        while ($row = $result->fetch()):
            $comments[] = new Comment(
                id: $row["id"], 
                email: $row["email"], 
                comment: $row["comment"]);
        endwhile;

        return $comments;
    }
}
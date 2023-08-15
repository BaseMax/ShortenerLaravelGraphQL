<?php

namespace App\GraphQL\Mutations;

use App\Models\Comment;

final class AddComment
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $comment = Comment::create([
            "user_id" => $args["userId"],
            "link_id" => $args["linkId"],
            "text"    => $args["text"]
        ]);
        return $comment;
    }
}

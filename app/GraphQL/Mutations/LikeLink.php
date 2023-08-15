<?php

namespace App\GraphQL\Mutations;

use App\Models\Like;

final class LikeLink
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $like = Like::create([
            "user_id" => $args["userId"],
            "link_id" => $args["linkId"]
        ]);
        return $like;
    }
}

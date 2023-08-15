<?php

namespace App\GraphQL\Mutations;
use App\Models\Bookmark;

final class CreateBookmark
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $bookmark = Bookmark::create([
            "user_id" => $args["userId"],
            "link_id" => $args["linkId"]
        ]);
        return $bookmark;
    }
}

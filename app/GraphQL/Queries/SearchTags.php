<?php

namespace App\GraphQL\Queries;

use App\Models\Tag;

final class SearchTags
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $limit = 5;
        if(isset($args["limit"]))
            $limit = $args["limit"];
        
        $tags = Tag::where("name", "like", "%" . $args["keyword"] . "%")->limit($limit)->get();
        return $tags;
    }
}

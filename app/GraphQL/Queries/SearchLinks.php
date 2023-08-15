<?php

namespace App\GraphQL\Queries;

use App\Models\Link;

final class SearchLinks
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $limit = 5;
        if(isset($args["limit"]))
            $limit = $args["limit"];
        
        $links = Link::where("original_url", "like", "%" . $args["keyword"] . "%")->limit($limit)->get();
        return $links;
    }
}

<?php

namespace App\GraphQL\Queries;

use App\Models\Category;

final class SearchCategories
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $limit = 5;
        if(isset($args["limit"]))
            $limit = $args["limit"];
        
        $categories = Category::where("name", "like", "%" . $args["keyword"] . "%")->limit($limit)->get();
        return $categories;
    }
}

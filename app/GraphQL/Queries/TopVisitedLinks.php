<?php

namespace App\GraphQL\Queries;

use App\Models\Link;

final class TopVisitedLinks
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $links = Link::orderBy("total_visits", "desc")->limit(10)->get();
        return $links;
    }
}

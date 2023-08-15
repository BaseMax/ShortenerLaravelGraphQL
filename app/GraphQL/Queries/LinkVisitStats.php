<?php

namespace App\GraphQL\Queries;

use App\Models\Link;

final class LinkVisitStats
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $visit = Link::where("short_code", $args["shortCode"])->first();
        return $visit["total_visits"];
    }
}

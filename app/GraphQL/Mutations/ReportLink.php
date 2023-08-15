<?php

namespace App\GraphQL\Mutations;

use App\Models\Report;

final class ReportLink
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $report = Report::create([
            "user_id" => $args["userId"],
            "link_id" => $args["linkId"],
            "issue"   => $args["issue"]
        ]);
        return $report;
    }
}

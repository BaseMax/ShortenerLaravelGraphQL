<?php

namespace App\GraphQL\Mutations;

use App\Models\Rate;

final class RateLink
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $rate = Rate::create([
            "user_id" => $args["userId"],
            "link_id" => $args["linkId"],
            "rating"  => $args["rating"]
        ]);
        return $rate;
    }
}

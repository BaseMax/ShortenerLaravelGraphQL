<?php

namespace App\GraphQL\Mutations;

use App\Models\Flag;

final class FlagLink
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $flag = Flag::create([
            "user_id" => $args["userId"],
            "link_id" => $args["linkId"],
            "reason"  => $args["reason"]
        ]);
        return $flag;
    }
}

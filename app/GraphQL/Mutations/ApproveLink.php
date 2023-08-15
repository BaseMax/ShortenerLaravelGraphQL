<?php

namespace App\GraphQL\Mutations;

use App\Models\Flag;

final class ApproveLink
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $flag = Flag::find($args["flagId"]);
        $flag->delete();
        return true;
    }
}

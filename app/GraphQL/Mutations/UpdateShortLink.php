<?php

namespace App\GraphQL\Mutations;

use App\Models\Link;

final class UpdateShortLink
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $link = Link::find($args["id"]);
        $link->update([
            "original_url" => $args["original_url"]
        ]);
        $link->save();
        return $link;
    }
}

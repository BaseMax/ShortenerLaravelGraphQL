<?php

namespace App\GraphQL\Mutations;

use App\Models\Link;
use App\Services\LinkShortener;

final class CreateShortLink
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $link = Link::create([
            "user_id"      => $args["user_id"],
            "original_url"  => $args["url"],
            "short_code"   => LinkShortener::uniqueShortCode(),
        ]);

        return $link;
    }
}

<?php

namespace App\GraphQL\Mutations;

use App\Models\Notification;

final class CreateNotification
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $notification = Notification::create([
            "user_id" => $args["userId"],
            "message" => $args["message"]
        ]);
        return $notification;
    }
}

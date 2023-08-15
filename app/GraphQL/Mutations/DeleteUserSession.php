<?php

namespace App\GraphQL\Mutations;

use App\Models\Session;

final class DeleteUserSession
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $session = Session::find($args["sessionId"]);
        $session->delete();
    }
}

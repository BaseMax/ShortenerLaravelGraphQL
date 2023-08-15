<?php

namespace App\GraphQL\Mutations;

use App\Models\Session;
use App\Models\User;

final class CreateUserSession
{
    /**
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $user = User::findOrFail($args["userId"])->first();
        $session = Session::create([
            "user_id"   => $args["userId"],
            "token"     => $user->createToken($user->username)->plainTextToken
        ]);
        return $session;
    }
}

<?php

namespace Rizseptiawan\LaravelPassportMongodb\Passport;
use Laravel\Passport\TokenRepository as PassportTokenRepository;

class TokenRepository extends PassportTokenRepository
{

    /**
     * Store the given token instance.
     *
     * @param  Object  $token
     * @return void
     */
    public function save(Object $token)
    {
        $token->save();
    }
}

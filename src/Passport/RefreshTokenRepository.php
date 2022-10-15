<?php

namespace Rizseptiawan\LaravelPassportMongodb\Passport;
use Laravel\Passport\RefreshTokenRepository as PassportRefreshTokenRepository;

class RefreshTokenRepository extends PassportRefreshTokenRepository
{
    /**
     * Stores the given token instance.
     *
     * @param  Object  $token
     * @return void
     */
    public function save(Object $token)
    {
        $token->save();
    }
}

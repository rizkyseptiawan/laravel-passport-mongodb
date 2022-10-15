<?php

namespace Rizseptiawan\LaravelPassportMongodb;

use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;
use Laravel\Passport\Console\ClientCommand as PassportClientCommand;
use Laravel\Passport\TokenRepository as PassportTokenRepository;
use Laravel\Passport\RefreshTokenRepository as PassportRefreshTokenRepository;
use Rizseptiawan\LaravelPassportMongodb\Passport\AuthCode;
use Rizseptiawan\LaravelPassportMongodb\Passport\Client;
use Rizseptiawan\LaravelPassportMongodb\Passport\PersonalAccessClient;
use Rizseptiawan\LaravelPassportMongodb\Passport\Token;
use Rizseptiawan\LaravelPassportMongodb\Passport\RefreshToken;
use Rizseptiawan\LaravelPassportMongodb\Passport\TokenRepository;
use Rizseptiawan\LaravelPassportMongodb\Passport\RefreshTokenRepository;
use Rizseptiawan\LaravelPassportMongodb\Console\ClientCommand;

class PassportMongodbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        Passport::useTokenModel(Token::class);
        Passport::useRefreshTokenModel(RefreshToken::class);
        Passport::useClientModel(Client::class);
        Passport::useAuthCodeModel(AuthCode::class);
        Passport::usePersonalAccessClientModel(PersonalAccessClient::class);

        $this->app->bind(PassportClientCommand::class, function () {
            return $this->app->make(ClientCommand::class);
        });
        $this->app->bind(PassportTokenRepository::class, function () {
            return $this->app->make(TokenRepository::class);
        });
        $this->app->bind(PassportRefreshTokenRepository::class, function () {
            return $this->app->make(RefreshTokenRepository::class);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}

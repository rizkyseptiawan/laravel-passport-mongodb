<?php

namespace Rizseptiawan\LaravelPassportMongodb\Console;

use Laravel\Passport\Console\ClientCommand as PassportClientCommand;
use Laravel\Passport\Passport;

class ClientCommand extends PassportClientCommand{

/**
     * Output the client's ID and secret key.
     *
     * @param  Object $client
     * @return void
     */
    protected function outputClientDetails(Object $client)
    {
        if (Passport::$hashesClientSecrets) {
            $this->line('<comment>Here is your new client secret. This is the only time it will be shown so don\'t lose it!</comment>');
            $this->line('');
        }

        $this->line('<comment>Client ID:</comment> '.$client->id);
        $this->line('<comment>Client secret:</comment> '.$client->plainSecret);
    }
}

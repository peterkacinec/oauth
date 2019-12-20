<?php

namespace App;

use Laravel\Passport\Client as BaseClient;

class Client extends BaseClient
{
    /**
     * Overriding default Passport Client function skipsAuthorization
     * Determine if the client should skip the authorization prompt.
     *
     * @return bool
     */
    public function skipsAuthorization()
    {
        return true;
    }
}

<?php

namespace Makeable\Instagram;

use League\OAuth2\Client\Token\AccessToken;

class InstagramUser
{
    protected $client;

    private function __construct()
    {
    }

    public static function find($token)
    {
        $user = new static;
        $user->client = app(InstagramClient::class);
        $user->data = $user->client->getResourceOwner(new AccessToken(['access_token' => $token]));
        return $user;
    }

    public function getFollowers()
    {
        $data = $this->data->toArray();
        return $data['counts']['followed_by'];
    }
}

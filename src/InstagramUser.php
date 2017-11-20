<?php

namespace Makeable\LaravelInstagram;

use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;
use League\OAuth2\Client\Token\AccessToken;

class InstagramUser implements Arrayable, JsonSerializable
{
    /**
     * @var
     */
    protected $client;

    public $data;

    /**
     * InstagramUser constructor.
     */
    private function __construct()
    {
    }

    /**
     * @param $token
     * @return static
     */
    public static function find($token)
    {
        $user = new static;
        $user->client = app(InstagramClient::class);
        $user->data = $user->client->getResourceOwner(new AccessToken(['access_token' => $token]));
        return $user;
    }

    /**
     * @return mixed
     */
    public function getFollowers()
    {
        return data_get($this->toArray(), 'counts.followed_by');
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray()
    {
        return $this->data->toArray();
    }

    /**
     * @return array
     */
    function jsonSerialize()
    {
        return $this->toArray();
    }
}

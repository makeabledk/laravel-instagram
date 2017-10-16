<?php
/**
 * Created by PhpStorm.
 * User: troels
 * Date: 09/10/2017
 * Time: 13.08
 */

namespace Makeable\Instagram;


class InstagramUser
{

    public static function find($token)
    {

        $user = new static;
        $user->client = app(InstagramClient::class);


        return $user;

        return $user;
    }

}

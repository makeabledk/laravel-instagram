<?php

namespace Makeable\Instagram\Tests;

use Makeable\Instagram\InstagramUser;

class InstagramClientTest extends TestCase
{

    public function testGetFollowers()
    {

        $token = '215756142.c6c6ce0.ffe2413fa21b41669362f8f0e105d925';

        $user = InstagramUser::find($token);



    }
}

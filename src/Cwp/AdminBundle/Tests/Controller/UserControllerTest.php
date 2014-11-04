<?php

namespace Cwp\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testUserlist()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/userlist');
    }

}

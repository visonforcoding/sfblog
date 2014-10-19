<?php

namespace Cwp\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class IndexControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/login');
    }

}

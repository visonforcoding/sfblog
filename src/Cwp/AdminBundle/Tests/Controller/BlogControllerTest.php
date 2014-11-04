<?php

namespace Cwp\AdminBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BlogControllerTest extends WebTestCase
{
    public function testAddcat()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addCat');
    }

}

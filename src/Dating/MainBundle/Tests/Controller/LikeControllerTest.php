<?php

namespace Dating\MainBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LikeControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/like');
    }

    public function testLike()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/like/u/{id}');
    }

}

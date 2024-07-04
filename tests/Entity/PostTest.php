<?php

namespace App\Tests\Entity;

use App\Entity\Post;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostTest extends WebTestCase
{ public function testGetterAndSetter(): void
    {
        //Instancier la classe
        $post = new Post();

        $post->setTitle('Test title');
        $this->assertEquals('Test title', $post->getTitle());

        $post->setAbstract('Test abstract');
        $this->assertEquals('Test abstract', $post->getAbstract());

        $post->setContent('Test content');
        $this->assertEquals('Test content', $post->getContent());

        $post->setImage('Test image');
        $this->assertEquals('Test image', $post->getImage());

        $createdAt = new \DateTimeImmutable('2022-03-18 12:00:00');
        $post->setCreatedAt($createdAt);
        $this->assertEquals($createdAt, $post->getCreatedAt());
    }
}

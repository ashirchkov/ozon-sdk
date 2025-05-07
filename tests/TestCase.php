<?php

namespace AlexeyShirchkov\Ozon\Tests;

use AlexeyShirchkov\Ozon\Common\Factory\SerializerFactory;
use AlexeyShirchkov\Ozon\Tests\Support\FixtureLoader;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Symfony\Component\Serializer\SerializerInterface;

abstract class TestCase extends BaseTestCase
{

    protected FixtureLoader $fixtureLoader;

    protected SerializerInterface $serializer;

    protected function setUp(): void {
        $this->fixtureLoader = new FixtureLoader(__DIR__ . '/Support/Fixture');
        $this->serializer = SerializerFactory::createSymfonySerializer();
    }

}
<?php

namespace AlexeyShirchkov\Ozon\Tests\Unit\Seller;

use AlexeyShirchkov\Ozon\Seller\ClientConfiguration;
use AlexeyShirchkov\Ozon\Tests\TestCase;

abstract class ServiceTestCase extends TestCase
{

    protected ClientConfiguration $configuration;

    protected function setUp(): void {

        parent::setUp();

        $this->configuration = new ClientConfiguration('host', 'client_id', 'api_key');

    }

}
<?php

namespace AlexeyShirchkov\Ozon\Tests\Support;

use RuntimeException;

class FixtureLoader
{
    private string $basePath;

    public function __construct(string $basePath) {
        $this->basePath = $basePath;
    }

    public function load(string $filename): string {

        $path = $this->basePath . '/' . $filename . '.json';

        if (!file_exists($path)) {
            throw new RuntimeException(sprintf('Fixture file "%s" not found.', $path));
        }

        return file_get_contents($path);

    }

}

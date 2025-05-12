<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Common\Model;

use JsonSerializable;

readonly abstract class AbstractModel implements JsonSerializable
{

    public function toArray(): array {
        return array_filter(get_object_vars($this));
    }

    public function jsonSerialize(): array {
        return $this->toArray();
    }

}
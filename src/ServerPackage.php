<?php

declare(strict_types=1);

namespace Bone\Server;

use Barnacle\Container;
use Barnacle\RegistrationInterface;

class ServerPackage implements RegistrationInterface
{
    /**
     * @param Container $c
     */
    public function addToContainer(Container $c)
    {
    }

    /**
     * @return string
     */
    public function getEntityPath(): string
    {
        return '';
    }

    /**
     * @return bool
     */
    public function hasEntityPath(): bool
    {
        return false;
    }
}

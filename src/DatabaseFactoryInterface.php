<?php

namespace Kocal\Expressive\Database;

use Psr\Container\ContainerInterface;

/**
 * Interface DatabaseInterface.
 */
interface DatabaseFactoryInterface
{
    public function __invoke(ContainerInterface $container);
}
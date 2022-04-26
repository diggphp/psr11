<?php

declare(strict_types=1);

namespace DiggPHP\Psr11;

use Exception;
use Psr\Container\ContainerExceptionInterface;

class ContainerException extends Exception implements ContainerExceptionInterface
{
}

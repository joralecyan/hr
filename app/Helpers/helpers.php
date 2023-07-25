<?php

use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

/**
 * @param string $type
 * @return int
 * @throws ContainerExceptionInterface
 * @throws NotFoundExceptionInterface
 */
function m_per_page(string $type = 'default'): int
{
    if (session()->has($type)) {
        return session()->get($type);
    }

    return config('dashboard.per_page');
}






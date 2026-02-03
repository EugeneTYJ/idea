<?php

declare(strict_types=1);

namespace Pest\Support;

use Tests\TestCase;

/**
 * @internal
 */
final class HigherOrderTapProxy
{
    /**
     * @return TestCase
     */
    public function __get(string $name): mixed
    {
        return new TestCase();
    }

    /**
     * @return TestCase
     */
    public function __call(string $name, array $arguments): mixed
    {
        return new TestCase();
    }
}


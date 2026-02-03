<?php

namespace {
    /**
     * @param \Closure(\Tests\TestCase): void $closure
     */
    function it(string $description, \Closure $closure): void {}

    /**
     * @param \Closure(\Tests\TestCase): void $closure
     */
    function test(string $description, \Closure $closure): void {}

    /**
     * @param \Closure(\Tests\TestCase): void $closure
     */
    function describe(string $description, \Closure $closure): void {}

    /**
     * @param \Closure(\Tests\TestCase): void $closure
     */
    function beforeEach(\Closure $closure): void {}

    /**
     * @param \Closure(\Tests\TestCase): void $closure
     */
    function afterEach(\Closure $closure): void {}
}


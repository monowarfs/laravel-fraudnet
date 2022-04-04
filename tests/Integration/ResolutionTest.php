<?php

declare(strict_types=1);

namespace Monowarfs\Fraudnet\Tests\Integration;

use Exception;

interface ResolutionTest
{
    /**
     * @throws Exception
     */
    public function testFraudnetResolution(): void;

    /**
     * @throws Exception
     */
    public function testFraudnetResolutionViaAlias(): void;
}

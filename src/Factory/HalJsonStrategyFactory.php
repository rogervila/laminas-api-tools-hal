<?php

declare(strict_types=1);

namespace Laminas\ApiTools\Hal\Factory;

// phpcs:disable WebimpressCodingStandard.PHP.CorrectClassNameCase.Invalid
use Interop\Container\ContainerInterface;
// phpcs:enable WebimpressCodingStandard.PHP.CorrectClassNameCase.Invalid
use Laminas\ApiTools\Hal\View\HalJsonRenderer;
use Laminas\ApiTools\Hal\View\HalJsonStrategy;

use function assert;

class HalJsonStrategyFactory
{
    /**
     * @return HalJsonStrategy
     */
    public function __invoke(ContainerInterface $container)
    {
        $renderer = $container->get('Laminas\ApiTools\Hal\JsonRenderer');
        assert($renderer instanceof HalJsonRenderer);

        return new HalJsonStrategy($renderer);
    }
}

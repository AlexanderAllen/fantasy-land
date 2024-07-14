<?php

declare(strict_types=1);

namespace FunctionalPHP\FantasyLand\Useful;

/**
 * @template a
 */
interface ValueOfInterface
{
    /**
     * Return value wrapped by Monad
     *
     * @return a
     */
    public function extract();
}

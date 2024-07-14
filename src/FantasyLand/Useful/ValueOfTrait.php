<?php

declare(strict_types=1);

namespace FunctionalPHP\FantasyLand\Useful;

/**
 * @template a
 *
 * @see \Widmogrod\Functional\valueOf Value extraction utility function.
 */
trait ValueOfTrait
{
    /**
     * Return value wrapped by Monad
     *
     * @return a
     */
    public function extract()
    {
        return $this->value instanceof ValueOfInterface
            ? $this->value->extract()
            : $this->value;
    }
}

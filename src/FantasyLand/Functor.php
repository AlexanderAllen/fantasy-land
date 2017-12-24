<?php

declare(strict_types=1);

namespace FunctionalPHP\FantasyLand;

interface Functor
{
    /**
     * map :: Functor f => (a -> b) -> f b
     *
     * @param callable $function
     *
     * @return self
     */
    public function map(callable $function): self;
}

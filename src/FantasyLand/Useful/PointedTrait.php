<?php

declare(strict_types=1);

namespace FunctionalPHP\FantasyLand\Useful;

/**
 * @template a
 */
trait PointedTrait
{
    /**
     * @var a
     */
    protected $value;

    /**
     * Ensure everything on start.
     *
     * @param a $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @template b
     * @param b $value
     * @return static<b>
     */
    public static function of($value)
    {
        return new static($value);
    }
}

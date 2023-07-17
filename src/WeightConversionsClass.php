<?php

namespace Rafi021\WeightConversions;

class WeightConversionsClass
{
    public static function kilograms(float $kilograms): self
    {
        return new static ($kilograms);
    }

    public function __construct(protected float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.2046;
    }

    public function toStones(): float
    {
        return $this->kilograms * 0.15747;
    }
}

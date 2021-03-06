<?php

namespace HiFolks\RandoPhp\Models;

class Integer
{
    private $min = 0;
    private $max = 100;

    /**
     * Set the greatest value to generate
     *
     * @param int $max greatest value
     * @return self
     */
    public function max(int $max)
    {
        $this->max = $max;
        return $this;
    }

    /**
     * Set the smallest value to generate
     *
     * @param  int $min smallest value
     * @return self
     */
    public function min(int $min)
    {
        $this->min = $min;
        return $this;
    }

    /**
     * Set the range (min and max)
     * Calling range(1,10), it is equivalent of ->min(1)->max(10)
     *
     * @param  int $min
     * @param  int $max
     * @return $this
     */
    public function range(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
        return $this;
    }

    /**
     * Generate and returns a random integer (considering $min and $max attribute)
     *
     * @return int the random value (integer)
     * @throws \Exception
     */
    public function generate(): int
    {
        return random_int($this->min, $this->max);
    }
}

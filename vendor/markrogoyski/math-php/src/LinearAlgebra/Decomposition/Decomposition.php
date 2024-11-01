<?php

namespace Sparkfp\MathPHP\LinearAlgebra\Decomposition;

use Sparkfp\MathPHP\LinearAlgebra\NumericMatrix;
abstract class Decomposition
{
    /**
     * @param NumericMatrix $M
     * @return static
     */
    public static abstract function decompose(NumericMatrix $M);
}

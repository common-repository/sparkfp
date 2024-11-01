<?php

namespace Sparkfp\SparkPlugins\SparkWoo\Common\Factories;

use Sparkfp\SparkPlugins\SparkWoo\Common\Models\ModelInterface;
interface FactoryInterface
{
    public function default() : array;
    public function create(array $data) : ModelInterface;
}

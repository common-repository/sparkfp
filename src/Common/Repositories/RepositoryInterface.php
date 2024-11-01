<?php

namespace Sparkfp\SparkPlugins\SparkWoo\Common\Repositories;

use Sparkfp\SparkPlugins\SparkWoo\Common\Models\ModelInterface;
interface RepositoryInterface
{
    public function all() : array;
    public function find($id) : ModelInterface;
    public function save(ModelInterface $model);
    public function update($id, ModelInterface $model);
    public function delete($id);
    public static function getTable() : string;
}

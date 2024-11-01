<?php

namespace Sparkfp\SparkPlugins\SparkWoo\Common\Modules;

use Sparkfp\SparkPlugins\SparkWoo\Common\Loader;
interface ModuleInterface
{
    public function defineAdminHooks(Loader $loader) : void;
    public function definePublicHooks(Loader $loader) : void;
}

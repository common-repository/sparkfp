<?php

namespace Sparkfp\SparkPlugins\SparkWoo\ProductRecommendations;

use Sparkfp\SparkPlugins\SparkWoo\Common\Cache\CacheManager;
use Sparkfp\SparkPlugins\SparkWoo\Common\Installation\AbstractUninstaller;
use Sparkfp\SparkPlugins\SparkWoo\Common\Installation\UninstallerInterface;
use Sparkfp\SparkPlugins\SparkWoo\Common\Options\OptionInterface;
use Sparkfp\SparkPlugins\SparkWoo\Common\Options\OptionsCollection;
use Sparkfp\SparkPlugins\SparkWoo\Common\Plugins\PluginMeta;
use Sparkfp\SparkPlugins\SparkWoo\Common\Plugins\PluginMetaCollection;
class Uninstaller extends AbstractUninstaller implements UninstallerInterface
{
    private string $pluginGroup;
    public function __construct(PluginMeta $pluginMeta, PluginMetaCollection $pluginMetaCollection, OptionInterface $deleteOptionsOption, OptionInterface $deletePostsOption, iterable $postModels, OptionsCollection $options, CacheManager $cacheManager, string $pluginGroup)
    {
        parent::__construct($pluginMeta, $pluginMetaCollection, $deleteOptionsOption, $deletePostsOption, $postModels, $options, $cacheManager);
        $this->pluginGroup = $pluginGroup;
    }
    public function uninstall() : void
    {
        if (!$this->pluginMetaCollection->hasOthersInstalled($this->pluginMeta, $this->pluginGroup)) {
            $this->removePosts();
        }
        $this->removeOptions();
        $this->cacheManager->clear();
    }
}

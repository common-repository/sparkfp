<?php



if (!\defined('ABSPATH')) {
    exit;
}
require_once __DIR__ . '/vendor/autoload.php';
use Sparkfp\Symfony\Component\Config\FileLocator;
use Sparkfp\Symfony\Component\DependencyInjection\ContainerBuilder;
use Sparkfp\Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
\defined('WP_UNINSTALL_PLUGIN') || exit;
$container = new ContainerBuilder();
$fileLocator = new FileLocator(__DIR__);
$loader = new YamlFileLoader($container, $fileLocator);
$loader->load('config/services-sparkfp.yaml');
$container->compile();
$uninstaller = $container->get('uninstaller');
$uninstaller->uninstall();

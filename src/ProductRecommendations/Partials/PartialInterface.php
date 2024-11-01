<?php

namespace Sparkfp\SparkPlugins\SparkWoo\ProductRecommendations\Partials;

use Sparkfp\SparkPlugins\SparkWoo\ProductRecommendations\Models\ProductRecommendationPostModel;
use Sparkfp\SparkPlugins\SparkWoo\ProductRecommendations\ProductPlacementHooks\ProductPlacementHookInterface;
interface PartialInterface
{
    /**
     * @var ProductRecommendationPostModel $productRecommendationPostModel
     * @var \WC_Product[] $products
     */
    public function render(ProductRecommendationPostModel $productRecommendationPostModel, array $products, ProductPlacementHookInterface $placementHook = null);
}

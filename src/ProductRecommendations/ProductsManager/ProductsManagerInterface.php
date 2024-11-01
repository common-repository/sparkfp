<?php

namespace Sparkfp\SparkPlugins\SparkWoo\ProductRecommendations\ProductsManager;

use Sparkfp\SparkPlugins\SparkWoo\ProductRecommendations\Models\ProductRecommendationPostModel;
interface ProductsManagerInterface
{
    public function getSlug() : string;
    public function getTitle() : string;
    public function getDescription() : string;
    public function getShortcode() : string;
    public function getRecommendedProductIdsCollection(ProductRecommendationPostModel $postModel) : RecommendedProductIdsCollection;
    public function getProductRecommendationPostModelsByHook(string $hook) : array;
}

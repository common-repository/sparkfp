<?php

namespace Sparkfp\SparkPlugins\SparkWoo\FeaturedProducts;

use Sparkfp\SparkPlugins\SparkWoo\ProductRecommendations\Models\ProductRecommendationPostModel;
use Sparkfp\SparkPlugins\SparkWoo\ProductRecommendations\ProductsManager\AbstractProductsManager;
use Sparkfp\SparkPlugins\SparkWoo\ProductRecommendations\ProductsManager\ProductsManagerInterface;
use Sparkfp\SparkPlugins\SparkWoo\ProductRecommendations\ProductsManager\RecommendedProductIdsCollection;
class FeaturedProductsManager extends AbstractProductsManager implements ProductsManagerInterface
{
    public function getRecommendedProductIdsCollection(ProductRecommendationPostModel $postModel) : RecommendedProductIdsCollection
    {
        return (new RecommendedProductIdsCollection(\wc_get_featured_product_ids()))->filterCurrentlyInCart()->filterCurrent();
    }
}

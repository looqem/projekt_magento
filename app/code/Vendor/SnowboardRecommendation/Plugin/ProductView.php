<?php
namespace Vendor\SnowboardRecommendation\Plugin;

class ProductView
{
    public function afterGetProductDetailsHtml(
        \Magento\Catalog\Block\Product\View $subject,
        $result
    ) {
        $result .= '<div class="snowboard-recommendation">Recommended Snowboard Sizes: 150cm - 160cm</div>';
        return $result;
    }
}

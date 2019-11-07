<?php
/**
 * @category    Kraken
 * @copyright   Copyright (c) 2019 Kraken, LLC
 */
namespace Kraken\DisplayMsrpInline\Plugin\Model\Product\Type;

class GroupedPlugin
{
    /**
     * Show "Availability" in grouped product grid
     *
     * @param \Magento\GroupedProduct\Model\Product\Type\Grouped $subject
     * @param $result
     * @return mixed
     */
    public function afterGetAssociatedProductCollection(\Magento\GroupedProduct\Model\Product\Type\Grouped $subject, $result)
    {
        $result->addAttributeToSelect('msrp');

        return $result;
    }

    /**
     * Prevent error
     *
     * The self::afterGetAssociatedProductCollection
     * code causes the \Magento\MsrpGroupedProduct\Pricing\MsrpPriceCalculator::getMsrpPriceValue method to be called,
     * which in turn throws this error:
     *
     * PHP message: PHP Fatal error:  Uncaught TypeError: Return value of
     * Magento\MsrpGroupedProduct\Pricing\MsrpPriceCalculator::getMsrpPriceValue() must be of the type float, string
     * returned in vendor/magento/module-msrp-grouped-product/Pricing/MsrpPriceCalculator.php:35
     *
     * @param \Magento\GroupedProduct\Model\Product\Type\Grouped $subject
     * @param $result
     * @return float
     */
    public function afterGetChildrenMsrp(\Magento\GroupedProduct\Model\Product\Type\Grouped $subject, $result)
    {
        return (float)$result;
    }
}

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
}

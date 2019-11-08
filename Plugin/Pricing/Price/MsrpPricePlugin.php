<?php
/**
 * @category    Kraken
 * @copyright   Copyright (c) 2019 Kraken, LLC
 */
namespace Kraken\DisplayMsrpInline\Plugin\Pricing\Price;

class MsrpPricePlugin
{
    /**
     * Disable the "Click for price" link from showing
     *
     * Even though the global configuration for "Display Actual Price" is "On Gesture" we are overriding
     * it here so that the template files that call this method don't output the "Click for price" link (both
     * for normal pricing display as well as for tiered pricing)
     *
     * @param \Magento\Msrp\Pricing\Price\MsrpPrice $subject
     * @return bool
     */
    public function aroundIsShowPriceOnGesture(\Magento\Msrp\Pricing\Price\MsrpPrice $subject, \Closure $callable)
    {
        return false;
    }
}

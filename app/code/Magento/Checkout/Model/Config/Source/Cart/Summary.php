<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Checkout\Model\Config\Source\Cart;

class Summary implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     * @codeCoverageIgnore
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('weergeven producten in winkelwage')],
            ['value' => 1, 'label' => __('weergaven product hoeveelheid')]
        ];
    }
}

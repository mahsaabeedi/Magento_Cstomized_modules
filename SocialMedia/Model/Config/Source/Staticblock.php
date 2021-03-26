<?php

namespace Gog\SocialMedia\Model\Config\Source;
class Staticblock implements \Magento\Framework\Option\ArrayInterface
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'Yes', 'label' => __('Yes')],
            ['value' => 'No', 'label' => __('No')]

        ];
    }
}
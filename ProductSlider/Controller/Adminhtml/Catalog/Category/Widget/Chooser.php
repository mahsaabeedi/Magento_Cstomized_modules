<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 3/1/2018
 * Time: 9:31 PM
 */

namespace Gog\ProductSlider\Controller\Adminhtml\Catalog\Category\Widget;


class Chooser extends
    \Magento\Catalog\Controller\Adminhtml\Category\Widget\Chooser
{
    protected function _getCategoryTreeBlock() {
        return $this->layoutFactory->create()->createBlock(
            'Gog\ProductSlider\Block\Adminhtml\Catalog\Category\Widget\Chooser',
            '',
            ['data' => [
                    'id' => $this->getRequest()->getParam('uniq_id'),
                    'use_massaction' => $this->getRequest()->getParam('use_massaction', false),
            ]
]
);
}
}
<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 4/11/2018
 * Time: 11:00 PM
 */

namespace Gog\ImageGrid\Model\Config\Source;


class GridsLayout implements \Magento\Framework\Option\ArrayInterface
{

    /**
     * Return array of options as value-label pairs
     *
     * @return array Format: array(array('value' => '<value>', 'label' => '<label>'), ...)
     */
    public function toOptionArray()
    {
       return [
           ['value' => 'layout1', 'label' => __('Layout1Label')],
            ['value' => 'layout2', 'label' => __('Layout2Label')]

       ];
    }
}
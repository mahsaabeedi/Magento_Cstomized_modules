<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 4/11/2018
 * Time: 9:33 PM
 */

namespace Gog\ImageGrid\Block\Widget;


class Grids extends \Magento\Framework\View\Element\Template implements \Magento\Widget\Block\BlockInterface
{
    protected $_blockModel;
    protected $_dataHelper;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Cms\Model\Block $blockModel,
        \Gog\ImageGrid\Helper\Data $dataHelper,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->_blockModel = $blockModel;
        $this->_dataHelper = $dataHelper;
    }

    public function _toHtml()
    {
        $this->setTemplate("widget/grids1.phtml");
        return parent::_toHtml();
    }
    public function getConfig($key, $default = NULL){
        if($this->hasData($key)){
            return $this->getData($key);
        }
        return $default;
    }



    public function getGridElements()
    {

        $data = $this->getData();
        $gridElements = [];

        foreach ($data as $k => $v)
        {
            if(preg_match("/grid_element/",$k))
            {
                if(isset($data[$k]) && $data[$k]!='')
                {
                    $html = $data[$k];
                }
                if($html!='')
                {
                    if(base64_decode($html, true) == true)
                    {
                        $html = str_replace(" ", "+", $html);
                        $html = base64_decode($html);
                    }
                    $html = $this->_dataHelper->filter($html);
                    $gridElements[] = $html;
                }

            }


        }
        return $gridElements;

    }

}
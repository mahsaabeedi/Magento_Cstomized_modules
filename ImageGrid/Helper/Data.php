<?php

namespace Gog\ImageGrid\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
	/**
     * @var \Magento\Cms\Model\Template\FilterProvider
     */
	protected $_filterProvider;

	/**
     * Store manager
     *
     * @var \Magento\Store\Model\StoreManagerInterface
     */
	protected $_storeManager;

	/**
	 * @param \Magento\Framework\App\Helper\Context      $context        
	 * @param \Magento\Cms\Model\Template\FilterProvider $filterProvider 
	 * @param \Magento\Store\Model\StoreManagerInterface $storeManager   
	 */
	public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Cms\Model\Template\FilterProvider $filterProvider,
		\Magento\Store\Model\StoreManagerInterface $storeManager
        ) {
        parent::__construct($context);
        $this->_filterProvider = $filterProvider;
		$this->_storeManager    = $storeManager;
    }

	public function filter($str)
	{
		$html = $this->_filterProvider->getPageFilter()->filter($str);
		return $html;
	}


}
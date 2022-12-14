<?php
namespace HexBrain\ProductView\Block\Adminhtml\ViewProductButton;

/**
 * Interceptor class for @see \HexBrain\ProductView\Block\Adminhtml\ViewProductButton
 */
class Interceptor extends \HexBrain\ProductView\Block\Adminhtml\ViewProductButton implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Widget\Context $context, \Magento\Framework\Registry $registry, \Magento\Catalog\Model\Product $product, \Magento\Store\Model\App\Emulation $emulation, \Magento\Backend\Helper\Data $backendHelper, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $product, $emulation, $backendHelper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canRender(\Magento\Backend\Block\Widget\Button\Item $item)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'canRender');
        return $pluginInfo ? $this->___callPlugins('canRender', func_get_args(), $pluginInfo) : parent::canRender($item);
    }
}

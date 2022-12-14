<?php
namespace AuroraExtensions\SimpleReturns\Block\Adminhtml\Rma\Status\Actions;

/**
 * Interceptor class for @see \AuroraExtensions\SimpleReturns\Block\Adminhtml\Rma\Status\Actions
 */
class Interceptor extends \AuroraExtensions\SimpleReturns\Block\Adminhtml\Rma\Status\Actions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Form\FormKey $formKey, \AuroraExtensions\SimpleReturns\Model\SystemModel\Module\Config $moduleConfig, \Magento\Backend\Block\Widget\Context $context, array $data = [])
    {
        $this->___init();
        parent::__construct($formKey, $moduleConfig, $context, $data);
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

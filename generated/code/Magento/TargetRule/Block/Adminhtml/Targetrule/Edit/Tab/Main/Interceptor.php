<?php
namespace Magento\TargetRule\Block\Adminhtml\Targetrule\Edit\Tab\Main;

/**
 * Interceptor class for @see \Magento\TargetRule\Block\Adminhtml\Targetrule\Edit\Tab\Main
 */
class Interceptor extends \Magento\TargetRule\Block\Adminhtml\Targetrule\Edit\Tab\Main implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\TargetRule\Model\Rule $rule, array $data = [])
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $rule, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getForm()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getForm');
        return $pluginInfo ? $this->___callPlugins('getForm', func_get_args(), $pluginInfo) : parent::getForm();
    }
}

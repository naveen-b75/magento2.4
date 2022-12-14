<?php
namespace Magento\Tax\Observer\CustomerLoggedInObserver;

/**
 * Interceptor class for @see \Magento\Tax\Observer\CustomerLoggedInObserver
 */
class Interceptor extends \Magento\Tax\Observer\CustomerLoggedInObserver implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Customer\Model\Session $customerSession, \Magento\Tax\Helper\Data $taxHelper, \Magento\Framework\Module\Manager $moduleManager, \Magento\PageCache\Model\Config $cacheConfig, \Magento\Tax\Api\TaxAddressManagerInterface $addressManager)
    {
        $this->___init();
        parent::__construct($groupRepository, $customerSession, $taxHelper, $moduleManager, $cacheConfig, $addressManager);
    }

    /**
     * {@inheritdoc}
     */
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute($observer);
    }
}

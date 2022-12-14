<?php
namespace Vendor\Module\Controller\Adminhtml\Report\Sales\MyCustomReport;

/**
 * Interceptor class for @see \Vendor\Module\Controller\Adminhtml\Report\Sales\MyCustomReport
 */
class Interceptor extends \Vendor\Module\Controller\Adminhtml\Report\Sales\MyCustomReport implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \Magento\Framework\Stdlib\DateTime\Filter\Date $dateFilter, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone, ?\Magento\Backend\Helper\Data $backendHelperData = null)
    {
        $this->___init();
        parent::__construct($context, $fileFactory, $dateFilter, $timezone, $backendHelperData);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}

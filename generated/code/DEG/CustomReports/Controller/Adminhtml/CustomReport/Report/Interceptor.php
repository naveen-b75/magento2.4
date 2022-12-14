<?php
namespace DEG\CustomReports\Controller\Adminhtml\CustomReport\Report;

/**
 * Interceptor class for @see \DEG\CustomReports\Controller\Adminhtml\CustomReport\Report
 */
class Interceptor extends \DEG\CustomReports\Controller\Adminhtml\CustomReport\Report implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \DEG\CustomReports\Controller\Adminhtml\CustomReport\Builder $builder)
    {
        $this->___init();
        parent::__construct($context, $resultPageFactory, $builder);
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

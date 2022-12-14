<?php
namespace DEG\CustomReports\Controller\Adminhtml\AutomatedExport\ExportCsv;

/**
 * Interceptor class for @see \DEG\CustomReports\Controller\Adminhtml\AutomatedExport\ExportCsv
 */
class Interceptor extends \DEG\CustomReports\Controller\Adminhtml\AutomatedExport\ExportCsv implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Framework\App\Response\Http\FileFactory $fileFactory, \DEG\CustomReports\Controller\Adminhtml\AutomatedExport\Builder $builder)
    {
        $this->___init();
        parent::__construct($context, $fileFactory, $builder);
    }

    /**
     * {@inheritdoc}
     */
    public function execute() : \Magento\Framework\App\ResponseInterface
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

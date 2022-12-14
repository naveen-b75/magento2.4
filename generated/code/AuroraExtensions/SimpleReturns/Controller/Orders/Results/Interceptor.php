<?php
namespace AuroraExtensions\SimpleReturns\Controller\Orders\Results;

/**
 * Interceptor class for @see \AuroraExtensions\SimpleReturns\Controller\Orders\Results
 */
class Interceptor extends \AuroraExtensions\SimpleReturns\Controller\Orders\Results implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \AuroraExtensions\SimpleReturns\Model\AdapterModel\Sales\Order $orderAdapter, \Magento\Framework\View\Result\PageFactory $resultPageFactory, \AuroraExtensions\SimpleReturns\Model\ViewModel\Rma\ListView $viewModel)
    {
        $this->___init();
        parent::__construct($context, $dataPersistor, $orderAdapter, $resultPageFactory, $viewModel);
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

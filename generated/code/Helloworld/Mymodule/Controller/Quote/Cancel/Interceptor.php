<?php
namespace Helloworld\Mymodule\Controller\Quote\Cancel;

/**
 * Interceptor class for @see \Helloworld\Mymodule\Controller\Quote\Cancel
 */
class Interceptor extends \Helloworld\Mymodule\Controller\Quote\Cancel implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultFactory, \Magento\Sales\Model\OrderFactory $orderFactory, \Magento\Sales\Controller\AbstractController\OrderLoaderInterface $orderLoader)
    {
        $this->___init();
        parent::__construct($context, $resultFactory, $orderFactory, $orderLoader);
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

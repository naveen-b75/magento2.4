<?php
namespace Helloworld\Mymodule\Controller\Index\Logger;

/**
 * Interceptor class for @see \Helloworld\Mymodule\Controller\Index\Logger
 */
class Interceptor extends \Helloworld\Mymodule\Controller\Index\Logger implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Psr\Log\LoggerInterface $loggerInterface)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $jsonFactory, $loggerInterface);
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

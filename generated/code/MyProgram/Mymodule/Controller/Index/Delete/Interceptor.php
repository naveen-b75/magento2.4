<?php
namespace MyProgram\Mymodule\Controller\Index\Delete;

/**
 * Interceptor class for @see \MyProgram\Mymodule\Controller\Index\Delete
 */
class Interceptor extends \MyProgram\Mymodule\Controller\Index\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \MyProgram\Mymodule\Model\ViewFactory $viewFactory, \Magento\Framework\Message\ManagerInterface $message)
    {
        $this->___init();
        parent::__construct($context, $viewFactory, $message);
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

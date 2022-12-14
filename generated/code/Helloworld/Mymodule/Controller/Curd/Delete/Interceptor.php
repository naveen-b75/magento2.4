<?php
namespace Helloworld\Mymodule\Controller\Curd\Delete;

/**
 * Interceptor class for @see \Helloworld\Mymodule\Controller\Curd\Delete
 */
class Interceptor extends \Helloworld\Mymodule\Controller\Curd\Delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Helloworld\Mymodule\Model\CurdFactory $curdFactory)
    {
        $this->___init();
        parent::__construct($context, $curdFactory);
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

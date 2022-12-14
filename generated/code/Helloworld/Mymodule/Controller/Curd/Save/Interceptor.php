<?php
namespace Helloworld\Mymodule\Controller\Curd\Save;

/**
 * Interceptor class for @see \Helloworld\Mymodule\Controller\Curd\Save
 */
class Interceptor extends \Helloworld\Mymodule\Controller\Curd\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Helloworld\Mymodule\Model\ResourceModel\Curd $resourceCurd, \Magento\Framework\App\Action\Context $context, \Helloworld\Mymodule\Model\CurdFactory $curdFactory, \Helloworld\Mymodule\Model\Curd $curd)
    {
        $this->___init();
        parent::__construct($resourceCurd, $context, $curdFactory, $curd);
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

<?php
namespace MyProgram\Mymodule\Controller\Index\Save;

/**
 * Interceptor class for @see \MyProgram\Mymodule\Controller\Index\Save
 */
class Interceptor extends \MyProgram\Mymodule\Controller\Index\Save implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \MyProgram\Mymodule\Model\View $view, \MyProgram\Mymodule\Model\ResourceModel\View $resourceView, \Magento\Framework\App\Cache\TypeListInterface $cacheTypelist, \Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendTool)
    {
        $this->___init();
        parent::__construct($context, $view, $resourceView, $cacheTypelist, $cacheFrontendTool);
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

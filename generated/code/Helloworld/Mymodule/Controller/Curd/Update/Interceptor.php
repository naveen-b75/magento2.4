<?php
namespace Helloworld\Mymodule\Controller\Curd\Update;

/**
 * Interceptor class for @see \Helloworld\Mymodule\Controller\Curd\Update
 */
class Interceptor extends \Helloworld\Mymodule\Controller\Curd\Update implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\UrlInterface $url, \Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Helloworld\Mymodule\Model\CurdFactory $curdFactory)
    {
        $this->___init();
        parent::__construct($url, $context, $pageFactory, $curdFactory);
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

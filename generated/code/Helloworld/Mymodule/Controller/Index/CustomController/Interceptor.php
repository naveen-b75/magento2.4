<?php
namespace Helloworld\Mymodule\Controller\Index\CustomController;

/**
 * Interceptor class for @see \Helloworld\Mymodule\Controller\Index\CustomController
 */
class Interceptor extends \Helloworld\Mymodule\Controller\Index\CustomController implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\UrlRewrite\Model\UrlRewriteFactory $urlRewriteFactory)
    {
        $this->___init();
        parent::__construct($context, $urlRewriteFactory);
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

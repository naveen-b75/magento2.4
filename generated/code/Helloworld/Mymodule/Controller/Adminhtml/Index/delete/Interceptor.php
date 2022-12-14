<?php
namespace Helloworld\Mymodule\Controller\Adminhtml\Index\delete;

/**
 * Interceptor class for @see \Helloworld\Mymodule\Controller\Adminhtml\Index\delete
 */
class Interceptor extends \Helloworld\Mymodule\Controller\Adminhtml\Index\delete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Helloworld\Mymodule\Model\CurdFactory $curdFactory, \Magento\Ui\Component\MassAction\Filter $filter, \Helloworld\Mymodule\Model\ResourceModel\Collection\CollectionFactory $collectionFactory)
    {
        $this->___init();
        parent::__construct($context, $curdFactory, $filter, $collectionFactory);
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

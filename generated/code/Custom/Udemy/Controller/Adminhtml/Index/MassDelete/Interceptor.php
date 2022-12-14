<?php
namespace Custom\Udemy\Controller\Adminhtml\Index\MassDelete;

/**
 * Interceptor class for @see \Custom\Udemy\Controller\Adminhtml\Index\MassDelete
 */
class Interceptor extends \Custom\Udemy\Controller\Adminhtml\Index\MassDelete implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \Magento\Ui\Component\MassAction\Filter $filter, \Custom\Udemy\Model\ResourceModel\View\CollectionFactory $collectionFactory, \Custom\Udemy\Model\ViewFactory $viewFactory)
    {
        $this->___init();
        parent::__construct($context, $filter, $collectionFactory, $viewFactory);
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

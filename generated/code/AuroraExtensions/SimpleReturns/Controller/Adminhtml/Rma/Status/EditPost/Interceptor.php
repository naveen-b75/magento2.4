<?php
namespace AuroraExtensions\SimpleReturns\Controller\Adminhtml\Rma\Status\EditPost;

/**
 * Interceptor class for @see \AuroraExtensions\SimpleReturns\Controller\Adminhtml\Rma\Status\EditPost
 */
class Interceptor extends \AuroraExtensions\SimpleReturns\Controller\Adminhtml\Rma\Status\EditPost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\App\Action\Context $context, \AuroraExtensions\SimpleReturns\Model\Email\Transport\Customer $emailTransport, \Magento\Framework\Event\ManagerInterface $eventManager, \AuroraExtensions\SimpleReturns\Exception\ExceptionFactory $exceptionFactory, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \AuroraExtensions\SimpleReturns\Csi\System\Module\ConfigInterface $moduleConfig, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\Serialize\Serializer\Json $serializer, \AuroraExtensions\SimpleReturns\Api\SimpleReturnRepositoryInterface $simpleReturnRepository)
    {
        $this->___init();
        parent::__construct($context, $emailTransport, $eventManager, $exceptionFactory, $formKeyValidator, $moduleConfig, $orderRepository, $resultJsonFactory, $serializer, $simpleReturnRepository);
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

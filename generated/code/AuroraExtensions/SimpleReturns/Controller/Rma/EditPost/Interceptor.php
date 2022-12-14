<?php
namespace AuroraExtensions\SimpleReturns\Controller\Rma\EditPost;

/**
 * Interceptor class for @see \AuroraExtensions\SimpleReturns\Controller\Rma\EditPost
 */
class Interceptor extends \AuroraExtensions\SimpleReturns\Controller\Rma\EditPost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \AuroraExtensions\SimpleReturns\Api\AttachmentRepositoryInterface $attachmentRepository, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \AuroraExtensions\SimpleReturns\Model\Email\Transport\Customer $emailTransport, \Magento\Framework\Escaper $escaper, \Magento\Framework\Event\ManagerInterface $eventManager, \AuroraExtensions\SimpleReturns\Exception\ExceptionFactory $exceptionFactory, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \AuroraExtensions\SimpleReturns\Csi\System\Module\ConfigInterface $moduleConfig, \AuroraExtensions\SimpleReturns\Model\AdapterModel\Sales\Order $orderAdapter, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress, \Magento\Framework\Serialize\Serializer\Json $serializer, \AuroraExtensions\SimpleReturns\Api\Data\SimpleReturnInterfaceFactory $simpleReturnFactory, \AuroraExtensions\SimpleReturns\Api\SimpleReturnRepositoryInterface $simpleReturnRepository, \AuroraExtensions\SimpleReturns\Model\Security\Token $tokenizer, \Magento\Framework\UrlInterface $urlBuilder)
    {
        $this->___init();
        parent::__construct($context, $attachmentRepository, $dataPersistor, $emailTransport, $escaper, $eventManager, $exceptionFactory, $formKeyValidator, $moduleConfig, $orderAdapter, $remoteAddress, $serializer, $simpleReturnFactory, $simpleReturnRepository, $tokenizer, $urlBuilder);
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

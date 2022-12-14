<?php
namespace AuroraExtensions\SimpleReturns\Controller\Adminhtml\Rma\CreatePost;

/**
 * Interceptor class for @see \AuroraExtensions\SimpleReturns\Controller\Adminhtml\Rma\CreatePost
 */
class Interceptor extends \AuroraExtensions\SimpleReturns\Controller\Adminhtml\Rma\CreatePost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \AuroraExtensions\SimpleReturns\Api\AttachmentRepositoryInterface $attachmentRepository, \DateTimeFactory $dateTimeFactory, \AuroraExtensions\SimpleReturns\Model\Email\Transport\Customer $emailTransport, \Magento\Framework\Escaper $escaper, \Magento\Framework\Event\ManagerInterface $eventManager, \AuroraExtensions\SimpleReturns\Exception\ExceptionFactory $exceptionFactory, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Model\File\UploaderFactory $fileUploaderFactory, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \AuroraExtensions\SimpleReturns\Model\SystemModel\Module\Config $moduleConfig, \AuroraExtensions\SimpleReturns\Model\AdapterModel\Sales\Order $orderAdapter, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\Serialize\Serializer\Json $serializer, \AuroraExtensions\SimpleReturns\Api\Data\SimpleReturnInterfaceFactory $simpleReturnFactory, \AuroraExtensions\SimpleReturns\Api\SimpleReturnRepositoryInterface $simpleReturnRepository, \Magento\Framework\UrlInterface $urlBuilder)
    {
        $this->___init();
        parent::__construct($context, $attachmentRepository, $dateTimeFactory, $emailTransport, $escaper, $eventManager, $exceptionFactory, $filesystem, $fileUploaderFactory, $formKeyValidator, $moduleConfig, $orderAdapter, $remoteAddress, $resultJsonFactory, $serializer, $simpleReturnFactory, $simpleReturnRepository, $urlBuilder);
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

<?php
namespace AuroraExtensions\SimpleReturns\Controller\Rma\Attachment\DeletePost;

/**
 * Interceptor class for @see \AuroraExtensions\SimpleReturns\Controller\Rma\Attachment\DeletePost
 */
class Interceptor extends \AuroraExtensions\SimpleReturns\Controller\Rma\Attachment\DeletePost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \AuroraExtensions\SimpleReturns\Api\AttachmentRepositoryInterface $attachmentRepository, \AuroraExtensions\SimpleReturns\Exception\ExceptionFactory $exceptionFactory, \Magento\Framework\Filesystem $filesystem, \Magento\MediaStorage\Model\File\UploaderFactory $fileUploaderFactory, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \AuroraExtensions\SimpleReturns\Model\SystemModel\Module\Config $moduleConfig, \AuroraExtensions\SimpleReturns\Model\AdapterModel\Sales\Order $orderAdapter, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress, \Magento\Framework\Serialize\Serializer\Json $serializer, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \AuroraExtensions\SimpleReturns\Api\SimpleReturnRepositoryInterface $simpleReturnRepository, \Magento\Framework\UrlInterface $urlBuilder)
    {
        $this->___init();
        parent::__construct($context, $attachmentRepository, $exceptionFactory, $filesystem, $fileUploaderFactory, $formKeyValidator, $moduleConfig, $orderAdapter, $remoteAddress, $serializer, $resultJsonFactory, $simpleReturnRepository, $urlBuilder);
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

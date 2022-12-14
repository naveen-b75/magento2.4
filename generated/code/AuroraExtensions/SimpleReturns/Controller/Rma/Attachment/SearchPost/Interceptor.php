<?php
namespace AuroraExtensions\SimpleReturns\Controller\Rma\Attachment\SearchPost;

/**
 * Interceptor class for @see \AuroraExtensions\SimpleReturns\Controller\Rma\Attachment\SearchPost
 */
class Interceptor extends \AuroraExtensions\SimpleReturns\Controller\Rma\Attachment\SearchPost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \AuroraExtensions\SimpleReturns\Model\SearchModel\Attachment $attachmentAdapter, \AuroraExtensions\SimpleReturns\Exception\ExceptionFactory $exceptionFactory, \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory, \Magento\Framework\Serialize\Serializer\Json $serializer, \Magento\Store\Model\StoreManagerInterface $storeManager)
    {
        $this->___init();
        parent::__construct($context, $attachmentAdapter, $exceptionFactory, $resultJsonFactory, $serializer, $storeManager);
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

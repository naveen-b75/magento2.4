<?php
namespace AuroraExtensions\SimpleReturns\Controller\Package\CreatePost;

/**
 * Interceptor class for @see \AuroraExtensions\SimpleReturns\Controller\Package\CreatePost
 */
class Interceptor extends \AuroraExtensions\SimpleReturns\Controller\Package\CreatePost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \AuroraExtensions\SimpleReturns\Exception\ExceptionFactory $exceptionFactory, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \AuroraExtensions\SimpleReturns\Csi\System\Module\ConfigInterface $moduleConfig, \AuroraExtensions\SimpleReturns\Api\Data\PackageInterfaceFactory $packageFactory, \AuroraExtensions\SimpleReturns\Api\PackageManagementInterface $packageManagement, \AuroraExtensions\SimpleReturns\Api\PackageRepositoryInterface $packageRepository, \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $remoteAddress, \AuroraExtensions\SimpleReturns\Api\Data\SimpleReturnInterfaceFactory $simpleReturnFactory, \AuroraExtensions\SimpleReturns\Api\SimpleReturnRepositoryInterface $simpleReturnRepository, \Magento\Framework\UrlInterface $urlBuilder)
    {
        $this->___init();
        parent::__construct($context, $exceptionFactory, $formKeyValidator, $moduleConfig, $packageFactory, $packageManagement, $packageRepository, $remoteAddress, $simpleReturnFactory, $simpleReturnRepository, $urlBuilder);
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

<?php
namespace AuroraExtensions\SimpleReturns\Controller\Orders\SearchPost;

/**
 * Interceptor class for @see \AuroraExtensions\SimpleReturns\Controller\Orders\SearchPost
 */
class Interceptor extends \AuroraExtensions\SimpleReturns\Controller\Orders\SearchPost implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\App\Request\DataPersistorInterface $dataPersistor, \AuroraExtensions\SimpleReturns\Exception\ExceptionFactory $exceptionFactory, \Magento\Framework\Data\Form\FormKey\Validator $formKeyValidator, \AuroraExtensions\SimpleReturns\Model\AdapterModel\Sales\Order $orderAdapter, \AuroraExtensions\SimpleReturns\Model\ViewModel\Rma\ListView $viewModel)
    {
        $this->___init();
        parent::__construct($context, $customerRepository, $dataPersistor, $exceptionFactory, $formKeyValidator, $orderAdapter, $viewModel);
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
